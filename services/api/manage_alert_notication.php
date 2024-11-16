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

    if($action == "read_alert_notication"){
        $echo["status"] = 1;
        $condition = "";
        if(isset($_POST["alnt_id"])){
            $condition .= " AND alnt_id = :alnt_id ";

            // เซ็ตสถานะการอ่านว่า อ่านแล้ว
            $stmt = $pdo->prepare("UPDATE `alert_notication` SET `alnt_reading_status` = 1 WHERE `alnt_id` = :alnt_id LIMIT 1");
            $stmt->bindParam(":alnt_id", $_POST["alnt_id"], PDO::PARAM_INT);
            $stmt->execute();
        }

        // $limit = (isset($_POST["limit"])) ? " LIMIT :limit " : "";
        // $keyword = (isset($_POST["keyword"])) ? $_POST["keyword"] : "";
        
        $sql = " SELECT * FROM `alert_notication` WHERE to_user = ".$_SESSION["user"]["user_id"]." ";
        if(isset($_POST["keyword"])){
            $sql .= " AND alnt_header LIKE '%".$_POST["keyword"]."%' ";
        }
        if(isset($_POST["alnt_id"])){
            $sql .= " AND alnt_id =  ".$_POST["alnt_id"]." ";
        }

        $sql .= " ORDER BY `alnt_datetime` DESC ";

        if(isset($_POST["limit"])){
            $sql .= " LIMIT ".$_POST["limit"]." ";
        }

        $stmt = $pdo->prepare($sql);

        // $stmt = $pdo->prepare("SELECT * FROM `alert_notication` WHERE to_user = :user_id AND alnt_header LIKE :keyword ".$condition." ORDER BY `alnt_datetime` DESC ".$limit); // ใส่โค้ด Sql ลงไป
        // $stmt->bindValue(':user_id', $_SESSION["user"]["user_id"], PDO::PARAM_INT);
        // if(isset($_POST["keyword"])){
        //     $stmt->bindValue(':keyword', '%'.$_POST["keyword"].'%', PDO::PARAM_STR);
        // }

        // if(isset($_POST["alnt_id"])){   $stmt->bindValue(':alnt_id', $_POST["alnt_id"], PDO::PARAM_INT);            }
        // if(isset($_POST["limit"])){     $stmt->bindValue(':limit', $_POST["limit"], PDO::PARAM_INT);                }

        $get = $database_obj->qrySql($stmt);
        foreach($get["data"] AS $rs){
            // ดึงเนื้อหาในไฟล์
            $string = file_get_contents($_dr_storage."/alert_notication_content/".$rs["alnt_content_file"]);
            $rs["content_html"] = $string;

            $echo["data"][] = $rs;
        }
        echo json_encode($echo);
    }

    $database_obj->closs_sql();
?>