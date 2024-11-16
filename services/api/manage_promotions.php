<?php
    if(!($_SERVER['REQUEST_METHOD'] === "POST")){
        echo "Method Not Allowed!!!";
        exit;
    }
    require_once("../../includes/config.php");
    $database_obj = new Database();
    
    $database_obj->get_session_start();
    $pdo = $database_obj->get_var_connect();

    $action = $_POST["action"];

    if($action == "read_promotions"){
        $echo["status"] = 1;

        $keyword = (isset($_POST["keyword"])) ? $_POST["keyword"] : "";
        $condition_pmt_id = (isset($_POST["pmt_id"])) ? " AND pmt_id = :pmt_id " : "";
        $condition_limit = (isset($_POST["page"])) ? " LIMIT ".($_POST["page"]*50).",50 " : "";

        $stmt = $pdo->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM promotions WHERE pmt_name LIKE :keyword ".$condition_pmt_id.$condition_limit); // ใส่โค้ด Sql ลงไป
        $stmt->bindValue(':keyword', '%'.$keyword.'%', PDO::PARAM_STR);
        if(isset($_POST["pmt_id"])){
            $stmt->bindValue(':pmt_id', $_POST["pmt_id"], PDO::PARAM_INT);
        }
        $get = $database_obj->qrySql($stmt);
        $echo["count_all"] = $get["count_all"];
        $echo["data"] = array();
        foreach($get["data"] AS $rs){
            $echo["data"][] = $rs;
        }
        echo json_encode($echo);
    }else if($action == "save_promotions"){
        $echo["status"] = 1;

        if($_POST["pmt_id"] == ""){
            $pmt_id = $database_obj->get_table_id("promotions");

            $sql = "INSERT INTO `promotions`(`pmt_name`, `pmt_start_date`, `pmt_timeout`, `pmt_condition_type`, `pmt_condition_amount`, `pmt_condition_quantity`, `pmt_discount_type`, `pmt_percent_discount`, `pmt_discount`, `pmt_free_shipping`, `pmt_detail`) VALUES (:pmt_name, :pmt_start_date, :pmt_timeout, :pmt_condition_type, :pmt_condition_amount, :pmt_condition_quantity, :pmt_discount_type, :pmt_percent_discount, :pmt_discount, :pmt_free_shipping, :pmt_detail)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':pmt_name', $_POST["pmt_name"], PDO::PARAM_STR);
            $stmt->bindValue(':pmt_start_date', $_POST["pmt_start_date"], PDO::PARAM_STR);
            $stmt->bindValue(':pmt_timeout', $_POST["pmt_timeout"], PDO::PARAM_STR);

            $stmt->bindValue(':pmt_condition_type', $_POST["pmt_condition_type"], PDO::PARAM_STR);
            if(isset($_POST["pmt_condition_amount"])){
                $stmt->bindValue(':pmt_condition_amount', $_POST["pmt_condition_amount"], PDO::PARAM_STR);
            }else{
                $stmt->bindValue(':pmt_condition_amount', NULL, PDO::PARAM_NULL);
            }
            if(isset($_POST["pmt_condition_quantity"])){
                $stmt->bindValue(':pmt_condition_quantity', $_POST["pmt_condition_quantity"], PDO::PARAM_STR);
            }else{
                $stmt->bindValue(':pmt_condition_quantity', NULL, PDO::PARAM_NULL);
            }

            $stmt->bindValue(':pmt_discount_type', $_POST["pmt_discount_type"], PDO::PARAM_STR);
            if(isset($_POST["pmt_percent_discount"])){
                $stmt->bindValue(':pmt_percent_discount', $_POST["pmt_percent_discount"], PDO::PARAM_STR);
            }else{
                $stmt->bindValue(':pmt_percent_discount', NULL, PDO::PARAM_NULL);
            }
            if(isset($_POST["pmt_discount"])){
                $stmt->bindValue(':pmt_discount', $_POST["pmt_discount"], PDO::PARAM_STR);
            }else{
                $stmt->bindValue(':pmt_discount', NULL, PDO::PARAM_NULL);
            }

            $stmt->bindValue(':pmt_free_shipping', $_POST["pmt_free_shipping"], PDO::PARAM_STR);
            $stmt->bindValue(':pmt_detail', $_POST["pmt_detail"], PDO::PARAM_STR);
            $result = $stmt->execute();
        }else{
            $pmt_id = $_POST["pmt_id"]; // Assuming you have the pmt_id from the form

            $sql = "UPDATE `promotions` SET 
                        `pmt_name` = :pmt_name,
                        `pmt_start_date` = :pmt_start_date,
                        `pmt_timeout` = :pmt_timeout,
                        `pmt_condition_type` = :pmt_condition_type,
                        `pmt_condition_amount` = :pmt_condition_amount,
                        `pmt_condition_quantity` = :pmt_condition_quantity,
                        `pmt_discount_type` = :pmt_discount_type,
                        `pmt_percent_discount` = :pmt_percent_discount,
                        `pmt_discount` = :pmt_discount,
                        `pmt_free_shipping` = :pmt_free_shipping,
                        `pmt_detail` = :pmt_detail
                    WHERE `pmt_id` = :pmt_id";

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':pmt_id', $pmt_id, PDO::PARAM_INT);
            $stmt->bindValue(':pmt_name', $_POST["pmt_name"], PDO::PARAM_STR);
            $stmt->bindValue(':pmt_start_date', $_POST["pmt_start_date"], PDO::PARAM_STR);
            $stmt->bindValue(':pmt_timeout', $_POST["pmt_timeout"], PDO::PARAM_STR);

            $stmt->bindValue(':pmt_condition_type', $_POST["pmt_condition_type"], PDO::PARAM_STR);
            if(isset($_POST["pmt_condition_amount"])){
                $stmt->bindValue(':pmt_condition_amount', $_POST["pmt_condition_amount"], PDO::PARAM_STR);
            }else{
                $stmt->bindValue(':pmt_condition_amount', NULL, PDO::PARAM_NULL);
            }
            if(isset($_POST["pmt_condition_quantity"])){
                $stmt->bindValue(':pmt_condition_quantity', $_POST["pmt_condition_quantity"], PDO::PARAM_STR);
            }else{
                $stmt->bindValue(':pmt_condition_quantity', NULL, PDO::PARAM_NULL);
            }

            $stmt->bindValue(':pmt_discount_type', $_POST["pmt_discount_type"], PDO::PARAM_STR);
            if (isset($_POST["pmt_percent_discount"])) {
                $stmt->bindValue(':pmt_percent_discount', $_POST["pmt_percent_discount"], PDO::PARAM_STR);
            } else {
                $stmt->bindValue(':pmt_percent_discount', NULL, PDO::PARAM_NULL);
            }
            if (isset($_POST["pmt_discount"])) {
                $stmt->bindValue(':pmt_discount', $_POST["pmt_discount"], PDO::PARAM_STR);
            } else {
                $stmt->bindValue(':pmt_discount', NULL, PDO::PARAM_NULL);
            }

            $stmt->bindValue(':pmt_free_shipping', $_POST["pmt_free_shipping"], PDO::PARAM_STR);
            $stmt->bindValue(':pmt_detail', $_POST["pmt_detail"], PDO::PARAM_STR);
            $result = $stmt->execute();
        }

        if(!$result){
            $echo["status"] = 0;
            $echo["error"] = "ไม่สามารถบันทึกข้อมูลได้";   
        }
        echo json_encode($echo);
    }else if($action == "delete_promotions"){
        $echo["status"] = 1;

        // ลบการเชื่อมโปรโมชั่นออกของสินค้านี้
        $stmt = $pdo->prepare("DELETE FROM `product_connect_promotion` WHERE `pmt_id` = :pmt_id ");
        $stmt->bindParam(':pmt_id', $_POST["pmt_id"]);
        $result = $stmt->execute();
        if(!$result){
            $echo["status"] = 0;
            $echo["error"] = "ไม่สามารถบันทึกข้อมูลได้";
            echo json_encode($echo);
            exit;
        }

        $stmt = $pdo->prepare("DELETE FROM `promotions` WHERE `pmt_id` = :pmt_id ");
        $stmt->bindParam(':pmt_id', $_POST["pmt_id"]);
        $result = $stmt->execute();
        if(!$result){
            $echo["status"] = 0;
            $echo["error"] = "ไม่สามารถบันทึกข้อมูลได้";
        }
        echo json_encode($echo);
    }else if($action == "read_promotion_of_product"){
        $echo["status"] = 1;

        $stmt = $pdo->prepare("SELECT * FROM product_connect_promotion INNER JOIN promotions ON product_connect_promotion.pmt_id = promotions.pmt_id WHERE product_connect_promotion.pd_id = :pd_id "); // ใส่โค้ด Sql ลงไป
        $stmt->bindValue(':pd_id', $_POST["pd_id"], PDO::PARAM_INT);
        $get = $database_obj->qrySql($stmt);
        $echo["count_all"] = $get["count_all"];
        $echo["data"] = array();
        foreach($get["data"] AS $rs){
            $echo["data"][] = $rs;
        }
        echo json_encode($echo);
    }else if($action == "add_product_connect_promotion"){
        $echo["status"] = 1;

        $stmt = $pdo->prepare("INSERT INTO `product_connect_promotion`(`pd_id`, `pmt_id`) VALUES (:pd_id, :pmt_id)"); // ใส่โค้ด Sql ลงไป
        $stmt->bindValue(':pd_id', $_POST["pd_id"], PDO::PARAM_INT);
        $stmt->bindValue(':pmt_id', $_POST["pmt_id"], PDO::PARAM_INT);
        $result = $stmt->execute();

        if(!$result){
            $echo["status"] = 0;
            $echo["error"] = "ไม่สามารถบันทึกข้อมูลได้";   
        }

        echo json_encode($echo);
    }else if($action == "remove_product_connect_promotion"){
        $echo["status"] = 1;

        $stmt = $pdo->prepare("DELETE FROM `product_connect_promotion` WHERE pdcnpmt_id = :pdcnpmt_id"); // ใส่โค้ด Sql ลงไป
        $stmt->bindValue(':pdcnpmt_id', $_POST["pdcnpmt_id"], PDO::PARAM_INT);
        $result = $stmt->execute();

        if(!$result){
            $echo["status"] = 0;
            $echo["error"] = "ไม่สามารถบันทึกข้อมูลได้";   
        }

        echo json_encode($echo);
    }

    $database_obj->closs_sql();
?>
