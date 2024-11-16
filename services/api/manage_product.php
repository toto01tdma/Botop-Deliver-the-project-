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

    function recommendProducts($user_id, $num_recommendations, $pdo, $database_obj){
        // $user_id รหัสผู้ใช้ที่เข้าใช้งานระบบ (รหัสผู้ใช้ตัวเอง)
        // $num_recommendations จะแนะนำสินค้ากี่ชิ้น

        // ค้นหาเรทติ้งของผู้ใช้
        $user_ratings = array();
        $stmt_pd = $pdo->prepare("SELECT pd_id FROM products");
        $stmt_pd->execute();
        while($row_pd = $stmt_pd->fetch(PDO::FETCH_ASSOC)){
            $query_rt = "SELECT rlt.pd_id, rlt.rating FROM ratings_like_product AS rlt WHERE rlt.user_id = :user_id AND rlt.pd_id = :pd_id LIMIT 1";
            $stmt_rt = $pdo->prepare($query_rt);
            $stmt_rt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
            $stmt_rt->bindParam(":pd_id", $row_pd["pd_id"], PDO::PARAM_INT);
            $get_rt = $database_obj->qrySql($stmt_rt);
            $user_ratings[$row_pd['pd_id']] = ($get_rt["count_all"] > 0) ? 1 : 0 ;
            // while ($row_rt = $stmt_rt->fetch(PDO::FETCH_ASSOC)) {
            //     $user_ratings[$row_rt['pd_id']] = $row_rt['rating'];      // $user_ratings[(รหัสสินค้า)] = (เรทติ้ง = 1 หรือ 0);
            // }
        }
    
        // คำนวณ cosine similarity
        $similarities = array();
        $query = "SELECT rlt.user_id, rlt.pd_id, rlt.rating FROM ratings_like_product AS rlt WHERE rlt.user_id <> :user_id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $other_user_id = $row['user_id'];
            $pd_id = $row['pd_id'];
            // $rating = $row['rating'];
            if (!isset($similarities[$other_user_id])) {
                $similarities[$other_user_id] = array();
            }
            if (!isset($similarities[$other_user_id][$user_id])) {
                $similarities[$other_user_id][$user_id] = 0;
            }
            $similarities[$other_user_id][$user_id] += $user_ratings[$pd_id] /* * $rating*/;
        }
    
        // คำนวณค่าความคล้ายคลึง
        $similarities_with_scores = array();
        foreach ($similarities as $other_user_id => $similarity) {
            $other_user_ratings = array();
            $query = "SELECT rlt.pd_id, rlt.rating FROM ratings_like_product AS rlt WHERE rlt.user_id = :other_user_id";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":other_user_id", $other_user_id, PDO::PARAM_INT);
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $other_user_ratings[$row['pd_id']] = $row['rating'];
            }
            $similarity_score = 0;
            foreach ($user_ratings as $pd_id => $rating) {
                if (isset($other_user_ratings[$pd_id])) {
                    $similarity_score += $rating * $other_user_ratings[$pd_id];
                }
            }
            $similarities_with_scores[$other_user_id] = $similarity_score;
        }

        // จัดเรียงผู้ใช้ตามผู้ใช้ที่มีความชอบใกล้เคียงที่สุด
        arsort($similarities_with_scores);

        // foreach ($other_user_ratings as $pd_id => $rating) {
        //     if (!isset($user_ratings[$pd_id])) {
        //         continue;
        //     }
        //     if (!isset($similarities_with_scores[$other_user_id])) {
        //         $similarities_with_scores[$other_user_id] = array(
        //             'user_id' => $other_user_id,
        //             'score' => 0,
        //         );
        //     }
        //     $similarities_with_scores[$other_user_id]['score'] += $rating * $user_ratings[$pd_id] * $similarities[$other_user_id][$user_id];
        // }

        // สร้างรายการแนะนำสินค้า
        $recommendations = array();
        foreach ($similarities_with_scores as $user_id => $similar_user) {
            $query = "SELECT rlt.pd_id, rlt.rating FROM ratings_like_product AS rlt INNER JOIN products ON products.pd_id = rlt.pd_id WHERE rlt.user_id = :similar_user_id AND products.pd_stock > 0";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":similar_user_id", $user_id);
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $pd_id = $row['pd_id'];
                if (!isset($user_ratings[$pd_id]) || $user_ratings[$pd_id] == 0) {
                    if (!isset($recommendations[$pd_id])) {
                        $recommendations[$pd_id] = 0;
                    }
                    $recommendations[$pd_id] += $row['rating'] * $similar_user;
                }
            }
        }

        // จัดเรียงรายการแนะนำสินค้าตามคะแนน
        arsort($recommendations);
                
        // คืนค่ารายการแนะนำสินค้า n รายการแรก
        $i = 0;
        $new_recommendations = array();
        foreach($recommendations AS $pd_id => $similar){
            if($i >= $num_recommendations){
                break;
            }else{
                $new_recommendations[] = $pd_id;
            }
            $i += 1;
        }
        return $new_recommendations;
    }

    if($action == "read_products"){
        $echo["status"] = 1;
        if(isset($_POST["keyword"])){
            $keyword = trim($_POST["keyword"]);
        }else{
            $keyword = "";
        }

        $condition = "";
        if(isset($_POST["pd_id"])){
            $condition = " AND products.pd_id = :pd_id";
        }else if(isset($_POST["cate_id"])){
            if($_POST["cate_id"] != "*"){
                $condition = " AND products.ctgr_id = :cate_id";
            }
        }
        
        if(isset($_POST["limit"])){
            $limit = " LIMIT ".$_POST["limit"]." ";
        }else if(isset($_POST["page"])){
            $limit = " LIMIT ".($_POST["page"]*50).",50";
        }else{
            $limit = "";
        }

        $stmt = $pdo->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM products INNER JOIN categorys ON products.ctgr_id = categorys.ctgr_id WHERE products.pd_name LIKE :keyword ".$condition." ORDER BY CASE WHEN products.pd_stock = 0 THEN 1 ELSE 0 END, products.pd_stock DESC ".$limit);

        if(isset($_POST["pd_id"])){
            $stmt->bindValue(':pd_id', $_POST["pd_id"], PDO::PARAM_STR);
        }else if(isset($_POST["cate_id"])){
            if($_POST["cate_id"] != "*"){
                $stmt->bindValue(':cate_id', $_POST["cate_id"], PDO::PARAM_STR);
            }
        }

        $stmt->bindValue(':keyword', '%'.$keyword.'%', PDO::PARAM_STR);
        $get = $database_obj->qrySql($stmt);
        $echo["count_all"] = $get["count_all"];
        $echo["data"] = [];
        foreach($get["data"] AS $rs){
            $stmt = $pdo->prepare("SELECT pd_img_name FROM product_images WHERE pd_id = :pd_id AND pd_img_status_cover = 1 LIMIT 1");
            $stmt->bindValue(':pd_id', $rs["pd_id"], PDO::PARAM_STR);
            $get_img = $database_obj->qrySql($stmt);
            $rs["pd_image"] = $get_img["data"][0]["pd_img_name"];

            // ดึงไฟล์ JSON รายละเอียดสินค้า 
            $string = file_get_contents($_dr_storage."/products/".$rs["pd_id"]."/".$rs["pd_detail"]);
            $content = json_decode($string, true);
            $rs["pd_detail_html"] = $content["content"];

            // ตรวจสอบว่าผู้ใช้คนนี้ได้กดถูกใจสินค้าแล้วใช่หรือไม่
            if(isset($_SESSION["user"])){
                $stmt = $pdo->prepare("SELECT COUNT(rtlpd_id) AS count FROM ratings_like_product WHERE user_id = :user_id AND pd_id = :pd_id LIMIT 1"); // ใส่โค้ด Sql ลงไป
                $stmt->bindParam(':pd_id', $rs["pd_id"]);
                $stmt->bindParam(':user_id', $_SESSION["user"]["user_id"]);
                $get = $database_obj->qrySql($stmt);
                $rs["like_active"] = ($get["data"][0]["count"] > 0) ? "active" : "";
            }else{
                $rs["like_active"] = "";
            }

            // ตรวจสอบจำนวนการกดถูกใจของสินค้านั้นๆ
            $stmt = $pdo->prepare("SELECT COUNT(rtlpd_id) AS count FROM ratings_like_product WHERE pd_id = :pd_id LIMIT 1"); // ใส่โค้ด Sql ลงไป
            $stmt->bindParam(':pd_id', $rs["pd_id"]);
            $get = $database_obj->qrySql($stmt);
            $rs["count_like"] = $get["data"][0]["count"];

            // นำข้อมูลเข้าตัวแปร
            $echo["data"][] = $rs;
        }
        echo json_encode($echo);
    }else if($action == "save_product"){
        $echo["status"] = 1;
        if($_POST["pd_id"] == ""){
            // กรณีสร้างข้อมูลสินค้า
            $echo["return_action"] = "create";
            $pd_id = $database_obj->get_table_id("products");

            $path = $_dr_storage."/products/".$pd_id;
            mkdir($path); // สร้างโฟลเดอร์
            // อัพไฟล์ JSON รายละเอียดสินค้า
            $content = trim($_POST["pd_detail"]);
            $detail["content"] = $content;
            $file_detail_json = $pd_id."detail.json";
            $fp = fopen($path."/".$file_detail_json, 'w');
            fwrite($fp, json_encode($detail));
            fclose($fp);

            $sql = "INSERT INTO `products`(`pd_id`, `pd_name`, `pd_price`, `pd_detail`, `pd_stock`, `pd_freight`, `pd_payment_period`, `ctgr_id`, `user_id`) 
                    VALUES (:pd_id, :pd_name, :pd_price, :pd_detail, :pd_stock, :pd_freight, :pd_payment_period, :ctgr_id, :user_id)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':pd_id', $pd_id);
            $stmt->bindParam(':pd_name', $_POST["pd_name"]);
            $stmt->bindParam(':pd_price', $_POST["pd_price"]);
            $stmt->bindParam(':pd_detail', $file_detail_json);
            $stmt->bindParam(':pd_stock', $_POST["pd_stock"]);
            $stmt->bindParam(':pd_freight', $_POST["pd_freight"]);
            $stmt->bindParam(':pd_payment_period', $_POST["pd_payment_period"]);
            $stmt->bindParam(':ctgr_id', $_POST["ctgr_id"]);
            $stmt->bindParam(':user_id', $_SESSION["user"]["user_id"]);
            $result = $stmt->execute();
            if($result){
                $path .= "/image_main";
                mkdir($path); // สร้างโฟลเดอร์ image_main สำหรับเก็บรูป
                $target_file = $pd_id.$database_obj->get_table_id("product_images")."new_pd.png";
                if(copy($_dr_assets."/img/pd_img_default.png", $path."/".$target_file)){
                    $sql = "INSERT INTO `product_images`(`pd_img_name`, `pd_id`, `pd_img_status_cover`) VALUES (:pd_img_name, :pd_id, :pd_img_status_cover)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindValue(':pd_img_name', $target_file, PDO::PARAM_STR);
                    $stmt->bindValue(':pd_id', $pd_id, PDO::PARAM_STR);
                    $stmt->bindValue(':pd_img_status_cover', "1", PDO::PARAM_STR);
                    $result = $stmt->execute();
                    if(!$result){
                        $echo["status"] = 0;
                        $echo["error"] = "ไม่สามารถจัดการรูปสินค้าได้";
                    }
                }else{
                    $echo["status"] = 0;
                    $echo["error"] = "ไม่สามารถจัดเก็บรูปได้";
                }
            }else{
                $echo["status"] = 0;
                $echo["error"] = "ไม่สามารถจัดการข้อมูลสินค้าได้";
            }
        }else{
            // กรณีแก้ไขข้อมูลสินค้า
            $echo["return_action"] = "update";
            $pd_id = $_POST["pd_id"];

            $path = $_dr_storage."/products/".$pd_id;
            // แก้ไขไฟล์ JSON รายละเอียดสินค้า
            $content = trim($_POST["pd_detail"]);
            $detail["content"] = $content;
            $file_detail_json = $pd_id."detail.json";
            $fp = fopen($path."/".$file_detail_json, 'w');
            fwrite($fp, json_encode($detail));
            fclose($fp);

            $sql = "UPDATE `products` SET `pd_name`= :pd_name, `pd_price`= :pd_price, `pd_stock`= :pd_stock, `pd_freight`= :pd_freight,
                    `pd_payment_period`= :pd_payment_period, `ctgr_id`= :ctgr_id  WHERE `pd_id` = :pd_id ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':pd_id', $pd_id);
            $stmt->bindParam(':pd_name', $_POST["pd_name"]);
            $stmt->bindParam(':pd_price', $_POST["pd_price"]);
            $stmt->bindParam(':pd_stock', $_POST["pd_stock"]);
            $stmt->bindParam(':pd_freight', $_POST["pd_freight"]);
            $stmt->bindParam(':pd_payment_period', $_POST["pd_payment_period"]);
            $stmt->bindParam(':ctgr_id', $_POST["ctgr_id"]);
            $result = $stmt->execute();
            if(!$result){
                $echo["status"] = 0;
                $echo["error"] = "ไม่สามารถจัดการข้อมูลสินค้าได้";
            }
        }
        $echo["return_pd_id"] = $pd_id;
        echo json_encode($echo);
    }else if($action == "read_product_files"){
        $echo["status"] = 1;
        $stmt = $pdo->prepare("SELECT * FROM product_images WHERE pd_id LIKE :pd_id ");
        $stmt->bindValue(':pd_id', $_POST["pd_id"], PDO::PARAM_STR);
        $get = $database_obj->qrySql($stmt);
        $echo["data"] = [];
        foreach($get["data"] AS $rs){
            $echo["data"][] = $rs;
        }
        echo json_encode($echo);
    }else if($action == "create_product_file"){
        $echo["status"] = 1;
        $file_obj = $database_obj->check_file_image($_FILES["pd_image"]);
        if($file_obj["status"] == 1){
            $path = $_dr_storage."/products/".$_POST["pd_id"]."/image_main";
            $target_file = $_POST["pd_id"].$database_obj->get_table_id("product_images").$file_obj["file_name"];
            if(move_uploaded_file($_FILES["pd_image"]["tmp_name"], $path."/".$target_file)){
                $sql = "INSERT INTO `product_images`(`pd_img_name`, `pd_id`, `pd_img_status_cover`) VALUES (:pd_img_name, :pd_id, :pd_img_status_cover)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(':pd_img_name', $target_file, PDO::PARAM_STR);
                $stmt->bindValue(':pd_id', $_POST["pd_id"], PDO::PARAM_STR);
                $stmt->bindValue(':pd_img_status_cover', "0", PDO::PARAM_STR);
                $result = $stmt->execute();
                if(!$result){
                    $echo["status"] = 0;
                    $echo["error"] = "ไม่สามารถจัดการรูปสินค้าได้";
                }
            }else{
                $echo["status"] = 0;
                $echo["error"] = "ไม่สามารถจัดเก็บรูปได้";
            }
        }else{
            $echo["status"] = 0;
            $echo["error"] = $file_obj["error"];
        }
        echo json_encode($echo);
    }else if($action == "update_product_file"){
        $echo["status"] = 1;
        $file_obj = $database_obj->check_file_image($_FILES["pd_image"]);
        if($file_obj["status"] == 1){
            $stmt = $pdo->prepare("SELECT pd_img_name FROM product_images WHERE pd_img_id LIKE :pd_img_id ");
            $stmt->bindValue(':pd_img_id', $_POST["pd_img_id"], PDO::PARAM_STR);
            $get = $database_obj->qrySql($stmt);
            $path = $_dr_storage."/products/".$_POST["pd_id"]."/image_main";
            if(unlink($path."/".$get["data"][0]["pd_img_name"])){
                $target_file = $_POST["pd_id"].$database_obj->get_table_id("product_images").$file_obj["file_name"];
                if(move_uploaded_file($_FILES["pd_image"]["tmp_name"], $path."/".$target_file)){
                    $sql = "UPDATE `product_images` SET `pd_img_name` = :pd_img_name WHERE `pd_img_id` = :pd_img_id ";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindValue(':pd_img_name', $target_file, PDO::PARAM_STR);
                    $stmt->bindValue(':pd_img_id', $_POST["pd_img_id"], PDO::PARAM_STR);
                    $result = $stmt->execute();
                    if(!$result){
                        $echo["status"] = 0;
                        $echo["error"] = "ไม่สามารถจัดการรูปสินค้าได้";
                    }
                }else{
                    $echo["status"] = 0;
                    $echo["error"] = "ไม่สามารถจัดเก็บรูปได้";
                }
            }else{
                $echo["status"] = 0;
                $echo["error"] = "ไม่สามารถจัดการรูปสินค้าได้";
            }
        }else{
            $echo["status"] = 0;
            $echo["error"] = $file_obj["error"];
        }
        echo json_encode($echo);
    }else if($action == "delete_product_file"){
        $echo["status"] = 1;
        $stmt = $pdo->prepare("SELECT pd_img_name FROM product_images WHERE pd_img_id LIKE :pd_img_id ");
        $stmt->bindValue(':pd_img_id', $_POST["pd_img_id"], PDO::PARAM_STR);
        $get = $database_obj->qrySql($stmt);
        $path = $_dr_storage."/products/".$_POST["pd_id"]."/image_main";
        if(unlink($path."/".$get["data"][0]["pd_img_name"])){
            $sql = "DELETE FROM `product_images` WHERE `pd_img_id` = :pd_img_id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':pd_img_id', $_POST["pd_img_id"], PDO::PARAM_STR);
            $result = $stmt->execute();
            if(!$result){
                $echo["status"] = 0;
                $echo["error"] = "ไม่สามารถจัดการรูปสินค้าได้";
            }
        }else{
            $echo["status"] = 0;
            $echo["error"] = "ไม่สามารถจัดการรูปสินค้าได้";
        }
        echo json_encode($echo);
    }else if($action == "change_selected_cover_image"){
        $echo["status"] = 1;
        $sql = "UPDATE `product_images` SET `pd_img_status_cover`= 0 WHERE `pd_id` = :pd_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':pd_id', $_POST["pd_id"]);
        $stmt->execute();

        $sql = "UPDATE `product_images` SET `pd_img_status_cover`= 1 WHERE `pd_img_id` = :pd_img_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':pd_img_id', $_POST["pd_img_id"]);
        $stmt->execute();

        echo json_encode($echo);
    }else if($action == "delete_product"){
        $echo["status"] = 1;
        $path = $_dr_storage."/products/".$_POST["pd_id"]."/image_main";

        $stmt = $pdo->prepare("SELECT * FROM product_images WHERE pd_id = :pd_id ");
        $stmt->bindParam(':pd_id', $_POST["pd_id"]);
        $image_arr = $database_obj->qrySql($stmt);
        foreach($image_arr["data"] AS $rs){
            if(unlink($path."/".$rs["pd_img_name"])){
                $sql = "DELETE FROM `product_images` WHERE `pd_img_id` = ".$rs["pd_img_id"]." ";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
            }
        }
        rmdir($path); // ลบโฟลเดอร์ image_main
        $new_path = str_replace('/image_main', '', $path); // ตัดตัวอักษร "/image_main" ออกจากตัวแปร $path

        // ลบไฟล์ JSON รายละเอียดสินค้า
        $stmt = $pdo->prepare("SELECT pd_detail FROM products WHERE pd_id = :pd_id LIMIT 1");
        $stmt->bindParam(':pd_id', $_POST["pd_id"]);
        $pd_detail = $database_obj->qrySql($stmt);
        unlink($new_path."/".$pd_detail["data"][0]["pd_detail"]);

        if(rmdir($new_path)){ // ลบโฟลเดอร์ของสินค้า

            // ลบเรทติ้งของสินค้านี้
            $stmt = $pdo->prepare("DELETE FROM `ratings_like_product` WHERE `pd_id` = :pd_id ");
            $stmt->bindParam(':pd_id', $_POST["pd_id"]);
            $stmt->execute();

            // ลบการเชื่อมโปรโมชั่นออก
            $stmt = $pdo->prepare("DELETE FROM `product_connect_promotion` WHERE `pd_id` = :pd_id ");
            $stmt->bindParam(':pd_id', $_POST["pd_id"]);
            $stmt->execute();

            // เซ็ทให้รายการที่สั่งซื้อแล้วสินค้าเป็น pd_id = NULL
            $stmt = $pdo->prepare("UPDATE `order_lists` SET `pd_id`= :set_null WHERE `pd_id` = :pd_id AND odl_pd_name IS NOT NULL");
            $stmt->bindValue(':set_null', NULL, PDO::PARAM_NULL);
            $stmt->bindValue(':pd_id', $_POST["pd_id"], PDO::PARAM_INT);
            $stmt->execute();

            // ลบรายการที่อยู่ในตะกร้า
            $stmt = $pdo->prepare("DELETE FROM `order_lists` WHERE `pd_id` = :pd_id AND odl_pd_name IS NULL");
            $stmt->bindValue(':pd_id', $_POST["pd_id"], PDO::PARAM_INT);
            $stmt->execute();

            $stmt = $pdo->prepare("DELETE FROM `products` WHERE `pd_id` = :pd_id ");
            $stmt->bindParam(':pd_id', $_POST["pd_id"]);
            $stmt->execute();
        }else{
            $echo["status"] = 0;
            $echo["error"] = "ไม่สามารถลบโฟลเดอร์ของสินค้าได้";
        }
        echo json_encode($echo);
    }else if($action == "set_like_product"){
        $echo["status"] = 1;
        $stmt = $pdo->prepare("SELECT COUNT(rtlpd_id) AS count FROM ratings_like_product WHERE user_id = :user_id AND pd_id = :pd_id "); // ใส่โค้ด Sql ลงไป
        $stmt->bindParam(':pd_id', $_POST["pd_id"]);
        $stmt->bindParam(':user_id', $_SESSION["user"]["user_id"]);
        $get = $database_obj->qrySql($stmt);

        if($get["data"][0]["count"] > 0){ // ตรวจสอบว่ากดูกใจอยู่หรือไม่ ถ้ากดถูกใจแล้วจะลบ Rating ออก แต่ถ้ายังไม่กดถูกใจ ก็จะเพิ่ม Rating
            $echo["active"] = 0;
            $stmt = $pdo->prepare("DELETE FROM `ratings_like_product` WHERE `user_id` = :user_id AND pd_id = :pd_id"); // ใส่โค้ด Sql ลงไป
            $stmt->bindParam(':pd_id', $_POST["pd_id"]);
            $stmt->bindParam(':user_id', $_SESSION["user"]["user_id"]);
            $result = $stmt->execute(); // รันคำสั่ง Sql
        }else{
            $echo["active"] = 1;
            $stmt = $pdo->prepare("INSERT INTO `ratings_like_product`(`user_id`, `pd_id`) VALUES (:user_id, :pd_id)"); // ใส่โค้ด Sql ลงไป
            $stmt->bindParam(':pd_id', $_POST["pd_id"]);
            $stmt->bindParam(':user_id', $_SESSION["user"]["user_id"]);
            $result = $stmt->execute(); // รันคำสั่ง Sql
        }

        if(!$result){
            $echo["status"] = 0;
            $echo["error"] = "ไม่สำเร็จ";
        }
        echo json_encode($echo);
    }else if($action == "read_product_for_recommendation_system_cosine_similarity"){
        $echo["status"] = 1;
        $echo["data"] = [];
        $echo["count_all"] = 0;
        if(isset($_SESSION["user"])){
            $recommendation_products = recommendProducts($_SESSION["user"]["user_id"], 20, $pdo, $database_obj);
            $limit = (isset($_POST["page"])) ? " LIMIT ".($_POST["page"]*50).",50" : "";

            // แสดงสินค้าที่แนะนำ
            for($count = 0; $count < 2; $count++){ // จะวนลูปสองรอบ ลูปรอบที่ 1 จะค้นหาข้อมูลด้วยระบบแนะนำ ส่วนวนลูปรอบที่ 2 จะค้นหาข้อมูลแบบปกติ (แต่สินค้าที่แนะนำไปแล้วจะถูกตั้งเงื่อนไขห้ามค้นหาอีกในลูปรอบที่ 2)
                if(empty($recommendation_products)){ // ถ้าหากว่าไม่มีสินค้าที่จะแนะนำจะให้ไปลูปรอบที่ 2 คือค้นหาสินค้าธรรมดา
                    $condition_product_id = "";
                    if($count == 0){
                        continue;
                    }
                }else if($count == 0){
                    $condition_product_id = ' WHERE products.pd_id IN ('.implode(', ', $recommendation_products).') ';
                }else{
                    $condition_product_id = ' WHERE products.pd_id NOT IN ('.implode(', ', $recommendation_products).') ' ;
                }

                $stmt = $pdo->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM products INNER JOIN categorys ON products.ctgr_id = categorys.ctgr_id ".$condition_product_id." ORDER BY CASE WHEN products.pd_stock = 0 THEN 1 ELSE 0 END, products.pd_stock DESC ".$limit);

                $get = $database_obj->qrySql($stmt);
                $echo["count_all"] += $get["count_all"];
                foreach($get["data"] AS $rs){
                    $rs["is_recommendation_system"] = ($count == 0) ? 1 : 0; // ถ้า = 1 แปลว่าเป็นการค้นหาสินค้าด้วยระบบแนะนำ ถ้า = 0 แปลว่าเป็นการค้นหาสินค้าแบบปกติ

                    // ตรวจสอบว่าสินค้านี้มีโปรโมชั่นหรือไม่
                    $current_date = date("Y-m-d");
                    $stmt = $pdo->prepare("SELECT pdcnpmt_id FROM product_connect_promotion INNER JOIN promotions ON product_connect_promotion.pmt_id = promotions.pmt_id WHERE product_connect_promotion.pd_id = :pd_id AND promotions.pmt_start_date <= '".$current_date."' AND promotions.pmt_timeout >= '".$current_date."' LIMIT 1");
                    $stmt->bindValue(':pd_id', $rs["pd_id"], PDO::PARAM_INT);
                    $check_have_pmt = $database_obj->qrySql($stmt);
                    $rs["is_have_promotions"] = ($check_have_pmt["count_all"] > 0) ? 1 : 0;

                    // ดึงรูปสินค้า
                    $stmt = $pdo->prepare("SELECT pd_img_name FROM product_images WHERE pd_id = :pd_id AND pd_img_status_cover = 1 LIMIT 1");
                    $stmt->bindValue(':pd_id', $rs["pd_id"], PDO::PARAM_INT);
                    $get_img = $database_obj->qrySql($stmt);
                    $rs["pd_image"] = $get_img["data"][0]["pd_img_name"];
        
                    // ตรวจสอบว่าผู้ใช้คนนี้ได้กดถูกใจสินค้าแล้วใช่หรือไม่
                    if(isset($_SESSION["user"])){
                        $stmt = $pdo->prepare("SELECT COUNT(rtlpd_id) AS count FROM ratings_like_product WHERE user_id = :user_id AND pd_id = :pd_id LIMIT 1"); // ใส่โค้ด Sql ลงไป
                        $stmt->bindParam(':pd_id', $rs["pd_id"]);
                        $stmt->bindParam(':user_id', $_SESSION["user"]["user_id"]);
                        $get = $database_obj->qrySql($stmt);
                        $rs["like_active"] = ($get["data"][0]["count"] > 0) ? "active" : "";
                    }else{
                        $rs["like_active"] = "";
                    }
        
                    // ตรวจสอบจำนวนการกดถูกใจของสินค้านั้นๆ
                    $stmt = $pdo->prepare("SELECT COUNT(rtlpd_id) AS count FROM ratings_like_product WHERE pd_id = :pd_id LIMIT 1"); // ใส่โค้ด Sql ลงไป
                    $stmt->bindParam(':pd_id', $rs["pd_id"]);
                    $get = $database_obj->qrySql($stmt);
                    $rs["count_like"] = $get["data"][0]["count"];
        
                    // นำข้อมูลเข้าตัวแปร
                    $echo["data"][] = $rs;
                }

                if(isset($_POST["query_for_product_recommend"])){ // ถ้ามีตัวแปรนี้ถูกส่งมาด้วย แปลว่าค้นหาสินค้าเฉพาะสินค้าแนะนำ
                    break;
                }
            }
        }else{
            $echo["status"] = 0;
            $echo["error"] = "เข้าสู่ระบบก่อน";
        }
        echo json_encode($echo);
    }else if($action == "add_stock_product"){
        $echo["status"] = 1;
        $stmt = $pdo->prepare("SELECT pd_stock FROM products WHERE pd_id = :pd_id LIMIT 1");
        $stmt->bindValue(':pd_id', $_POST["pd_id"], PDO::PARAM_STR);
        $get = $database_obj->qrySql($stmt);
        if($get["count_all"] > 0){
            $product = $get["data"][0];
            $update_stock = $_POST["add_stock"] + $product["pd_stock"];

            $stmt = $pdo->prepare("UPDATE products SET pd_stock = :update_stock WHERE pd_id = :pd_id LIMIT 1");
            $stmt->bindValue(':update_stock', $update_stock, PDO::PARAM_INT);
            $stmt->bindValue(':pd_id', $_POST["pd_id"], PDO::PARAM_INT);
            $result = $stmt->execute();
            if(!$result){
                $echo["status"] = 0;
                $echo["error"] = "ไม่สามารถบันทึกได้";
            }
        }else{
            $echo["status"] = 0;
            $echo["error"] = "ไม่พบข้อมูลสินค้า";
        }
        echo json_encode($echo);
    }

    $database_obj->closs_sql();









