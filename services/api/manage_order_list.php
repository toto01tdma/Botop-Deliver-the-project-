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

if ($action == "read_order_lists_for_cart") {
    $echo["status"] = 1;
    $stmt = $pdo->prepare("SELECT order_lists.*, products.pd_name, products.pd_price, products.pd_stock, products.pd_freight FROM order_lists
                                INNER JOIN orders ON orders.od_id = order_lists.od_id
                                INNER JOIN products ON products.pd_id = order_lists.pd_id 
                                WHERE orders.user_id = :user_id AND orders.od_status = 1");
    $stmt->bindValue(':user_id', $_SESSION["user"]["user_id"], PDO::PARAM_STR);
    $get_order_lists = $database_obj->qrySql($stmt);
    $echo["freight"] = 0;
    foreach ($get_order_lists["data"] as $rs) {
        $stmt = $pdo->prepare("SELECT pd_img_name FROM product_images WHERE pd_id = :pd_id AND pd_img_status_cover = 1 LIMIT 1");
        $stmt->bindValue(':pd_id', $rs["pd_id"], PDO::PARAM_STR);
        $pd_image = $database_obj->qrySql($stmt);
        $rs["pd_image"] = $pd_image["data"][0]["pd_img_name"];
        $echo["data"][] = $rs;
    }
    $promotion_result = $database_obj->check_promotion_conditions($get_order_lists["data"][0]["od_id"]);
    $echo["freight"] = $promotion_result["freight"];
    $echo["freight_old"] = $promotion_result["freight_old"];
    $echo["discount"] = $promotion_result["discount"];
    $echo["promotions_text"] = $promotion_result["text"];
    echo json_encode($echo);
} else if ($action == "read_order_lists") {
    $echo["status"] = 1;
    $stmt = $pdo->prepare("SELECT order_lists.*, order_lists.odl_pd_name AS pd_name FROM order_lists WHERE order_lists.od_id = :od_id");
    $stmt->bindValue(':od_id', $_POST["order_id"], PDO::PARAM_INT);
    $get_order_lists = $database_obj->qrySql($stmt);
    foreach ($get_order_lists["data"] as $rs) {
        // ถ้าสินค้าถูกลบแล้วจะดึงรูปเริ่มต้น หรือ Default ถ้าสินค้ายังไม่ถูกลบ จะดึงรูปจากฐานข้อมูลมา
        if(is_null($rs["pd_id"])){
            $rs["pd_image"] = "../../../../assets/img/pd_img_default.png";
        }else{
            $stmt = $pdo->prepare("SELECT pd_img_name FROM product_images WHERE pd_id = :pd_id AND pd_img_status_cover = 1 LIMIT 1");
            $stmt->bindValue(':pd_id', $rs["pd_id"], PDO::PARAM_INT);
            $pd_image = $database_obj->qrySql($stmt);
            $rs["pd_image"] = $pd_image["data"][0]["pd_img_name"];
        }
        $echo["data"][] = $rs;
    }
    echo json_encode($echo);
} else if ($action == "save_order_list") {
    $echo["status"] = 1;

    $stmt = $pdo->prepare("SELECT * FROM `orders` WHERE od_status = 1 AND user_id = :user_id LIMIT 1");
    $stmt->bindValue(':user_id', $_SESSION["user"]["user_id"], PDO::PARAM_STR);
    $get_orders = $database_obj->qrySql($stmt);
    if ($get_orders["count_all"] == 0) {
        $order_id = $database_obj->get_table_id("orders");
        $stmt = $pdo->prepare("INSERT INTO `orders`(`od_id`, `od_status`, `user_id`) VALUES (:od_id, 1, :user_id)");
        $stmt->bindParam(':od_id', $order_id);
        $stmt->bindParam(':user_id', $_SESSION["user"]["user_id"]);
        $result = $stmt->execute();
        if (!$result) {
            $echo["status"] = 0;
            $echo["error"] = "สร้างข้อมูลการสั่งซื้อไม่สำเร็จ";
        }
    } else {
        $order_id = $get_orders["data"][0]["od_id"];
    }
    $stmt = $pdo->prepare("SELECT * FROM `order_lists` WHERE order_lists.pd_id = :pd_id AND order_lists.od_id = :od_id LIMIT 1");
    $stmt->bindValue(':pd_id', $_POST["pd_id"], PDO::PARAM_INT);
    $stmt->bindValue(':od_id', $order_id, PDO::PARAM_INT);
    $get_order_lists = $database_obj->qrySql($stmt);
    if ($get_order_lists["count_all"] > 0) {
        if (isset($_POST["reduce"])) {
            if ($get_order_lists["data"][0]["odl_quantity"] > 1) {
                $new_qty = ($get_order_lists["data"][0]["odl_quantity"] - 1);
            } else {
                $new_qty = $get_order_lists["data"][0]["odl_quantity"];
            }
        } else {
            // ตรวจสอบสต็อกสินค้าสินค้า
            $stmt = $pdo->prepare("SELECT pd_stock FROM `products` WHERE pd_id = :pd_id LIMIT 1");
            $stmt->bindValue(':pd_id', $_POST["pd_id"], PDO::PARAM_INT);
            $get_stock = $database_obj->qrySql($stmt);
            if ($get_order_lists["data"][0]["odl_quantity"] >= $get_stock["data"][0]["pd_stock"]) {
                $echo["status"] = 0;
                $echo["error"] = "จำนวนสินค้าไม่เพียงพอ";
                $new_qty = $get_order_lists["data"][0]["odl_quantity"];
            } else {
                $new_qty = ($get_order_lists["data"][0]["odl_quantity"] + 1);
            }
        }
        $stmt = $pdo->prepare("UPDATE `order_lists` SET `odl_quantity` = :qty WHERE `odl_id` = :odl_id");
        $stmt->bindParam(':qty', $new_qty);
        $stmt->bindParam(':odl_id', $get_order_lists["data"][0]["odl_id"]);
        $result = $stmt->execute();
    } else {
        // ตรวจสอบสต็อกสินค้าสินค้า
        $stmt = $pdo->prepare("SELECT pd_stock FROM `products` WHERE pd_id = :pd_id LIMIT 1");
        $stmt->bindValue(':pd_id', $_POST["pd_id"], PDO::PARAM_INT);
        $get_stock = $database_obj->qrySql($stmt);
        if ($get_stock["data"][0]["pd_stock"] == 0) {
            $echo["status"] = 0;
            $echo["error"] = "จำนวนสินค้าไม่เพียงพอ";
        } else {
            $stmt = $pdo->prepare("INSERT INTO `order_lists`(`pd_id`, `odl_quantity`, `od_id`) VALUES (:pd_id, 1, :od_id)");
            $stmt->bindValue(':pd_id', $_POST["pd_id"], PDO::PARAM_STR);
            $stmt->bindValue(':od_id', $order_id, PDO::PARAM_STR);
            $result = $stmt->execute();
            if (!$result) {
                $echo["status"] = 0;
                $echo["error"] = "ไม่สำเร็จ";
            }
        }
    }
    echo json_encode($echo);
} else if ($action == "delete_order_list") {
    $echo["status"] = 1;
    $stmt = $pdo->prepare("DELETE FROM `order_lists` WHERE odl_id = :odl_id");
    $stmt->bindParam(':odl_id', $_POST["odl_id"]);
    $result = $stmt->execute();
    if (!$result) {
        $echo["status"] = 0;
        $echo["error"] = "ไม่สำเร็จ";
    }
    echo json_encode($echo);
}

$database_obj->closs_sql();
?>