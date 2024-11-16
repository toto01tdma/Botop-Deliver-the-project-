<?php
if (!($_SERVER['REQUEST_METHOD'] === "POST")) {
    echo "Method Not Allowed!!!";
    exit;
}
require_once("../../includes/config.php");
$database_obj = new Database();

$database_obj->get_session_start();
$pdo = $database_obj->get_var_connect();

$action = $_POST["action"];

if ($action == "save_order") {
    $echo["status"] = 1;

    // อ่านข้อมูลจังหวัด
    $stmt = $pdo->prepare("SELECT * FROM `thai_area_provinces` WHERE thai_area_provinces.id = :id LIMIT 1");
    $stmt->bindParam(":id", $_POST["od_province_id"], PDO::PARAM_INT);
    $get = $database_obj->qrySql($stmt);
    $get_address["province"] = $get["data"][0]["name_th"];

    // อ่านข้อมูลอำเภอ
    $stmt = $pdo->prepare("SELECT * FROM `thai_area_amphures` WHERE thai_area_amphures.id = :id LIMIT 1");
    $stmt->bindParam(":id", $_POST["od_amphur_id"], PDO::PARAM_INT);
    $get = $database_obj->qrySql($stmt);
    $get_address["amphure"] = $get["data"][0]["name_th"];

    // อ่านข้อมูลตำบล
    $stmt = $pdo->prepare("SELECT * FROM `thai_area_districts` WHERE thai_area_districts.id = :id LIMIT 1");
    $stmt->bindParam(":id", $_POST["od_tumbol_id"], PDO::PARAM_INT);
    $get = $database_obj->qrySql($stmt);
    $get_address["district"] = $get["data"][0]["name_th"];

    $stmt = $pdo->prepare("SELECT orders.od_id FROM orders WHERE orders.od_status = 1 AND orders.user_id = :user_id LIMIT 1");
    $stmt->bindParam(":user_id", $_SESSION["user"]["user_id"], PDO::PARAM_INT);
    $get_order = $database_obj->qrySql($stmt);
    if ($get_order["count_all"] > 0) {

        // ถ้าเลือกชำระโดยการโอน จะต้องมีการตรวจสลิป
        if ($_POST["od_option_payment"] == 2) {
            $od_status = "2";
            if (!isset($_FILES["slip_file"])) {
                $echo["status"] = 0;
                $echo["error"] = "กรุณาแนบไฟล์หลักฐานการชำระเงิน";
                echo json_encode($echo);
                exit;
            } else if ($_POST["slip_date"] == "" || $_POST["slip_time"] == "") {
                $echo["status"] = 0;
                $echo["error"] = "กรุณากรอกข้อมูลวันที่ และ เวลาการชำระเงิน";
                echo json_encode($echo);
                exit;
            } else {
                $file_obj = $database_obj->check_file_image($_FILES["slip_file"]);
                if ($file_obj["status"] == 1) {
                    $path = $_dr_storage . "/slips";
                    $target_file = $get_order["data"][0]["od_id"] . $database_obj->get_table_id("slips") . $file_obj["file_name"];
                    if (move_uploaded_file($_FILES["slip_file"]["tmp_name"], $path . "/" . $target_file)) {
                        $date_time = $_POST["slip_date"] . " " . $_POST["slip_time"];
                        $stmt = $pdo->prepare("INSERT INTO `slips`(`slip_img`, `slip_datetime`, `od_id`) VALUES (:slip_img, :slip_datetime, :od_id)");
                        $stmt->bindParam(":slip_img", $target_file, PDO::PARAM_STR);
                        $stmt->bindParam(":slip_datetime", $date_time, PDO::PARAM_STR);
                        $stmt->bindParam(":od_id", $get_order["data"][0]["od_id"], PDO::PARAM_INT);
                        $result = $stmt->execute();
                        if (!$result) {
                            $echo["status"] = 0;
                            $echo["error"] = "ไม่สามารถบันทึกรูปได้";
                            echo json_encode($echo);
                            exit;
                        }
                    } else {
                        $echo["status"] = 0;
                        $echo["error"] = "ไม่สามารถเก็บรูปได้";
                        echo json_encode($echo);
                        exit;
                    }
                }
            }
        } else {
            $od_status = "4";
        }

        $stmt = $pdo->prepare("SELECT order_lists.*, products.pd_name, products.pd_stock, products.pd_freight, products.pd_payment_period, products.pd_price
                                    FROM order_lists INNER JOIN products ON products.pd_id = order_lists.pd_id 
                                    WHERE order_lists.od_id = :od_id");
        $stmt->bindParam(":od_id", $get_order["data"][0]["od_id"], PDO::PARAM_INT);
        $get_odl = $database_obj->qrySql($stmt);

        if ($get_odl["count_all"] > 0) {
            $period = 999;
            $sum_price = 0;

            foreach ($get_odl["data"] as $odl) {
                if ($odl["pd_stock"] > 0) {

                    $sum_price += intval($odl["pd_price"]) * intval($odl["odl_quantity"]);

                    // คำนวณหาวันที่ต้องชำระ โดยจะอิงจากสินค้าที่ระยะเวลาชำระต่ำสุด
                    if ($odl["pd_payment_period"] < $period) {
                        $period = $odl["pd_payment_period"];
                    }

                    // ตรวจสอบว่าจำนวนที่ผู้ใช้สั่งซื้อ มากกว่าจำนวนสินค้าในระบบหรือไม่
                    if ($odl["odl_quantity"] > $odl["pd_stock"]) {
                        $qty = $odl["pd_stock"];
                    } else {
                        $qty = $odl["odl_quantity"];
                    }

                    // ตัดสต็อกสินค้าคงเหลือ
                    $update_stock = $odl["pd_stock"] - $qty;
                    $stmt = $pdo->prepare("UPDATE products SET pd_stock = :pd_stock WHERE pd_id = :pd_id");
                    $stmt->bindParam(":pd_stock", $update_stock, PDO::PARAM_INT);
                    $stmt->bindParam(":pd_id", $odl["pd_id"], PDO::PARAM_INT);
                    $stmt->execute();

                    // อัพเดทจำนวนที่จะสั่ง และ ราคาตอนสั่งซื้อ และ ชื่อสินค้าตอนสั่งซื้อ ลงในตาราง order_lists
                    $stmt = $pdo->prepare("UPDATE order_lists SET odl_quantity = :odl_quantity, odl_price = :odl_price, odl_pd_name = :odl_pd_name WHERE odl_id = :odl_id");
                    $stmt->bindParam(":odl_quantity", $qty, PDO::PARAM_INT);
                    $stmt->bindParam(":odl_price", $odl["pd_price"], PDO::PARAM_INT);
                    $stmt->bindParam(":odl_pd_name", $odl["pd_name"], PDO::PARAM_STR);
                    $stmt->bindParam(":odl_id", $odl["odl_id"], PDO::PARAM_INT);
                    $stmt->execute();
                } else {
                    // ลบรายการเฉพาะสินค้าที่หมด ลงในตาราง order_lists
                    $stmt = $pdo->prepare("DELETE FROM `order_lists` WHERE odl_id = :odl_id");
                    $stmt->bindParam(":odl_id", $odl["odl_id"], PDO::PARAM_INT);
                    $stmt->execute();
                }
            }

            // ตรวจสอบเงื่อนไขโรโมชั่น
            $promotion_result = $database_obj->check_promotion_conditions($get_order["data"][0]["od_id"]);
            $freight = $promotion_result["freight"];
            $freight_old = $promotion_result["freight_old"];
            $discount = $promotion_result["discount"];

            $stmt = $pdo->prepare("UPDATE `orders` SET `od_date`=:od_date, `od_renewal_date`=:od_renewal_date, `od_status`=:od_status, `od_option_payment`=:od_option_payment, `od_payment_period`=:od_payment_period, `od_tell`=:od_tell, `od_province`=:od_province, `od_amphur`=:od_amphur, `od_tumbol`=:od_tumbol, `od_zipcode`=:od_zipcode, `od_address`=:od_address, `od_freight`=:od_freight, `od_freight_old`=:od_freight_old, `od_discount`=:od_discount, `od_user_name`=:od_user_name WHERE od_id = :od_id");
            $dateAndTime = date("Y/m/d H:i:s");
            $stmt->bindParam(":od_date", $dateAndTime, PDO::PARAM_STR);
            $stmt->bindParam(":od_renewal_date", $dateAndTime, PDO::PARAM_STR);
            $stmt->bindValue(":od_status", $od_status, PDO::PARAM_INT);
            $stmt->bindParam(":od_option_payment", $_POST["od_option_payment"], PDO::PARAM_INT);
            $stmt->bindParam(":od_payment_period", $period, PDO::PARAM_INT);
            $stmt->bindParam(":od_tell", $_POST["od_tell"], PDO::PARAM_STR);
            $stmt->bindParam(":od_province", $get_address["province"], PDO::PARAM_STR);
            $stmt->bindParam(":od_amphur", $get_address["amphure"], PDO::PARAM_STR);
            $stmt->bindParam(":od_tumbol", $get_address["district"], PDO::PARAM_STR);
            $stmt->bindParam(":od_zipcode", $_POST["od_zipcode"], PDO::PARAM_STR);
            $stmt->bindParam(":od_address", $_POST["od_address"], PDO::PARAM_STR);
            $stmt->bindParam(":od_freight", $freight, PDO::PARAM_STR);
            $stmt->bindParam(":od_freight_old", $freight_old, PDO::PARAM_STR);
            $stmt->bindParam(":od_discount", $discount, PDO::PARAM_STR);
            $stmt->bindParam(":od_user_name", $_POST["od_user_name"], PDO::PARAM_STR);
            $stmt->bindParam(":od_id", $get_order["data"][0]["od_id"], PDO::PARAM_INT);
            $result = $stmt->execute();
            if (!$result) {
                $echo["status"] = 0;
                $echo["error"] = "บันทึกออเดอร์ไม่สำเร็จ";
            } else {
                // แจ้งเตือนผ่านไลน์
                $line_message = "แจ้งเตือนการสั่งซื้อ \n\n มีรายการสั่งซื้อดังนี้ \n";
                $index = 1;
                foreach ($get_odl["data"] as $odl) {
                    $line_message .= $index . ") " . $odl["pd_name"] . " ราคา " . number_format($odl["pd_price"]) . " บาท จำนวน " . number_format($odl["odl_quantity"]) . " ชิ้น \n";
                    $index += 1;
                }
                $line_message .= "\nรวมเป็นเงิน " . number_format($sum_price) . " บาท \n";
                if ($freight <= 0) {
                    $line_message .= "ค่าขนส่ง ส่งฟรี \n";
                } else {
                    $line_message .= "ค่าขนส่ง " . number_format($freight) . " บาท \n";
                }
                $sum_price_last_freight = $sum_price + $freight;
                $line_message .= "จํานวน​เงิน​หลัง​รวม​ค่า​ขน​ส่ง " . number_format($sum_price_last_freight) . " บาท \n";
                $line_message .= "ส่วนลด " . number_format($discount) . " บาท \n";
                $sum_price_last_freight_discount = $sum_price_last_freight - $discount;
                $line_message .= "จํานวน​เงิน​หลังหักส่วนลด " . number_format($sum_price_last_freight_discount) . " บาท \n";
                $line_message .= "รวมทั้งสิ้น " . number_format($sum_price_last_freight_discount) . " บาท \n\n";

                $od_option_payment_obj = $database_obj->order_option_payment_int_to_text($_POST["od_option_payment"]);
                // $line_message .= "ช่องทางชำระเงิน : " . $od_option_payment_obj["thai"] . "\n";
                // $line_message .= "ชื่อ : " . $_POST["od_user_name"] . "\n";
                // $line_message .= "รายละเอียดที่อยู่ : " . $_POST["od_address"] . "\n";
                // $line_message .= "ตำบล/แขวง : " . $get_address["district"] . "\n";
                // $line_message .= "อำเภอ : " . $get_address["amphure"] . "\n";
                // $line_message .= "จังหวัด : " . $get_address["province"] . "\n";
                // $line_message .= "รหัสไปรษณีย์ : " . $_POST["od_zipcode"] . "\n";
                // $line_message .= "เบอร์ : " . $_POST["od_tell"] . "\n\n";

                // $line_message .= $_SESSION["user"]["user_firstname"] . " " . $_SESSION["user"]["user_lastname"];

                // $Token = "BjwXh7mTZhcB6YArqSmnSlYM38yJ6LWsl0EKGVmOB7W";
                // $database_obj->line_notify($Token, $line_message);

                // แจ้งเตือนผ่านหน้าเว็บ
                // $notication_message = nl2br($line_message); // สลับจาก \n เป็น <br>

                $email_message = '
                    <div style="max-width: 500px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif;">
                        <div style="text-align: center; margin-bottom: 20px;">
                            <img src="http://www.samphraonightrun.net/botop/assets/img/brand/logo.PNG" alt="โลโก้ของแบรนด์" style="max-width: 75%;">
                        </div>
                        <div style="font-size: 24px; font-weight: bold; margin-bottom: 10px; color:#0d0c22; text-align:center;">ใบสั่งซื้อ</div>
                        <div style="margin-bottom: 20px;">
                            <p><strong>ชื่อลูกค้า:</strong> '.$_POST["od_user_name"].'</p>
                            <p><strong>วันที่สั่งซื้อ:</strong> '.date("j F Y").'</p>
                        </div>
                        <table style="border-collapse: collapse; width: 100%;">
                            <thead>
                                <tr>
                                    <th style="border: 1px solid #ccc; padding: 8px; text-align: left; background-color: #FFF7E4;">#</th>
                                    <th style="border: 1px solid #ccc; padding: 8px; text-align: left; background-color: #FFF7E4;">รายการสินค้า</th>
                                    <th style="border: 1px solid #ccc; padding: 8px; text-align: left; background-color: #FFF7E4;">ราคา</th>
                                </tr>
                            </thead>
                            <tbody>';
                $ind = 1;
                foreach ($get_odl["data"] as $odl) {
                    $email_message .= '
                                <tr>
                                    <td style="border: 1px solid #ccc; padding: 8px; text-align: left;">'.$ind.'</td>
                                    <td style="border: 1px solid #ccc; padding: 8px; text-align: left;">'.$odl["pd_name"].'</td>
                                    <td style="border: 1px solid #ccc; padding: 8px; text-align: left;">'.$odl["pd_price"].'</td>
                                </tr>
                    ';
                    $ind += 1;
                }
                $email_message .= '
                            </tbody>
                        </table>
                        <div style="margin-top: 20px; text-align: right;">
                            <p><strong>ยอดรวมราคาสินค้า:</strong> '.number_format($sum_price).' บาท</p>
                            <p><strong>ส่วนลด:</strong> '.number_format($discount).' บาท</p>
                            <p><strong>ค่าขนส่ง:</strong> '.number_format($freight).' บาท</p>
                            <p><strong>ยอดรวมสุทธิ:</strong> '.number_format($sum_price_last_freight_discount).'</p>
                        </div>
                    </div>
                ';

                $echo["result_alert_notication"] = $database_obj->create_alert_notication("แจ้งเตือนการสั่งซื้อ", $email_message, $_SESSION["user"]["user_id"]);
                // $echo["result_send_email"] = $database_obj->send_email($_SESSION["user"]["user_email"], "ใบสั่งซื้อ", $email_message);
            }
        } else {
            $echo["status"] = 0;
            $echo["error"] = "ไม่มีรายการสินค้าในตะกร้า";
        }
    } else {
        $echo["status"] = 0;
        $echo["error"] = "ไม่มีรายการสินค้าในตะกร้า";
    }
    echo json_encode($echo);
} else if ($action == "read_orders") {
    $echo["status"] = 1;
    $condition = (isset($_POST["order_id"])) ? " AND orders.od_id = :od_id " : ""; // แสดงเฉพาะออเดอร์ 1 ตัว
    $condition .= (isset($_POST["query_for_my_user"])) ? " AND orders.user_id = :user_id " : ""; // แสดงเฉพาะออเดอร์ของตนเอง
    $condition .= (isset($_POST["search_by_order_status"])) ? " AND orders.od_status = :od_status " : ""; // ค้นหาตามเงื่อนขของสถานะการสั่งซื้อ
    if (isset($_POST["keyword_search_by_name"])) {
        $condition .= ($_POST["keyword_search_by_name"] != "") ? " AND (users.user_firstname LIKE :keyword_search_by_name OR users.user_lastname LIKE :keyword_search_by_name OR orders.od_user_name LIKE :keyword_search_by_name) " : ""; // ค้นหาตามเงื่อนไขชื่อผู้ใช้
    }
    $condition_limit = (isset($_POST["page"])) ? " LIMIT " . ($_POST["page"] * 50) . ",50 " : "";

    // เรียงข้อมูลสำหรับแอดมินหรือสมาชิกทั่วไป
    if (isset($_POST["quety_for_admin"])) {
        // เรียงตามสถานะการสั่งซื้อ 2 4 5 6 3 0 ตามลำดับ
        $ORDER_BY = "
                WHEN orders.od_status = 2 THEN 1
                WHEN orders.od_status = 4 THEN 2
                WHEN orders.od_status = 5 THEN 3
                WHEN orders.od_status = 6 THEN 4
                WHEN orders.od_status = 3 THEN 5
                WHEN orders.od_status = 0 THEN 6
            ";
    } else {
        // เรียงตามสถานะการสั่งซื้อ 3 2 4 5 6 0 ตามลำดับ
        $ORDER_BY = "
                WHEN orders.od_status = 3 THEN 1
                WHEN orders.od_status = 2 THEN 2
                WHEN orders.od_status = 4 THEN 3
                WHEN orders.od_status = 5 THEN 4
                WHEN orders.od_status = 6 THEN 5
                WHEN orders.od_status = 0 THEN 6
            ";
    }

    $stmt = $pdo->prepare("SELECT SQL_CALC_FOUND_ROWS orders.*, CONCAT(users.user_firstname, ' ', users.user_lastname) AS od_user_name_in_system FROM orders 
                                INNER JOIN users ON users.user_id = orders.user_id 
                                WHERE NOT orders.od_status = 1 " . $condition . " 
                                ORDER BY CASE 
                                " . $ORDER_BY . "
                                END, orders.od_date DESC " . $condition_limit);
    if (isset($_POST["order_id"])) {
        $stmt->bindValue(':od_id', $_POST["order_id"], PDO::PARAM_INT);
    } // แสดงเฉพาะออเดอร์ 1 ตัว 
    if (isset($_POST["query_for_my_user"])) {
        $stmt->bindValue(':user_id', $_SESSION["user"]["user_id"], PDO::PARAM_INT);
    } // แสดงเฉพาะออเดอร์ของตนเอง
    if (isset($_POST["search_by_order_status"])) {
        $stmt->bindValue(':od_status', $_POST["search_by_order_status"], PDO::PARAM_INT);
    } // ค้นหาตามเงื่อนขของสถานะการสั่งซื้อ
    if (isset($_POST["keyword_search_by_name"])) {
        if ($_POST["keyword_search_by_name"] != "") {
            $stmt->bindValue(':keyword_search_by_name', '%' . $_POST["keyword_search_by_name"] . '%', PDO::PARAM_STR);
        } // ค้นหาตามเงื่อนไขชื่อผู้ใช้
    }
    $get = $database_obj->qrySql($stmt);
    $echo["count_all"] = $get["count_all"];
    $echo["data"] = [];
    foreach ($get["data"] as $rs) {
        // รีเทิร์นตัวอักษร สถานะการสั่งซื้อ
        $od_status_obj = $database_obj->order_status_int_to_text($rs["od_status"]);
        $rs["od_status_text"] = $od_status_obj["thai"];
        $rs["od_status_bg_color"] = $od_status_obj["bg_color"];

        // รีเทิร์นตัวอักษร ช่องทางการชำระเงิน
        $od_option_payment_obj = $database_obj->order_option_payment_int_to_text($rs["od_option_payment"]);
        $rs["od_option_payment_text"] = $od_option_payment_obj["thai"];
        $rs["od_option_payment_bg_color"] = $od_option_payment_obj["bg_color"];
        if ($rs["od_option_payment"] == 2) {
            // ออเดอร์ไหนที่ชำระโดยการโอนแล้วยังไม่ชำระเงิน จะดึงระยะเวลาที่เหลือ
            if ($rs["od_status"] == 3) {
                $result = $database_obj->check_order_deadline($rs["od_id"]);

                if ($result["days_difference"] == 0) {
                    $rs["od_option_payment_text"] .= " <span style='color:#FF0000;'>(วันสุดท้าย)</span>";
                } else if ($result["days_difference"] < 0) {
                    $rs["od_option_payment_text"] .= " <span style='color:#FF0000;'>ยกเลิกการสั่งซื้อนี้ไปเลย</span>";
                } else {
                    $rs["od_option_payment_text"] .= " <span style='color:#FF0000;'>(ชำระภายเงินใน " . $result["days_difference"] . " วัน)</span>";
                }
            }
        }
        // คำนวณราคาค่าสินค้ารวม (แต่ไม่รวมค่าขนส่ง)
        $stmt = $pdo->prepare("SELECT SUM(odl_quantity * odl_price) AS total FROM order_lists WHERE od_id = :od_id LIMIT 1");
        $stmt->bindValue(':od_id', $rs["od_id"], PDO::PARAM_INT);
        $get_total = $database_obj->qrySql($stmt);
        $rs["od_total"] = $get_total["data"][0]["total"];

        $echo["data"][] = $rs;
    }
    echo json_encode($echo);
} else if ($action == "update_status_order") {
    $echo["status"] = 1;

    $stmt = $pdo->prepare("UPDATE orders SET od_status = :od_status, od_status_reply = :od_status_reply WHERE od_id = :od_id LIMIT 1");
    $stmt->bindParam(":od_status", $_POST["od_status"], PDO::PARAM_INT);
    $stmt->bindParam(":od_status_reply", $_POST["approve_reply"], PDO::PARAM_STR);
    $stmt->bindParam(":od_id", $_POST["order_id"], PDO::PARAM_INT);
    $result = $stmt->execute();
    if (!$result) {
        $echo["status"] = 0;
        $echo["error"] = "ไม่สามารถบันทึกได้";
    } else {
        // ต่ออายุในกรณีที่แอดมินส่งสถานะมาว่าชำระเงินไม่ผ่าน
        if ($_POST["od_status"] == 3) {
            $r = $database_obj->check_order_deadline($_POST["order_id"]);
            if ($r["days_difference"] <= 0) {
                $stmt = $pdo->prepare("UPDATE orders SET od_renewal_date = :od_renewal_date, od_payment_period = 1 WHERE od_id = :od_id LIMIT 1");
                $stmt->bindParam(":od_id", $_POST["order_id"], PDO::PARAM_INT);
                $stmt->bindParam(":od_renewal_date", date("Y-m-d H:i:s"), PDO::PARAM_STR);
                $stmt->execute();
            }
        }

        // แจ้งเตือนผ่านหน้าเว็บ
        // ดึงข้อมูลรายการสั่งซื้อ และเขียนเป็นอีลีเมนต์
        $stmt = $pdo->prepare("SELECT order_lists.*, products.pd_name FROM order_lists INNER JOIN products ON order_lists.pd_id = products.pd_id WHERE order_lists.od_id = :od_id");
        $stmt->bindValue(':od_id', $_POST["order_id"], PDO::PARAM_INT);
        $get = $database_obj->qrySql($stmt);
        $order_list_message = "";
        $index = 1;
        $total_price = 0;
        $total_quantity = 0;
        foreach ($get["data"] as $rs) {
            $sum_price = ($rs["odl_quantity"] * $rs["odl_price"]);
            $total_price += ($rs["odl_quantity"] * $rs["odl_price"]);
            $total_quantity += $rs["odl_quantity"];
            $order_list_message .= '
                    <tr>
                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;">' . $index . '</td>
                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;">' . $rs["pd_name"] . '</td>
                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;">' . $rs["odl_price"] . '.-</td>
                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;">' . $rs["odl_quantity"] . ' ชิ้น</td>
                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;">' . number_format($sum_price, 2) . ' บาท</td>
                    </tr>
                ';
            $index += 1;
        }

        // ดึงข้อมูลการสั่งซื้อ
        $stmt = $pdo->prepare("SELECT orders.*, users.user_email FROM orders INNER JOIN users ON orders.user_id = users.user_id WHERE orders.od_id = :od_id LIMIT 1");
        $stmt->bindValue(':od_id', $_POST["order_id"], PDO::PARAM_INT);
        $get = $database_obj->qrySql($stmt);
        $get_order = $get["data"][0];

        $od_status_obj = $database_obj->order_status_int_to_text($get_order["od_status"]);
        $notication_message = '
                <div style="font-family: Arial, sans-serif; background-color: #f0f0f0; margin: 0; padding: 20px; display: flex; justify-content: center; align-items: center; text-align:center; min-height: 100vh;">  
                    <div style="background-color: #fff; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); padding: 20px; text-align: center; margin-left:auto; margin-right:auto;">
                        <div style="text-align: center; margin-bottom: 20px;">
                            <img src="http://www.samphraonightrun.net/botop/assets/img/brand/logo.PNG" alt="โลโก้ของแบรนด์" style="max-width: 75%;">
                        </div>
                        <div style="font-size: 24px; font-weight: bold; margin-bottom: 10px; color:#0d0c22;">สถานะการสั่งซื้อ</div>
                        <div style="font-size: 18px; color: #333; margin-bottom: 20px;">การสั่งซื้อของคุณ <span style="color:' . $od_status_obj["bg_color"] . ';">' . $od_status_obj["thai"] . '</span></div>
                        <div style="font-size: 16px; color: #666; text-align: left;">
                            <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                                <thead>
                                    <tr>
                                        <th style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd; background-color: #FFEED1;">#</th>
                                        <th style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd; background-color: #FFEED1;">รายการสินค้า</th>
                                        <th style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd; background-color: #FFEED1;">ราคา</th>
                                        <th style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd; background-color: #FFEED1;">จำนวน</th>
                                        <th style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd; background-color: #FFEED1;">ราคารวม</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ' . $order_list_message . '
                                    <tr>
                                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;" colspan="3"><span style="font-weight:bold;">รวม</span></td>
                                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;">' . $total_quantity . ' ชิ้น</td>
                                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;">' . number_format($total_price, 2) . ' บาท</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;" colspan="3"><span style="font-weight:bold;">ค่าขนส่ง</span></td>
                                        <td colspan="2" style="padding: 10px; text-align: right; border-bottom: 1px solid #ddd;">' . $get_order["od_freight"] . ' บาท</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;" colspan="3"><span style="font-weight:bold;">ส่วนลด</span></td>
                                        <td colspan="2" style="padding: 10px; text-align: right; border-bottom: 1px solid #ddd;">' . $get_order["od_discount"] . ' บาท</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;" colspan="3"><span style="font-weight:bold;">รวมสุทธิ</span></td>
                                        <td colspan="2" style="padding: 10px; text-align: right; border-bottom: 1px solid #ddd;">' . (($total_price + $get_order["od_freight"]) - $get_order["od_discount"]) . ' บาท</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <span style="font-weight:bold;">ที่อยู่จัดส่ง : </span> ' . $get_order["od_address"] . ' ' . $get_order["od_zipcode"] . ' ตำบล' . $get_order["od_tumbol"] . ' อำเภอ' . $get_order["od_amphur"] . ' จังหวัด' . $get_order["od_province"] . '
                        </div>
                    </div>
                </div>
            ';

        $echo["result_alert_notication"] = $database_obj->create_alert_notication("แจ้งเตือนการอัพเดทสถานะสั่งซื้อ", $notication_message, $get_order["user_id"]);
        // $echo["result_send_email"] = $database_obj->send_email($get_order["user_email"], "แจ้งเตือนการอัพเดทสถานะการสั่งซื้อ", $notication_message);
    }
    echo json_encode($echo);
} else if ($action == "cancel_order") {
    $stmt = $pdo->prepare("SELECT order_status.permission_cancel_order FROM orders INNER JOIN order_status ON orders.od_status = order_status.odstt_id WHERE orders.od_id = :od_id LIMIT 1");
    $stmt->bindParam(":od_id", $_POST["od_id"], PDO::PARAM_INT);
    $get_order = $database_obj->qrySql($stmt);

    if ($get_order["data"][0]["permission_cancel_order"] == "1") {
        $stmt = $pdo->prepare("UPDATE orders SET od_status = 0 WHERE od_id = :od_id LIMIT 1");
        $stmt->bindParam(":od_id", $_POST["od_id"], PDO::PARAM_INT);
        $result = $stmt->execute();
        if (!$result) {
            $echo["status"] = 0;
            $echo["error"] = "ไม่สามารถบันทึกได้";
        } else {
            $echo["status"] = 1;
            $echo["return_text"] = "ยกเลิกสำเร็จ";
        }
    } else {
        $echo["status"] = 0;
        $echo["error"] = "ไม่สามารถยกเลิกได้ เพราะอยู่ในสถานะที่ไม่สามารถยกเลิกได้";
    }
    echo json_encode($echo);
} /*else if($action == "read_order_status"){
    $echo["status"] = 1;
    $stmt = $pdo->prepare("SELECT * FROM order_status ");
    $get = $database_obj->qrySql($stmt);
    $data = array();
    foreach($get["data"] AS $rs){
        $data[] = $rs;
    }
    $echo["data"] = $data;
    echo json_encode($echo);
}*/

$database_obj->closs_sql();
?>