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

    if($action == "query_for_chart_area_order"){
        $echo["status"] = 1;
        $month_arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]; // เก็บหมายเลขของเดือน มค. ถึง ธค.
        $echo["data_count_order"] = array();
        $echo["data_total_order"] = array();

        foreach($month_arr AS $month){
            $hold_sum = 0;
            $stmt = $pdo->prepare("SELECT orders.od_id FROM orders WHERE MONTH(`od_date`) = :_month");
            $stmt->bindParam(":_month", $month, PDO::PARAM_STR);
            $get_order = $database_obj->qrySql($stmt);

            foreach($get_order["data"] AS $od){
                $stmt = $pdo->prepare("SELECT SUM(odl_price * odl_quantity) AS sum FROM `order_lists` WHERE od_id = :od_id LIMIT 1");
                $stmt->bindParam(":od_id", $od["od_id"], PDO::PARAM_STR);
                $get_sum = $database_obj->qrySql($stmt);
                $hold_sum += $get_sum["data"][0]["sum"];
            }
            $echo["data_total_order"][] = $get_order["count_all"];
            $echo["data_total_sale"][] = $hold_sum;
        }
        echo json_encode($echo);
    }

    $database_obj->closs_sql();
?>