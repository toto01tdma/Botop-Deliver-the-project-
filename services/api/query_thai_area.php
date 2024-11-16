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

    if($action == "query_provinces"){
        $echo["status"] = 1;
        if($_POST["geo_id"] != ""){
            $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM `thai_area_provinces` WHERE `geography_id` = :geo_id ORDER BY `name_th` ASC ";
            $stmt = $pdo->prepare($sql); // ใส่โค้ด Sql ลงไป 
            $stmt->bindValue(':geo_id', $_POST["geo_id"], PDO::PARAM_INT);
        }else{
            $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM `thai_area_provinces` ORDER BY `name_th` ASC ";
            $stmt = $pdo->prepare($sql); // ใส่โค้ด Sql ลงไป 
        }
        
        $get = $database_obj->qrySql($stmt);
        foreach($get["data"] AS $row){
            $echo["data"][] = $row;
        }
        $echo["count_all"] = $get["count_all"];
        echo json_encode($echo);
    }else if($action == "query_amphures"){
        $echo["status"] = 1;
        $stmt = $pdo->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM `thai_area_amphures` WHERE `province_id` = :provin_id ORDER BY `name_th` ASC"); // ใส่โค้ด Sql ลงไป
        $stmt->bindValue(':provin_id', $_POST["provin_id"], PDO::PARAM_INT);
        $get = $database_obj->qrySql($stmt);
        foreach($get["data"] AS $row){
            $echo["data"][] = $row;
        }
        $echo["count_all"] = $get["count_all"];
        echo json_encode($echo);
    }else if($action == "query_tumbols"){
        $echo["status"] = 1;
        $stmt = $pdo->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM `thai_area_districts` WHERE `amphure_id` = :amphur_id ORDER BY `name_th` ASC"); // ใส่โค้ด Sql ลงไป
        $stmt->bindValue(':amphur_id', $_POST["amphur_id"], PDO::PARAM_INT);
        $get = $database_obj->qrySql($stmt);
        foreach($get["data"] AS $row){
            $echo["data"][] = $row;
        }
        $echo["count_all"] = $get["count_all"];
        echo json_encode($echo);
    }else if($action == "query_zipcode"){
        $echo["status"] = 1;
        $stmt = $pdo->prepare("SELECT SQL_CALC_FOUND_ROWS zip_code FROM `thai_area_districts` WHERE `id` = :tumbol_id LIMIT 1"); // ใส่โค้ด Sql ลงไป
        $stmt->bindValue(':tumbol_id', $_POST["tumbol_id"], PDO::PARAM_INT);
        $get = $database_obj->qrySql($stmt);
        foreach($get["data"] AS $row){
            $echo["data"][] = $row;
        }
        $echo["count_all"] = $get["count_all"];
        echo json_encode($echo);
    }

    $database_obj->closs_sql();
?>