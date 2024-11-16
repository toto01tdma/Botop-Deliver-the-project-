<?php
    if(!($_SERVER['REQUEST_METHOD'] === "POST")){
        echo "Method Not Allowed!!!";
        exit;
    }
    require_once("../../includes/config.php");
    $database_obj = new Database();
    $database_obj->get_session_start();
    $connect_database = $database_obj->get_var_connect();

    $action = $_POST["action"];

    if($action == "register"){
        $echo["status"] = 1;
        parse_str($_POST["data"], $data_arr);

        //ตรวจสอบอีเมลว่าเหมือนกันกับในระบบหรือไม่
        $stmt = $connect_database->prepare("SELECT user_id FROM users WHERE user_status = 1 AND user_email = :email LIMIT 1"); // ใส่โค้ด Sql ลงไป
        $stmt->bindParam(":email", $data_arr["email_for_regsiter"]);
        $get = $database_obj->qrySql($stmt);
        if($get["count_all"] > 0){
            $echo["status"] = 0;
            $echo["error"] = "Email นี้มีผู้อื่นใช้แล้ว";
            echo json_encode($echo);
            exit;
        }

        //ตรวจสอบว่าชื่อผู้ใช้เหมือนกันกับในระบบหรือไม่
        $stmt = $connect_database->prepare("SELECT user_id FROM users WHERE user_status = 1 AND user_username = :username LIMIT 1"); // ใส่โค้ด Sql ลงไป
        $stmt->bindParam(":username", $data_arr["username_for_regsiter"]);
        $get = $database_obj->qrySql($stmt);
        if($get["count_all"] > 0){
            $echo["status"] = 0;
            $echo["error"] = "Username นี้มีผู้อื่นใช้แล้ว";
            echo json_encode($echo);
            exit;
        }

        // password_hash คือนำไปแปลงรหัสก่อนเก็บลงฐานข้อมูล
        $password = password_hash($data_arr["password_for_register"], PASSWORD_DEFAULT);

        $sql = "INSERT INTO `users`(`user_username`, `user_password`, `user_gender`, `user_firstname`, `user_lastname`, `user_email`, `user_type`, `user_status`, `user_last_login_date`)
                VALUES (:username, :password, :gender, :f_name, :l_name, :email, :user_type, :user_status, :update_user)";
        $stmt = $connect_database->prepare($sql); // ใส่โค้ด Sql ลงไป
        $stmt->bindValue(':username', $data_arr["username_for_regsiter"]);
        $stmt->bindValue(':password', $password);
        $stmt->bindValue(':gender', $_POST["gender"]);
        $stmt->bindValue(':f_name', $data_arr["first_name"]);
        $stmt->bindValue(':l_name', $data_arr["last_name"]);
        $stmt->bindValue(':email', $data_arr["email_for_regsiter"]);
        $stmt->bindValue(':user_type', "2");
        $stmt->bindValue(':user_status', "1");
        $stmt->bindValue(':update_user', date("Y-m-d H:i:s"));
        $result = $stmt->execute();
        if(!$result){
            $echo["status"] = 0;
            $echo["error"] = "ไม่สามารถลงทะเบียนได้";
        }
        echo json_encode($echo);
    }else if($action == "check_email_for_register"){
        $stmt = $connect_database->prepare("SELECT user_id FROM users WHERE user_status = 1 AND user_email = :email LIMIT 1"); // ใส่โค้ด Sql ลงไป
        $stmt->bindParam(":email", $_POST["email"]);
        $get = $database_obj->qrySql($stmt);
        if($get["count_all"] > 0){
            $echo["status"] = 0;
            $echo["error"] = "Email นี้มีผู้อื่นใช้แล้ว";
        }else{
            $echo["status"] = 1;
            $echo["error"] = "";
        }
        echo json_encode($echo);
    }else if($action == "check_username_for_register"){
        $stmt = $connect_database->prepare("SELECT user_id FROM users WHERE user_status = 1 AND user_username = :username LIMIT 1"); // ใส่โค้ด Sql ลงไป
        $stmt->bindParam(":username", $_POST["username"]);
        $get = $database_obj->qrySql($stmt);
        if($get["count_all"] > 0){
            $echo["status"] = 0;
            $echo["error"] = "Username นี้มีผู้อื่นใช้แล้ว";
        }else{
            $echo["status"] = 1;
            $echo["error"] = "";
        }
        echo json_encode($echo);
    }else if($action == "login"){
        parse_str($_POST["data"], $data_arr);
        $stmt = $connect_database->prepare("SELECT * FROM users WHERE user_status = 1 AND user_username = :username LIMIT 1"); // ใส่โค้ด Sql ลงไป
        $stmt->bindParam(":username", $data_arr["username"]);
        $get_user = $database_obj->qrySql($stmt);
        if($get_user["count_all"] < 1){
            $echo["error"] = "Username ไม่ถูกต้อง";
            $echo["status"] = 0;
        }else if(!(password_verify($data_arr["password"], $get_user["data"][0]['user_password']))){
            // ตรวจสอบ Password ว่าตรงกันหรือไม่ password_verify($data_arr["password"], $get_user["data"][0]['user_password'])
            $echo["error"] = "Password ไม่ถูกต้อง";
            $echo["status"] = 0;
        }else{
            // สร้าง token key
            $token["session"] = session_id();
            $token["user_id"] = $get_user["data"][0]['user_id'];
            $token["time"] = time();
            $token["ip"] = $database_obj->get_client_ip();
            // $token["login_uniqueid"] = $_SERVER["UNIQUE_ID"];
            $token_key = base64_encode(json_encode($token));

            $sql = "UPDATE `users` SET `user_token`= :user_token, `user_last_login_date`= :update_user WHERE user_id = :user_id";
            $stmt = $connect_database->prepare($sql); // ใส่โค้ด Sql ลงไป
            $stmt->bindValue(':user_token', $token_key, PDO::PARAM_STR);
            $stmt->bindValue(':update_user', date("Y-m-d H:i:s"), PDO::PARAM_STR);
            $stmt->bindValue(':user_id', $get_user["data"][0]['user_id'], PDO::PARAM_INT);
            $result = $stmt->execute();

            $user_type_obj = $database_obj->user_type_int_to_text($get_user["data"][0]["user_type"]);
            $get_user["data"][0]["user_type_text"] = $user_type_obj["thai"];

            foreach ($get_user["data"][0] as $key => $val){
                $_SESSION['user'][$key] = $val;
            }
            $echo["status"] = 1;
        }
        echo json_encode($echo);
    }else if($action == "login_by_fb"){
        $echo["status"] = 1;
        $stmt = $connect_database->prepare("SELECT * FROM users WHERE user_status = 1 AND user_email = :email LIMIT 1"); // ใส่โค้ด Sql ลงไป
        $stmt->bindParam(":email", $_POST["email"]);
        $get_user = $database_obj->qrySql($stmt);

        // สร้าง token key
        $token["session"] = session_id();
        $token["user_id"] = $get_user["data"][0]['user_id'];
        $token["time"] = time();
        $token["ip"] = $database_obj->get_client_ip();
        // $token["login_uniqueid"] = $_SERVER["UNIQUE_ID"];
        $token_key = base64_encode(json_encode($token));

        $sql = "UPDATE `users` SET `user_token`= :user_token, `user_last_login_date`= :update_user WHERE user_id = :user_id";
        $stmt = $connect_database->prepare($sql); // ใส่โค้ด Sql ลงไป
        $stmt->bindValue(':user_token', $token_key);
        $stmt->bindValue(':update_user', date("Y-m-d H:i:s"));
        $stmt->bindValue(':user_id', $get_user["data"][0]['user_id']);
        $result = $stmt->execute();

        $user_type_obj = $database_obj->user_type_int_to_text($get_user["data"][0]["user_type"]);
        $get_user["data"][0]["user_type_text"] = $user_type_obj["thai"];
        
        foreach ($get_user["data"][0] as $key => $val) {
            $_SESSION['user'][$key] = $val;
        }
        echo json_encode($echo);
    }else if($action == "register_by_fb"){
        $echo["status"] = 1;

        // password_hash คือนำไปแปลงรหัสก่อนเก็บลงฐานข้อมูล
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        if($_POST["gender"] == "male"){
            $gender = 1;
        }else if($_POST["gender"] == "female"){
            $gender = 2;
        }else{
            $gender = 3;
        }

        $sql = "INSERT INTO `users`(`user_username`, `user_password`, `user_gender`, `user_firstname`, `user_lastname`, `user_email`, `user_type`, `user_status`, `user_last_login_date`)
                VALUES (:username, :password, :gender, :f_name, :l_name, :email, :user_type, :user_status, :update_user)";
        $stmt = $connect_database->prepare($sql); // ใส่โค้ด Sql ลงไป
        $stmt->bindValue(':username', $_POST["username"]);
        $stmt->bindValue(':password', $password);
        $stmt->bindValue(':gender', $gender);
        $stmt->bindValue(':f_name', $_POST["first_name"]);
        $stmt->bindValue(':l_name', $_POST["last_name"]);
        $stmt->bindValue(':email', $_POST["email"]);
        $stmt->bindValue(':user_type', "2");
        $stmt->bindValue(':user_status', "1");
        $stmt->bindValue(':update_user', date("Y-m-d H:i:s"));
        $result = $stmt->execute();
        if(!$result){
            $echo["status"] = 0;
            $echo["error"] = "ไม่สามารถลงทะเบียนได้";
        }
        echo json_encode($echo);
    }else if($action == "logout"){
        unset($_SESSION["user"]);
        $echo["status"] = 1;
        echo json_encode($echo);
    }

    $database_obj->closs_sql();
?>