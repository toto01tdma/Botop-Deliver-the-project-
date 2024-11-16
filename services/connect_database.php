<?php
/** Class Database สำหรับติดต่อฐานข้อมูล และ รวมฟังก์ชั่น */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class Database {
    /**
     * กำหนดตัวแปรแบบ private
     * Method Connect ใช้สำหรับการเชื่อมต่อ Database
     *
     * @var string|null
     * @return PDO
     */
    private $host = "localhost";   // ชื่อเซิฟเวอร์
    private $dbname = "samphrao_tshop"; // ชื่อฐานข้อมูล
    private $username = "root"; // ชื่อผู้ใช้งานที่ใช้เข้าสู่ฐานข้อมูล       samphrao_tshop
    private $password = ""; // // รหัสผ่านผู้ใช้งานที่ใช้เข้าสู่ฐานข้อมูล    1111111111
    private $conn = null;

    function __construct() {
        try{
            /** PHP PDO */
            $this->conn = new PDO('mysql:host='.$this->host.'; 
                                dbname='.$this->dbname.'; 
                                charset=utf8', 
                                $this->username, 
                                $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $exception){
            echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้: " . $exception->getMessage();
            exit();
        }
    }
    function __destruct(){}

    public $_dr_storage = "../../storages";
    public $_dr_assets = "../../assets";
    public $_project_name = "BOTOP";

    public function get_var_connect(){ // ดึงตัวแปร $conn
        return $this->conn;
    }

    public function get_session_start(){ // ประกาศ Session Start
        session_start();
    }

    public function qrySql($stmt){ // ฟังก์ชั่นดึงข้อมูลจากฐานข้อมูล
        $result = $stmt->execute();
        if($result){
            $array = [];
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $array[] = $row;
            }
            $return_data["data"] = $array;
            $stmt_count = $this->conn->query('SELECT FOUND_ROWS()');
            $count = $stmt_count->fetchColumn();
            $return_data["count_all"] = $count;
        }else{
            $error_info = $this->conn->errorInfo();
            $return_data['error'] = $error_info[2];
        }
        return $return_data;
    }

    public function check_file_image($file){ // ฟังก์ชั่นตรวจสอบไฟล์ก่อนอัพโหลด ส่งพารามีเตอร์มาแบบนี้ check_file($_FILES["(ชื่ออินพุตไฟล์)"]);
        /*  ถ้า $path = "/home/user/public_html/index.php";
            basename($path) จะรีเทิร์นค่าเป็น index.php  */
        $imageFileType = strtolower(pathinfo(basename($file["name"]), PATHINFO_EXTENSION));
        
        $check = getimagesize($file["tmp_name"]);
        if($check === false) {
            // ตรวจสอบว่าไฟล์เป็นภาพจริงหรือภาพปลอม (ไฟล์รูปภาพหรือไม่ใช่ไฟล์รูปภาพ)
            $return_data["status"] = 0;
            $return_data["error"] = "ไฟล์ที่อัพโหลดไม่ใช่ไฟล์รูปภาพ";
        }else if($file["size"] > 5000000) {
            // ตรวจสอบขนาดไฟล์ไฟล์ (ไม่เกิน 5MB)
            $return_data["status"] = 0;
            $return_data["error"] = "ขนาดของไฟล์สูงเกินไป (ไฟล์ไม่ควรเกิน 5 MB)";
        }else if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" || $imageFileType == "jfif") {
            // อนุญาตไฟล์บางประเภท
            $return_data["status"] = 1;
            $target_file = time().".png";
            $return_data["file_name"] = $target_file;
        }else{
            $return_data["status"] = 0;
            $return_data["error"] = "ประเภทของไฟล์ไม่สามารถใช้ได้ ควรจะใช้ไฟล์ประเภท jpg, png, jpeg, gif และ jfif เท่านั้น";
        }
        return $return_data;
    }

    public function get_table_id($TABLE_NAME){ // ดึง ID Auto Increment ของตาราง
        $stmt = $this->conn->prepare("SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = :dbname AND TABLE_NAME = :table_name");
        $stmt->bindParam(':dbname', $this->dbname);
        $stmt->bindParam(':table_name', $TABLE_NAME);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['AUTO_INCREMENT'];
    }

    public function line_notify($Token, $message, $imageFile = null){ // แจ้งเตือนไลน์
        $lineapi = $Token; // ใส่ token key ที่ได้มา
        $mms =  trim($message); // ข้อความที่ต้องการส่ง
    
        $data_post = "message=".$mms;
        if($imageFile != null){
            $data_post .= "&imageFullsize=".$imageFile;
            $data_post .= "&imageThumbnail=".$imageFile;
        }
    
        date_default_timezone_set("Asia/Bangkok");
        $chOne = curl_init();
        curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
        // SSL USE
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
        //POST
        curl_setopt( $chOne, CURLOPT_POST, 1);
        curl_setopt( $chOne, CURLOPT_POSTFIELDS, $data_post);
        curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1);
        $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'', );
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
        curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec( $chOne );
        //Check error
        if(curl_error($chOne))
        {
            //echo 'error:' . curl_error($chOne);
            $echo["status"] = 0;
            $echo["eror"] = curl_error($chOne);
        } else {
            $result_ = json_decode($result, true);
            $echo["status"] = 1;
            $echo["result_status"] = $result_['status'];
            $echo["result_message"] = $result_['message'];
        }
        curl_close( $chOne );
        return $echo;
    }

    public function create_alert_notication($header, $content_html, $to_user){ // สร้างข้อมูลข้อความแจ้งเตือน
        $echo["status"] = 1;
        
        $path = $this->_dr_storage."/alert_notication_content";

        // สร้างไฟล์ลงในโฟลเดอร์
        $message_id = $this->get_table_id("alert_notication");
        $file_content = $message_id.time().".txt";
        $fp = fopen($path."/".$file_content, 'w');
        fwrite($fp, trim($content_html));
        fclose($fp);

        // เพิ่มข้อมูลข้อความแจ้งเตือนลงฐานข้อมูล
        $stmt = $this->conn->prepare("INSERT INTO `alert_notication`(`alnt_header`, `alnt_content_file`, `to_user`) VALUES (:header, :file_content, :to_user)");
        $stmt->bindValue(":header", $header, PDO::PARAM_STR);
        $stmt->bindValue(":file_content", $file_content, PDO::PARAM_STR);
        $stmt->bindValue(":to_user", $to_user, PDO::PARAM_INT);
        $result = $stmt->execute();
        if(!$result){
            $echo["status"] = 0;
            $echo["error"] = "ไม่สามารถบันทึกได้";
        }
        return $echo;
    }

    // public function check_promotion_conditions($order_id){ // ตรวจสอบเงื่อนไขโปรโมชั่น
    //     // ดึงข้อมูลการสั่งซื้อ
    //     $stmt = $this->conn->prepare("SELECT *, DATE(od_date) AS od_for_date FROM orders WHERE od_id = :od_id LIMIT 1 ");
    //     $stmt->bindValue(':od_id', $order_id, PDO::PARAM_INT);
    //     $get = $this->qrySql($stmt);
    //     if($get["count_all"] <= 0){
    //         $return["get_promotion_rights"] = 0;
    //         $return["text"] = "ไม่มีข้อมูลการสั่งซื้อ";
    //         return $return;     
    //         exit;
    //     }else{
    //         $order_data = $get["data"][0];
    //     }
        

    //     // ดึงรายการสั่งซื้อ
    //     // $stmt = $this->conn->prepare("SELECT * FROM order_lists WHERE od_id = :od_id ");
    //     $stmt = $this->conn->prepare("SELECT order_lists.*, products.pd_freight, products.pd_price, products.pd_stock FROM order_lists INNER JOIN products ON products.pd_id = order_lists.pd_id WHERE order_lists.od_id = :od_id");
    //     $stmt->bindValue(':od_id', $order_id, PDO::PARAM_INT);
    //     $get = $this->qrySql($stmt);
    //     $total_price = 0;
    //     $freight = 0;
    //     foreach($get["data"] AS $odl){
    //         // คำนวณราคารวม
    //         $price = (is_null($odl["odl_price"])) ? $odl["pd_price"] : $odl["odl_price"]; // ถ้า $odl["odl_price"] เป็น null ก็จะนำค่า $odl["pd_price"] ไปใส่ในตัวแปรแทน
    //         $total_price += ($price * $odl["odl_quantity"]);

    //         // คำนวณหาค่าขนส่ง โดยจะอิงจากสินค้าที่ค่าขนส่งสูงสุด
    //         if(is_null($odl["odl_price"])){ // ถ้าเข้าเงื่อนไขนี้ แปลว่ากำลังคำนวณรายการสินค้าในตะกร้า
    //             if($odl["pd_stock"] > 0){
    //                 if($odl["pd_freight"] > $freight){
    //                     $freight = $odl["pd_freight"];
    //                 }
    //             }
    //         }else{
    //             if($odl["pd_freight"] > $freight){
    //                 $freight = $odl["pd_freight"];
    //             }
    //         }
    //     }
        
    //     // ตรวจสอบวันที่เริ่มและสิ้นสุดของโปรโมชั่น
    //     $check_date = (is_null($order_data["od_for_date"]) || $order_data["od_for_date"] == "") ? date("Y-m-d") : $order_data["od_for_date"];
    //     $stmt = $this->conn->prepare("SELECT * FROM promotions WHERE pmt_start_date <= '".$check_date."' AND pmt_timeout >= '".$check_date."' ");
    //     $get_promotions = $this->qrySql($stmt);
    //     if($get_promotions["count_all"] <= 0){
    //         $return["get_promotion_rights"] = 0;
    //         $return["text"] = "ไม่เข้าเงื่อนไขโปรโมชั่น";
    //         $return["freight"] = $freight;
    //         $return["freight_old"] = $freight;
    //         $return["discount"] = 0;
    //         return $return;
    //         exit;
    //     }else{
    //         $promotions = null;
    //         foreach($get_promotions["data"] AS $pmt){
    //             if($total_price >= $pmt["pmt_amount"]){
    //                 $promotions = $pmt;
    //             }
    //         }
    //         if(is_null($promotions)){
    //             $return["get_promotion_rights"] = 0;
    //             $return["text"] = "ยอดการสั่งซื้อไม่ถึงพอที่จะรับสิทธิ์โปรโมชั่นได้";
    //             $return["freight"] = $freight;
    //             $return["freight_old"] = $freight;
    //             $return["discount"] = 0;
    //             return $return;
    //             exit;
    //         }
    //     }

    //     // คำนวณส่วนลด
    //     if($promotions["pmt_type"] == 1){ // ส่วนลดแบบหักลบ
    //         $discount = $promotions["pmt_discount"];
    //     }else if($promotions["pmt_type"] == 2){ // ส่วนลดแบบเปอร์เซนต์
    //         $discount = $total_price * ($promotions["pmt_percent_discount"] / 100);
    //     }else{
    //         $discount = 0;
    //     }

    //     // ดูว่าโปรโมชั่นนี้ ส่งฟรีหรือไม่
    //     $freight_old = $freight;
    //     if($promotions["pmt_free_shipping"] == 1){
    //         $freight = 0;
    //     }

    //     // ส่งค่ากลับ
    //     $return["get_promotion_rights"] = 1; // ตัวแปรที่กำหนดว่าได้สิทธิ์โปรโมชั่นหรือไม่ ถ้าได้จะ = 1, ถ้าไม่ได้จะเท่ากับ 0
    //     $return["text"] = "ได้สิทธิโปรโมชั่น";
    //     // $return["promotions_data"] = $promotions;
    //     $return["order_data"] = $order_data;
    //     $return["freight"] = $freight;
    //     $return["freight_old"] = $freight_old;
    //     $return["discount"] = $discount;
    //     return $return;
    // }

    public function check_promotion_conditions($order_id){ // ตรวจสอบเงื่อนไขโปรโมชั่น
        // ดึงข้อมูลการสั่งซื้อ
        $stmt = $this->conn->prepare("SELECT *, DATE(od_date) AS od_for_date FROM orders WHERE od_id = :od_id LIMIT 1 ");
        $stmt->bindValue(':od_id', $order_id, PDO::PARAM_INT);
        $get = $this->qrySql($stmt);
        if($get["count_all"] <= 0){
            $return["get_promotion_rights"] = 0;
            $return["text"] = "ไม่มีข้อมูลการสั่งซื้อ";
            return $return;     
            exit;
        }else{
            $order_data = $get["data"][0];
        }

        // ดึงรายการสั่งซื้อ
        $stmt = $this->conn->prepare("SELECT order_lists.*, products.pd_freight, products.pd_price, products.pd_stock 
                                        FROM order_lists 
                                        INNER JOIN products ON products.pd_id = order_lists.pd_id 
                                        WHERE order_lists.od_id = :od_id");
        $stmt->bindValue(':od_id', $order_id, PDO::PARAM_INT);
        $get_order_detail = $this->qrySql($stmt);
        $total_price = 0; // ราคาสินค้ารวม
        $freight_old = 0; // ค่าขนส่งเดิมก่อนหักส่วนลบ
        $freight = 0; // ค่าขนส่ง
        $discount = 0; // ส่วนลด
        $have_paromotion_free_shipping = 0; // สถานะว่าได้สิทธิส่งฟรีหรือไม่

        // ถ้าไม่มีรายการสินค้า
        if($get_order_detail["count_all"] <= 0){
            $return["get_promotion_rights"] = 0;
            $return["text"] = "ไม่มีรายการสั่งซื้อ";
            return $return;     
            exit;
        }

        foreach($get_order_detail["data"] AS $odl){
            // คำนวณราคารวม
            $price = (is_null($odl["odl_price"])) ? $odl["pd_price"] : $odl["odl_price"]; // ถ้า $odl["odl_price"] เป็น null ก็จะนำค่า $odl["pd_price"] ไปใส่ในตัวแปรแทน
            $total_price += ($price * $odl["odl_quantity"]);

            // คำนวณหาค่าขนส่ง โดยจะอิงจากสินค้าที่ค่าขนส่งสูงสุด
            if(is_null($odl["odl_price"])){ // ถ้าเข้าเงื่อนไขนี้ แปลว่ากำลังคำนวณรายการสินค้าในตะกร้า
                if($odl["pd_stock"] > 0){
                    if($odl["pd_freight"] > $freight){
                        if($have_paromotion_free_shipping == 1){
                            $freight = 0;
                        }else{
                            $freight = $odl["pd_freight"];
                        }
                        $freight_old = $odl["pd_freight"];
                    }
                }
            }else{
                if($odl["pd_freight"] > $freight){
                    if($have_paromotion_free_shipping == 1){
                        $freight = 0;
                    }else{
                        $freight = $odl["pd_freight"];
                    }
                    $freight_old = $odl["pd_freight"];
                }
            }

            // ตรวจสอบว่าสินค้าเชื่อมกับโปรโมชั่นหรือไม่ และโปรโมชั่นอยู่ในขอบเขตของวันที่หรือไม่
            $check_date = /*(is_null($order_data["od_for_date"]) || $order_data["od_for_date"] == "") ?*/ date("Y-m-d") /*: $order_data["od_for_date"]*/;
            $stmt = $this->conn->prepare("SELECT * FROM `product_connect_promotion` 
                                            INNER JOIN `promotions` ON product_connect_promotion.pmt_id = promotions.pmt_id 
                                            WHERE product_connect_promotion.pd_id = :pd_id
                                            AND promotions.pmt_start_date <= '".$check_date."' AND promotions.pmt_timeout >= '".$check_date."' ");
            $stmt->bindValue(":pd_id", $odl["pd_id"], PDO::PARAM_INT);
            $get_promotions = $this->qrySql($stmt);
            foreach($get_promotions["data"] AS $pmt){
                $promotions = null;
                // ตรวจสอบเงื่อนไขการรับสิทธิ์โปรโมชั่น
                if($pmt["pmt_condition_type"] == 1){ // เงื่อนไขตามจำนวนเงิน
                    if($total_price >= $pmt["pmt_condition_amount"]){
                        $promotions = $pmt;
                    }
                }else if($pmt["pmt_condition_type"] == 2){ // เงื่อนไขตามจำนวนสินค้าของสินค้าที่เชื่อมดปรโมชั่น
                    if($odl["odl_quantity"] >= $pmt["pmt_condition_quantity"]){
                        $promotions = $pmt;
                    }
                }
                if(!is_null($promotions)){
                    // คำนวณส่วนลด
                    if($promotions["pmt_discount_type"] == 1){ // ส่วนลดแบบหักลบ
                        $discount += $promotions["pmt_discount"];
                    }else if($promotions["pmt_discount_type"] == 2){ // ส่วนลดแบบเปอร์เซนต์
                        $discount += $total_price * ($promotions["pmt_percent_discount"] / 100);
                    }

                    // ดูว่าโปรโมชั่นนี้ ส่งฟรีหรือไม่
                    if($promotions["pmt_free_shipping"] == 1){
                        $have_paromotion_free_shipping = 1;
                        $freight = 0;
                    }
                }
            }
        }

        // ส่งค่ากลับ
        $return["get_promotion_rights"] = 1; // ตัวแปรที่กำหนดว่าได้สิทธิ์โปรโมชั่นหรือไม่ ถ้าได้จะ = 1, ถ้าไม่ได้จะเท่ากับ 0
        $return["text"] = "ได้สิทธิโปรโมชั่น";
        $return["order_data"] = $order_data;
        $return["freight"] = $freight;
        $return["freight_old"] = $freight_old;
        $return["discount"] = $discount;

        return $return;
    }

    public function check_order_deadline($order_id){ // ตรวจสอบออเดอร์ที่ยังไม่ชำระเงินดูว่า เหลือกี่วันหรือยกเลิกการสั่งซื้อหรือไม่
        // ดึงข้อมูลการสั่งซื้อ
        $stmt = $this->conn->prepare("SELECT * FROM orders WHERE od_id = :od_id LIMIT 1 ");
        $stmt->bindValue(':od_id', $order_id, PDO::PARAM_INT);
        $get = $this->qrySql($stmt);
        
        if($get["count_all"] <= 0){
            $return["text"] = "ไม่มีข้อมูลการสั่งซื้อ";
            return $return;     
            exit;
        }else{
            $order_data = $get["data"][0];
      
            $timestamp = strtotime($order_data["od_renewal_date"]); // แปลงวันที่ในรูปแบบข้อความเป็น timestamp
            $timestamp_new = $timestamp + ($order_data["od_payment_period"] * 24 * 60 * 60); // เพิ่มจำนวนวันที่ต้องการ (มี 24 ชั่วโมง * 60 นาที * 60 วินาที ในหนึ่งวัน)
            $date_out = date("Y-m-d", $timestamp_new); // แปลง timestamp ใหม่กลับเป็นรูปแบบวันที่
            
            $date_now = date("Y-m-d");
            // แปลงวันที่ในรูปแบบข้อความเป็น timestamp
            $timestamp_new = strtotime($date_out);
            $timestamp_now = strtotime($date_now);     
            // คำนวณความแตกต่างระหว่าง timestamp ของวันที่ใหม่และวันที่ปัจจุบัน
            $days_difference = ($timestamp_new - $timestamp_now) / (24 * 60 * 60); // มี 24 ชั่วโมง * 60 นาที * 60 วินาที ในหนึ่งวัน

            $return["text"] = "แสดงสำเร็จ";
            $return["days_difference"] = $days_difference;
            return $return;
        }
    }

    public function user_type_int_to_text($num){
        switch($num){
            case 1 : $text["thai"] = "ผู้ดูแลระบบ";    $text["eng"] = "Admin";     $text["bg_color"] = "#AE00FF"; break;
            case 2 : $text["thai"] = "สมาชิก";       $text["eng"] = "Customer";  $text["bg_color"] = "#FF8700"; break;
        }
        return $text;
    }
    public function user_gender_int_to_text($num){
        switch($num){
            case 1 : $text["thai"] = "ชาย";    $text["eng"] = "Male";     $text["color"] = "#0032FF"; break;
            case 2 : $text["thai"] = "หญิง";       $text["eng"] = "Female";  $text["color"] = "#F700FF"; break;
            case 2 : $text["thai"] = "เพศอื่นๆ";       $text["eng"] = "Other";  $text["color"] = "#8700FF"; break;
        }
        return $text;
    }
    public function order_status_int_to_text($num){ // สถานะการชำระเงิน
        $stmt = $this->conn->prepare("SELECT * FROM order_status WHERE odstt_id = :odstt_id LIMIT 1");
        $stmt->bindParam(':odstt_id', $num);
        $stmt->execute();
        $text = null;
        while($rs = $stmt->fetch(PDO::FETCH_ASSOC)){
            $text["thai"] = $rs["odstt_name_th"];
            $text["en"] = $rs["odstt_name_en"];
            $text["bg_color"] = $rs["odstt_color_code"];
        }
        return $text;
    }
    public function order_option_payment_int_to_text($num){ // ช่องทางการชำระเงิน
        switch($num){
            case 1 : $text["thai"] = "เก็บเงินปลายทาง";          $text["eng"] = "Cash on delivery";              $text["bg_color"] = "#FF7800"; break;
            case 2 : $text["thai"] = "โอนผ่านบัญชีธนาคาร";       $text["eng"] = "Bank transfer";                 $text["bg_color"] = "#8C00B8"; break;
            case 3 : $text["thai"] = "ชำระเงินผ่านระบบ Paypal";  $text["eng"] = "Payment via Paypal";             $text["bg_color"] = "#0070ba"; break;
        }
        return $text;
    }

    public function ThaiBahtConversion($amount_number){
        $amount_number = number_format($amount_number, 2, ".","");
        //echo "<br/>amount = " . $amount_number . "<br/>";
        $pt = strpos($amount_number , ".");
        $number = $fraction = "";
        if ($pt === false)
            $number = $amount_number;
        else
        {
            $number = substr($amount_number, 0, $pt);
            $fraction = substr($amount_number, $pt + 1);
        }
    
        //list($number, $fraction) = explode(".", $number);
        $ret = "";
        $baht = $this->ReadNumber($number);
        if ($baht != "")
            $ret .= $baht . "บาท";
    
        $satang = $this->ReadNumber($fraction);
        if ($satang != "")
            $ret .=  $satang . "สตางค์";
        else
            $ret .= "ถ้วน";
        //return iconv("UTF-8", "TIS-620", $ret);
        return $ret;
    }
    private function ReadNumber($number){
        $position_call = array("แสน", "หมื่น", "พัน", "ร้อย", "สิบ", "");
        $number_call = array("", "หนึ่ง", "สอง", "สาม", "สี่", "ห้า", "หก", "เจ็ด", "แปด", "เก้า");
        $number = $number + 0;
        $ret = "";
        if ($number == 0) return $ret;
        if ($number > 1000000)
        {
            $ret .= $this->ReadNumber(intval($number / 1000000)) . "ล้าน";
            $number = intval(fmod($number, 1000000));
        }
    
        $divider = 100000;
        $pos = 0;
        while($number > 0)
        {
            $d = intval($number / $divider);
            $ret .= (($divider == 10) && ($d == 2)) ? "ยี่" :
                ((($divider == 10) && ($d == 1)) ? "" :
                ((($divider == 1) && ($d == 1) && ($ret != "")) ? "เอ็ด" : $number_call[$d]));
            $ret .= ($d ? $position_call[$pos] : "");
            $number = $number % $divider;
            $divider = $divider / 10;
            $pos++;
        }
        return $ret;
    }

    public function send_email($send_email_to, $header, $content){
        // $message_html = "Your password reset link <br> http://localhost:8081/php/form/password-reset.php?token=อิหยัง <br> Reset your password with this link .Click or open in new tab<br><br> <br> <br> <center>จุ๊กกรู้ว</center>";

        $mail = new PHPMailer(true);
        $mail->CharSet = "utf-8";
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        // $mail->Host       = 'smtp.gmail.com';
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'clinic59@thaitraditionalmedicineclinic.online';
        $mail->Password   = 'Clinicudru105109_';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;
        $mail->setFrom('clinic59@thaitraditionalmedicineclinic.online', $this->_project_name);
        // $mail->addAddress("63040233105@udru.ac.th", "Farng");
        $mail->addAddress($send_email_to, "To Name");
        $mail->isHTML(true);
        $mail->Subject = $header;
        $mail->Body    = $content;
        if($mail->send()){
            $return["status"] = true;
        }else{
            $return["status"] = false;
        }
        return $return;
    }

    public function get_client_ip(){
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    public function restore_product_stock($order_id){
        // $return["status"] = 1;
        // $stmt = $this->conn->prepare("SELECT * FROM orders WHERE od_id = :od_id LIMIT 1");
        // $stmt->bindValue(':od_id', $order_id, PDO::PARAM_INT);
        // $get = qrySql($stmt);
        // if($get["count_all"] > 0){
        //     $stmt = $this->conn->prepare("SELECT * FROM order_lists WHERE od_id = :od_id");
        //     $stmt->bindValue(':od_id', $order_id, PDO::PARAM_INT);
        //     $get = qrySql("SELECT * FROM order_lists WHERE od_id = :od_id");
        //     foreach($get["data"] AS $rs){
        //         $stmt = $this->conn->prepare("SELECT * FROM order_lists WHERE od_id = :pd_id");
        //         $stmt->bindValue(':od_id', $order_id, PDO::PARAM_INT);
        //         $get_pd = qrySql("SELECT * FROM order_lists WHERE od_id = :od_id");
        //     }
        // }else{
        //     $return["status"] = 0;
        //     // $return["error"] = "";
        // }
        // return $return;
    }

    public function closs_sql(){ // หยุดการทำงานเพื่อคืนพื้นที่
        $this->conn = null;
    }
}

error_reporting(E_ALL); // ให้แสดง Error หากมี Error ถ้าไม่ต้องการแสดงให้ Error ใส่พารามิเตอร์เป็น 0
date_default_timezone_set('Asia/Bangkok'); // ตั้งวันที่และเวลาตามโซนที่อยู่ของตัวเอง
    
?>