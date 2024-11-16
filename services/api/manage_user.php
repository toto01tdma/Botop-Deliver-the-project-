<?php
if (!($_SERVER['REQUEST_METHOD'] === "POST")) {
    echo "Method Not Allowed!!!";
    exit;
}
require_once("../../includes/config.php");
$database_obj = new Database();

$database_obj->get_session_start();
$pdo = $database_obj->get_var_connect();

function get_client_ip()
{
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

$action = $_POST["action"];

if ($action == "read_users") {
    $echo["status"] = 1;
    $condition_user_id = (isset($_POST["user_id"])) ? " AND user_id = :user_id " : "";
    $condition_limit = (isset($_POST["page"])) ? " LIMIT " . ($_POST["page"] * 50) . ",50 " : "";

    $stmt = $pdo->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM users WHERE user_status = 1 AND (user_firstname LIKE :keyword OR user_lastname LIKE :keyword) " . $condition_user_id . " ORDER BY user_type ASC " . $condition_limit);
    if (isset($_POST["user_id"])) {
        $stmt->bindValue(':user_id', $_POST["user_id"], PDO::PARAM_STR);
    }
    $stmt->bindValue(':keyword', '%' . $_POST["keyword"] . '%', PDO::PARAM_STR);
    $get = $database_obj->qrySql($stmt);
    $echo["count_all"] = $get["count_all"];
    $echo["data"] = [];
    foreach ($get["data"] as $rs) {
        $user_type_obj = $database_obj->user_type_int_to_text($rs["user_type"]);
        $rs["user_type_text_thai"] = $user_type_obj["thai"];
        $rs["user_type_bg_color"] = $user_type_obj["bg_color"];
        $echo["data"][] = $rs;
    }
    echo json_encode($echo);
} else if ($action == "set_user_type") {
    $echo["status"] = 1;
    $stmt = $pdo->prepare("UPDATE `users` SET `user_type`= :user_type WHERE user_id = :user_id");
    $stmt->bindParam(':user_type', $_POST["user_type"]);
    $stmt->bindParam(':user_id', $_POST["user_id"]);
    $result = $stmt->execute();
    if (!$result) {
        $echo["status"] = 0;
        $echo["error"] = "บันทึกไม่สำเร็จ";
    }
    echo json_encode($echo);
} else if ($action == "delete_user") {
    $echo["status"] = 1;
    $stmt = $pdo->prepare("UPDATE `users` SET `user_status`= :user_status WHERE user_id = :user_id");
    $stmt->bindValue(':user_status', "0", PDO::PARAM_STR);
    $stmt->bindValue(':user_id', $_POST["user_id"], PDO::PARAM_STR);
    $result = $stmt->execute();
    if (!$result) {
        $echo["status"] = 0;
        $echo["error"] = "บันทึกไม่สำเร็จ";
    }
    echo json_encode($echo);
} else if ($action == "edit_mydata_user") {
    $echo["status"] = 1;
    parse_str($_POST["data"], $data_arr);
    $stmt = $pdo->prepare("UPDATE `users` SET `user_firstname`=:user_firstname, `user_lastname`=:user_lastname, `user_email`=:user_email, `user_username`=:user_username, `user_gender`=:user_gender WHERE `user_id`=:user_id AND user_status = 1");
    $stmt->bindValue(':user_firstname', $data_arr["user_firstname"], PDO::PARAM_STR);
    $stmt->bindValue(':user_lastname', $data_arr["user_lastname"], PDO::PARAM_STR);
    $stmt->bindValue(':user_email', $data_arr["user_email"], PDO::PARAM_STR);
    $stmt->bindValue(':user_username', $data_arr["user_username"], PDO::PARAM_STR);
    $stmt->bindValue(':user_gender', $_POST["gender"], PDO::PARAM_STR);
    $stmt->bindValue(':user_id', $_SESSION["user"]["user_id"], PDO::PARAM_STR);
    $result = $stmt->execute();
    if (!$result) {
        $echo["status"] = 0;
        $echo["error"] = "บันทึกไม่สำเร็จ";
    } else {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE user_status = 1 AND user_id = :user_id LIMIT 1"); // ใส่โค้ด Sql ลงไป
        $stmt->bindParam(':user_id', $_SESSION["user"]["user_id"]);
        $get = $database_obj->qrySql($stmt);

        $user_type_obj = $database_obj->user_type_int_to_text($get["data"][0]["user_type"]);
        $get["data"][0]["user_type_text"] = $user_type_obj["thai"];

        unset($_SESSION['user']);
        foreach ($get["data"][0] as $key => $val) {
            $_SESSION['user'][$key] = $val;
        }
    }
    echo json_encode($echo);
} else if ($action == "update_address") {
    $echo["status"] = 1;

    $stmt = $pdo->prepare("UPDATE `users` SET 
    `user_phonenumber`= :user_phonenumber, 
    `user_fullname_for_order`= :user_fullname_for_order,
    `geographie_id`= :geographie_id,
    `province_id`= :province_id,
    `amphure_id`= :amphure_id,
    `district_id`= :district_id,
    `zipcode`= :zipcode,
    `user_address`= :user_address
    WHERE user_id = :user_id");
    $stmt->bindParam(":user_phonenumber", $_POST["phone_number"], PDO::PARAM_STR);
    $stmt->bindParam(":user_fullname_for_order", $_POST["user_full_name"], PDO::PARAM_STR);
    $stmt->bindParam(":geographie_id", $_POST["thai_geographies"], PDO::PARAM_INT);
    $stmt->bindParam(":province_id", $_POST["thai_provinces"], PDO::PARAM_INT);
    $stmt->bindParam(":amphure_id", $_POST["thai_amphures"], PDO::PARAM_INT);
    $stmt->bindParam(":district_id", $_POST["thai_tambols"], PDO::PARAM_INT);
    $stmt->bindParam(":zipcode", $_POST["thai_zipcode"], PDO::PARAM_INT);
    $stmt->bindParam(":user_address", $_POST["address_detail"], PDO::PARAM_STR);
    $stmt->bindParam(":user_id", $_SESSION["user"]["user_id"], PDO::PARAM_INT);
    $result = $stmt->execute();
    if (!$result) {
        $echo["status"] = 0;
        $echo["error"] = "ไม่สามารถบันทึกได้";
    }
    echo json_encode($echo);
} else if ($action == "send_email_for_reset_password") {
    $echo["status"] = 1;

    $stmt = $pdo->prepare("SELECT * FROM users WHERE user_status = 1 AND user_email = :email LIMIT 1");
    $stmt->bindValue(':email', $_POST["email"], PDO::PARAM_STR);
    $get_user = $database_obj->qrySql($stmt);
    if ($get_user["count_all"] > 0) {
        // สร้าง token key
        $token["session"] = session_id();
        $token["user_id"] = $get_user["data"][0]['user_id'];
        $token["time"] = time();
        $token["ip"] = get_client_ip();
        // $token["login_uniqueid"] = $_SERVER["UNIQUE_ID"];
        $token_key = base64_encode(json_encode($token));

        $url = $_SERVER['HTTP_HOST'] . "/pages/other/reset_password.php?token_for_reset=" . $token_key;

        $text = "<p>สามารถคลิกลิงค์นี้เพื่อยืนยันการเปลี่ยนรหัสผ่าน </p> <br> <a style='font-weight: 400; letter-spacing: .03em; font-size: 0.8125rem; min-width: 2.375rem; color: #fff !important; background: #6259ca !important;' href='" . $url . "'>คลิกเพื่อเปลี่ยนรหัสผ่าน</a>";
        $dateTime20MinutesLater = date('Y-m-d H:i:s', strtotime($currentDateTime) + 1200); // เพิ่ม 20 นาที (20 * 60 วินาที)
        $result = $database_obj->send_email($_POST["email"], "ยืนยันการเปลี่ยนรหัสผ่าน", $text);
        $echo["result_email"] = $result;
        if ($result["status"]) {
            $stmt = $pdo->prepare("INSERT INTO `user_reset_history` SET 
            `urshtr_token_key`= :urshtr_token_key, 
            `urshtr_expired`= :urshtr_expired,
            `user_id`= :user_id ");
            $stmt->bindParam(":urshtr_token_key", $token_key, PDO::PARAM_STR);
            $stmt->bindParam(":urshtr_expired", $dateTime20MinutesLater, PDO::PARAM_STR);
            $stmt->bindParam(":user_id", $_SESSION["user"]["user_id"], PDO::PARAM_INT);
            $result = $stmt->execute();
            if (!$result) {
                $echo["status"] = 0;
                $echo["error"] = "ไม่สามารถบันทึกได้";
            }
        } else {
            $echo["status"] = 0;
            $echo["error"] = "ไม่สามารถส่งอีเมลได้";
        }
    } else {
        $echo["status"] = 0;
        $echo["error"] = "ไม่มีผู้ใช้";
    }
    echo json_encode($echo);
}

$database_obj->closs_sql();
?>