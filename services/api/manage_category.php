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

    if($action == "read_categorys"){
        $keyword = (isset($_POST["keyword"])) ? $_POST["keyword"] : "";
        $echo["status"] = 1;
        $stmt = $pdo->prepare("SELECT * FROM categorys WHERE ctgr_name LIKE :keyword"); // ใส่โค้ด Sql ลงไป
        $stmt->bindValue(':keyword', '%'.$keyword.'%', PDO::PARAM_STR);
        $get = $database_obj->qrySql($stmt);
        foreach($get["data"] AS $rs){
            $echo["data"][] = $rs;
        }
        echo json_encode($echo);
    }else if($action == "create_category"){
        $echo["status"] = 1;
        $stmt = $pdo->prepare("INSERT INTO `categorys`(`ctgr_name`) VALUES (:cate_name)"); // ใส่โค้ด Sql ลงไป
        $stmt->bindParam(":cate_name", $_POST["cate_name"]);
        $result = $stmt->execute();
        if(!$result){
            $echo["status"] = 0;
            $echo["error"] = "ไม่สามารถบันทึกได้";
        }
        echo json_encode($echo);
    }else if($action == "update_category"){
        $echo["status"] = 1;
        if($_POST["cate_id"] != 0){
            $stmt = $pdo->prepare("UPDATE `categorys` SET `ctgr_name`= :cate_name WHERE `ctgr_id`= :cate_id"); // ใส่โค้ด Sql ลงไป
            $stmt->bindParam(":cate_id", $_POST["cate_id"]);
            $stmt->bindParam(":cate_name", $_POST["cate_name"]);
            $result = $stmt->execute();
            if(!$result){
                $echo["status"] = 0;
                $echo["error"] = "ไม่สามารถบันทึกได้";
            }
        }else{
            $echo["status"] = 0;
            $echo["error"] = "ข้อมูลนี้ไม่ควรแก้ไข";
        }
        echo json_encode($echo);
    }else if($action == "delete_category"){
        $echo["status"] = 1;
        if($_POST["cate_id"] != 0){
            $stmt = $pdo->prepare("UPDATE `products` SET `ctgr_id`= 0 WHERE `ctgr_id`= :cate_id"); // ใส่โค้ด Sql ลงไป
            $stmt->bindParam(":cate_id", $_POST["cate_id"]);
            $result = $stmt->execute();

            $stmt = $pdo->prepare("DELETE FROM `categorys` WHERE `ctgr_id`= :cate_id"); // ใส่โค้ด Sql ลงไป
            $stmt->bindParam(":cate_id", $_POST["cate_id"]);
            $result = $stmt->execute();
            if(!$result){
                $echo["status"] = 0;
                $echo["error"] = "ไม่สามารถลบได้";
            }
        }else{
            $echo["status"] = 0;
            $echo["error"] = "ข้อมูลนี้ไม่ควรลบ";
        }
        echo json_encode($echo);
    }

    $database_obj->closs_sql();
?>