//             function recommendProducts($user_id, $num_recommendations) {
//                 // ค้นหาเรทติ้งของผู้ใช้
//                 $user_ratings = array();
//                 $query = "SELECT pd_id, rating FROM Rating WHERE user_id = " . $user_id;
//                 $result = mysqli_query($connection, $query);
//                 while ($row = mysqli_fetch_assoc($result)) {
//                   $user_ratings[$row['pd_id']] = $row['rating'];
//                 }
              
//                 // คำนวณ cosine similarity
//                 $similarities = array();
//                 $query = "SELECT user_id, pd_id, rating FROM Rating WHERE user_id <> " . $user_id;
//                 $result = mysqli_query($connection, $query);
//                 while ($row = mysqli_fetch_assoc($result)) {
//                   $other_user_id = $row['user_id'];
//                   $pd_id = $row['pd_id'];
//                   $rating = $row['rating'];
//                   if (!isset($similarities[$other_user_id])) {
//                     $similarities[$other_user_id] = array();
//                   }
//                   if (!isset($similarities[$other_user_id][$user_id])) {
//                     $similarities[$other_user_id][$user_id] = 0;
//                   }
//                   $similarities[$other_user_id][$user_id] += $user_ratings[$pd_id] * $rating;
//                 }
              
//                 // คำนวณค่าความคล้ายคลึง
//                 $similarities_with_scores = array();
//                 foreach ($similarities as $other_user_id => $similarity) {
//                   $other_user_ratings = array();
//                   $query = "SELECT pd_id, rating FROM Rating WHERE user_id = " . $other_user_id;
//                   $result = mysqli_query($connection, $query);
//                   while ($row = mysqli_fetch_assoc($result)) {
//                     $other_user_ratings[$row['pd_id']] = $row['rating'];
//                   }
//                   // คำนวณค่าความคล้ายคลึงต่อคะแนนเรทติ้งที่ตัวเองยังไม่ได้ให้คะแนน
// foreach ($other_user_ratings as $pd_id => $rating) {
//     if (!isset($user_ratings[$pd_id])) {
//     continue;
//     }
//     if (!isset($similarities_with_scores[$other_user_id])) {
//     $similarities_with_scores[$other_user_id] = array(
//     'user_id' => $other_user_id,
//     'score' => 0,
//     );
//     }
//     $similarities_with_scores[$other_user_id]['score'] += $rating * $user_ratings[$pd_id] * $similarities[$other_user_id][$user_id];
//     }
//     }
    
//     // จัดเรียงความคล้ายคลึงจากมากไปน้อย
//     usort($similarities_with_scores, function($a, $b) {
//     return $b['score'] - $a['score'];
//     });
    
//     // สร้างรายการแนะนำสินค้า
//     $recommendations = array();
//     foreach ($similarities_with_scores as $similar_user) {
//     $query = "SELECT pd_id, rating FROM Rating WHERE user_id = " . $similar_user['user_id'];
//     $result = mysqli_query($connection, $query);
//     while ($row = mysqli_fetch_assoc($result)) {
//     $pd_id = $row['pd_id'];
//     if (!isset($user_ratings[$pd_id]) || $user_ratings[$pd_id] == 0) {
//     if (!isset($recommendations[$pd_id])) {
//     $recommendations[$pd_id] = 0;
//     }
//     $recommendations[$pd_id] += $row['rating'] * $similar_user['score'];
//     }
//     }
//     }
    
//     // จัดเรียงรายการแนะนำสินค้าตามคะแนน
//     arsort($recommendations);
    
//     // คืนค่ารายการแนะนำสินค้า n รายการแรก
//     return array_slice($recommendations, 0, $num_recommendations);
//     }










?>