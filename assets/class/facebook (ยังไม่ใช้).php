<?php

use Kreait\Firebase\Factory;
use Kreait\Firebase\Exception\Auth\FailedToVerifyToken;
use Kreait\Firebase\Messaging\CloudMessage;

use Google\Client;
use Google\Cloud\Translate\V2\TranslateClient;

class facebook
{
    public $page_id = null;
    //   function get_token_page($page_id)
//   {
//     global $conn_main;
//     $get_token = getSql("SELECT * FROM `fb_page_token` WHERE `page_id` = '" . $page_id . "' AND token_status = 1 AND token_access_token != '' ORDER BY `token_order` ASC, token_update DESC", $conn_main);
//     $data_token = null;
//     foreach ($get_token["data"] as $token) {

    //     }
//     return $data_token;
//   }

    function fb_post_data($command, $data = null, $token_id = null)
    {
        global $conn_main;
        if (is_null($this->page_id)) {
            global $page_id;
        } else {
            $page_id = $this->page_id;
        }
        $url = 'https://graph.facebook.com/v17.0/' . $command;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        if (!is_null($data)) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $result_curl = json_decode(curl_exec($ch), true);
        curl_close($ch);

        if (isset($result_curl["error"])) {
            $error = $result_curl["error"];
            $error_message = mysqli_real_escape_string($conn_main, $result_curl["error"]["message"]);
            //   $sql_error = "INSERT INTO fb_error_log (error_date, error_message, error_code, error_type, page_id, error_command) VALUES (now(),'" . $error_message . "','" . $error["code"] . "','" . $error["type"] . "','" . $page_id . "','" . $command . "')";
            //   updateSql($sql_error, $conn_main, 0);


            if ($error["code"] == "190") {
                // updateSql("UPDATE `fb_page_token` SET `token_status` = 0 WHERE `token_id` = " . $token_id . "  limit 1", $conn_main);
                // if ($fh = fopen('txt/' . time() . '_' . uniqid() . '_token.txt', 'w')) {
                //   $stringData = json_encode($error);
                //   fwrite($fh, $stringData);
                //   fclose($fh);
                // }

                // $get_owner = getSql("SELECT `user_linetoken` FROM `tb_user` WHERE `user_id` = " . $page["user_id"] . " LIMIT 1", $conn_main);
                // $_owner = $get_owner["data"][0];
                // if (!is_null($_owner["user_linetoken"]) && $_owner["user_linetoken"] != '') {
                //     $message = "\nTeleChat";
                //     $message .= "\nเพจ : " . $page["page_name"];
                //     $message .= "\nปัญหา : ไม่สามารถเชื่อมต่อ Facebook ได้";
                //     $message .= "\nวิธีแก้ไข ";
                //     $message .= "\n1. เข้าเมนู Telechat จากนั้นคลิกที่ เครดิต";
                //     $message .= "\n2. คลิก ยกเลิกการเชื่อมต่อ เพจที่ไม่สามารถทำงานได้";
                //     $message .= "\n3. คลิก เชื่อมต่อเพจ เพื่อเปิดการทำงานอีกครั้ง";
                //     line_notify($_owner["user_linetoken"], $message);

                // }
            }
        }
        $return["data"] = $result_curl;
        return $return;
    }

    function fb_get_data($command, $token_id = null)
    {
        global $conn_main;
        if (is_null($this->page_id)) {
            global $page_id;
        } else {
            $page_id = $this->page_id;
        }
        $url = 'https://graph.facebook.com/v17.0/' . $command;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $str_result = curl_exec($ch);
        $result_curl = json_decode($str_result, true);
        curl_close($ch);


        if (isset($result_curl["error"])) {
            if (isset($page_id) && !is_null($page_id)) {
                // $get_page = getSql("SELECT * FROM `fb_list_page` WHERE `page_id` = '" . $page_id . "' LIMIT 1", $conn_main);
                // $page = $get_page["data"][0];

                $error = $result_curl["error"];
                $error_message = mysqli_real_escape_string($conn_main, $result_curl["error"]["message"]);
                // $sql_error = "INSERT INTO fb_error_log (error_date, error_message, error_code, error_type, page_id, error_command) VALUES (now(),'" . $error_message . "','" . $error["code"] . "','" . $error["type"] . "','" . $page_id . "','" . $command . "')";
                // updateSql($sql_error, $conn_main, 0);
                // $get_admin = getSql("SELECT `st_value_str` FROM `setting` WHERE `st_system` = 'notify' AND `st_name` = 'telechat' AND `comp_id` = 1", $conn_main);
                // $admin = $get_admin["data"][0];
                // $message = "\nFacebook Error";
                // $message .= "\nPageID : " . $page_id;
                // $message .= "\nTokenID : " . $token_id;
                // $message .= "\nเพจ : " . $page["page_name"];
                // $message .= "\nType : " . $error["type"];
                // $message .= "\nCode : " . $error["code"];
                // $message .= "\nMessage : " . $error["message"];
                // $message .= "\nCommand : " . $command;
                // if ($error["code"] != "100") {
                //     //line_notify($admin["st_value_str"], $message);
                // }

                // $get_owner = getSql("SELECT `user_linetoken` FROM `tb_user` WHERE `user_id` = " . $page["user_id"] . " LIMIT 1", $conn_main);
                // $_owner = $get_owner["data"][0];
                // if (!is_null($_owner["user_linetoken"]) && $_owner["user_linetoken"] != '' && $error["code"] == "190") {
                //     $message = "\nTeleChat";
                //     $message .= "\nเพจ : " . $page["page_name"];
                //     $message .= "\nปัญหา : ไม่สามารถเชื่อมต่อ Facebook ได้";
                //     $message .= "\nวิธีแก้ไข ";
                //     $message .= "\n1. เข้าเมนู Telechat จากนั้นคลิกที่ เครดิต";
                //     $message .= "\n2. คลิก ยกเลิกการเชื่อมต่อ เพจที่ไม่สามารถทำงานได้";
                //     $message .= "\n3. คลิก เชื่อมต่อเพจ เพื่อเปิดการทำงานอีกครั้ง";
                //     //line_notify($_owner["user_linetoken"], $message);
                // }

                if ($error["code"] == "190") {
                    // updateSql("UPDATE `fb_page_token` SET `token_status` = 0 WHERE `token_id` = " . $token_id . " limit 1", $conn_main);
                }
            }
        }
        $return["data"] = $result_curl;
        return $return;
    }

    function fb_delete_data($command)
    {
        global $page_id, $conn_main;
        $url = 'https://graph.facebook.com/v17.0/' . $command;
        // $data_string = json_encode($data);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $result = curl_exec($ch);
        $result_curl = json_decode($result, true);
        curl_close($ch);
        if (isset($result_curl["error"])) {
            // $sql_error = "INSERT INTO fb_error_log (error_date, error_message, error_code, error_type, page_id) VALUES (now(),'" . $result["error"]["message"] . "','" . $result_curl["code"] . "','" . $result_curl["type"] . "','" . $page_id . "')";
            // updateSql($sql_error, $conn_main, 0);
        }
        $return["data"] = $result_curl;
        return $return;
    }

    // function create_log_file($stringData, $pre_fit = "")
    // {
    //     $file_name = time() . '.txt';
    //     if ($pre_fit != "") {
    //         $file_name = $pre_fit . "_" . $file_name;
    //     }
    //     if ($fh = fopen('txt/' . $file_name, 'w')) {
    //         fwrite($fh, $stringData);
    //         fclose($fh);
    //     }
    // }

    // function fb_bot_chat($inbox_id)
    // {
    //     global $_site_images, $conn_main, $_path_storage;

    //     $get_inbox = getSql("SELECT * FROM `fb_inbox` WHERE `inbox_id` = " . $inbox_id . " LIMIT 1", $conn_main);
    //     $inbox = $get_inbox["data"][0];
    //     $result["inbox"] = $inbox;

    //     $get_page = getSql("SELECT * FROM fb_list_page WHERE page_id = '" . $inbox["page_id"] . "' AND page_status = 1 limit 1", $conn_main);

    //     $controler = new controler();


    //     if (is_null($get_page["data"])) {
    //         return false; // ข้ามไม่ทำงาน
    //     } else {

    //         $data_page = $get_page["data"][0];
    //         $this->page_id = $data_page["page_id"];

    //         $get_token = getSql("SELECT * FROM `fb_page_token` WHERE `page_id` = '" . $inbox["page_id"] . "' AND token_access_token != '' AND `token_status` = 1 ORDER BY `token_order` ASC, token_update DESC LIMIT 1", $conn_main);
    //         $data_token = $get_token["data"][0];

    //         $get_shop = getSql("SELECT * FROM `shop` WHERE `shop_id` = " . $data_page["shop_id"] . "  LIMIT 1", $conn_main);
    //         $data_shop = $get_shop["data"][0];

    //         $get_sender = getSql("SELECT * FROM `fb_list_member` WHERE `fm_user_id`  = '" . $inbox["inbox_sender"] . "'  LIMIT 1", $conn_main);
    //         $data_sender = $get_sender["data"][0];

    //         if ($inbox["inbox_attachments"] != "") {
    //             $inbox_attachments = json_decode($inbox["inbox_attachments"], true);
    //             $fb_file = $inbox_attachments[0]["payload"]["url"];
    //             // check slip
    //             $img_tmp = time() . '_' . $_SERVER["UNIQUE_ID"] . '.jpeg';
    //             file_put_contents($_path_storage . '/temp_upload/' . $img_tmp, file_get_contents($fb_file));

    //             $result_qr = $controler->scan_qr($_path_storage . "/temp_upload/" . $img_tmp);
    //             if ($result_qr != "") {
    //                 $result_qr = explode(":", $result_qr);
    //                 if (count($result_qr) > 1) {
    //                     $qr_code = $result_qr[1];
    //                 } else {
    //                     $qr_code = $result_qr[0];
    //                 }
    //             } else {
    //                 $qr_code = "";
    //             }

    //             if ($qr_code != "") {

    //                 $data_qr = $controler->extract_qr($qr_code);
    //                 if (!is_null($data_qr["transaction_ref"]) || $data_qr["transaction_ref"] != "" || !is_null($data_qr["sending_id"]) || $data_qr["sending_id"] != "") {
    //                     $scb = new scb();
    //                     $scb_token = $scb->token();
    //                     if ($scb_token["status"]["code"] == 1000) {
    //                         $token_data = $scb_token["data"];
    //                         $accessToken = $token_data["accessToken"];
    //                         $slip_verify = $scb->slip_verify($accessToken, $data_qr["transaction_ref"], $data_qr["sending_id"], $qr_code);
    //                         if ($slip_verify["status"]["code"] == 1000) {
    //                             $data_slip = $slip_verify["data"];
    //                             $amount = $data_slip["amount"];
    //                             $receiver_account = $data_slip["receiver"]["account"]["value"];
    //                             $receiver_name = $data_slip["receiver"]["displayName"];
    //                             $sender_name = $data_slip["sender"]["displayName"];
    //                             $transTime = $data_slip["transTime"];
    //                             $transferDateTime = substr($data_slip["transDate"], 0, 4) . "-" . substr($data_slip["transDate"], 4, 2) . "-" . substr($data_slip["transDate"], 6, 2) . " " . $transTime;

    //                             copy($_path_storage . '/temp_upload/' . $img_tmp, $_path_storage . '/facebook/attachments/' . $img_tmp);
    //                             unlink($_path_storage . "/temp_upload/" . $img_tmp);
    //                             $sql_image = "INSERT INTO `fb_image` SET `img_type` = 0, `fm_id` = " . $data_sender["fm_id"] . ", `shop_id` = " . $data_page["shop_id"] . ", `page_id` = '" . $data_page["page_id"] . "', `img_name` = '" . $img_tmp . "', `img_file` = '" . $img_tmp . "', `img_qrcode` = '" . $qr_code . "'";
    //                             $add_fb_image = updateSql($sql_image, $conn_main, 0);

    //                             updateSql("UPDATE `fb_list_member` SET `fm_slip` = 1 WHERE `fm_id` = " . $data_sender["fm_id"] . " LIMIT 1", $conn_main, 0);

    //                             //$auto_order = $controler->auto_pre_order($add_fb_image["id"], $data_page["shop_id"], $data_sender["fm_id"], $qr_code, $data_slip);
    //                             if (isset($auto_order["od_id"])) {
    //                                 updateSql("UPDATE `fb_image` SET `od_id` = " . $auto_order["od_id"] . " WHERE `img_id` = " . $add_fb_image["id"] . " LIMIT 1", $conn_main);
    //                             }
    //                             /*if($fh = fopen('txt/'.uniqid()."_".time().'_auto_order.txt','w')){
    //                               $stringData = json_encode($auto_order);
    //                               fwrite($fh, $stringData,2024);
    //                               fclose($fh);
    //                             }*/

    //                             $get_line_token = getSql("SELECT `st_value_str` FROM `setting` WHERE `st_system` = 'notify' AND `st_name` = 'fb_check_slip' LIMIT 1; ", $conn_main);
    //                             $line_token = $get_line_token["data"][0];


    //                             $message_notify = "\n ตรวจพบสลิป";
    //                             $message_notify .= "\nร้านค้า : " . $data_shop["shop_name"];
    //                             $message_notify .= "\nSHOP_ID : " . $data_shop["shop_id"];
    //                             $message_notify .= "\nเพจ : " . $data_page["page_name"];
    //                             $message_notify .= "\nFacebook : " . $data_sender["fm_user_name"];
    //                             if (isset($auto_order["od_code"])) {
    //                                 $message_notify .= "\nหมายเลขสั่งซื้อ : " . $auto_order["od_code"];
    //                             } else {
    //                                 $message_notify .= "\nหมายเลขสั่งซื้อ : -/";
    //                             }

    //                             line_notify($line_token["st_value_str"], $message_notify, $_site_images . "/facebook/attachments/" . $img_tmp);

    //                             if (!isset($auto_order["od_code"])) {
    //                                 $get_line_token = getSql("SELECT `st_value_str` FROM `setting` WHERE `st_system` = 'notify' AND `st_name` = 'slip_no_order' LIMIT 1; ", $conn_main);
    //                                 $line_token = $get_line_token["data"][0];
    //                                 $message_notify = "\n ไม่สามารถสร้างรายการสั่งซื้อได้";
    //                                 $message_notify .= "\nร้านค้า : " . $data_shop["shop_name"];
    //                                 $message_notify .= "\nเพจ : " . $data_page["page_name"];
    //                                 $message_notify .= "\nFacebook : " . $data_sender["fm_user_name"];
    //                                 line_notify($line_token["st_value_str"], $message_notify, $_site_images . "/facebook/attachments/" . $img_tmp);
    //                             }


    //                             $get_after = getSql("SELECT * FROM `answers` WHERE `answers_after_slip` = 1 AND `answers_status` = 1 AND `shop_id` = " . $data_shop['shop_id'] . " LIMIT 1", $conn_main);
    //                             //$result["get_after"] = $get_after;
    //                             if (isset($get_after["data"][0])) {
    //                                 $answers = $get_after["data"][0];
    //                                 $get_detail_answers = getSql("SELECT * FROM `answers_detail` WHERE `answers_id` = " . $answers["answers_id"] . " ORDER BY `detail_order` ASC ", $conn_main);
    //                                 //$result["get_detail_answers"] = $get_detail_answers;
    //                                 $recipient_array["id"] = $inbox["inbox_sender"];
    //                                 foreach ($get_detail_answers["data"] as $rs) {
    //                                     if ($rs["detail_type"] == 0) {
    //                                         $jsonData = null;
    //                                         $message_array["text"] = $rs["detail_text"];
    //                                         $jsonData["recipient"] = json_encode($recipient_array);
    //                                         $jsonData["message"] = json_encode($message_array);
    //                                         $jsonData["messaging_type"] = "RESPONSE";
    //                                         $result_post = $this->fb_post_data('me/messages?access_token=' . $data_token["token_access_token"], $jsonData, $data_token["token_id"]);
    //                                         $result["send"][] = $result_post;
    //                                     } else {
    //                                         $jsonDataImg = null;
    //                                         $payload["is_reusable"] = true;
    //                                         $payload["url"] = $_site_images . "/facebook/answers/" . $rs["shop_id"] . "/" . $rs["detail_file"];
    //                                         $attachment["type"] = "image";
    //                                         $attachment["payload"] = $payload;
    //                                         $MessageArray["attachment"] = $attachment;
    //                                         $jsonDataImg["recipient"] = json_encode($recipient_array);
    //                                         $jsonDataImg["message"] = json_encode($MessageArray);
    //                                         $jsonDataImg["messaging_type"] = "RESPONSE";
    //                                         $result_post = $this->fb_post_data('me/messages?access_token=' . $data_token["token_access_token"], $jsonDataImg, $data_token["token_id"]);
    //                                         $result["send"][] = $result_post;
    //                                     }
    //                                 }
    //                             }
    //                         }
    //                     }
    //                 }
    //             } else {
    //                 copy($_path_storage . '/temp_upload/' . $img_tmp, $_path_storage . '/facebook/attachments/' . $img_tmp);
    //                 unlink($_path_storage . "/temp_upload/" . $img_tmp);
    //                 $sql_image = "INSERT INTO `fb_image` SET `img_type` = 2, `fm_id` = " . $data_sender["fm_id"] . ", `shop_id` = " . $data_page["shop_id"] . ", `page_id` = '" . $data_page["page_id"] . "', `img_name` = '" . $img_tmp . "', `img_file` = '" . $img_tmp . "', `img_qrcode` = '" . $qr_code . "'";
    //                 $add_fb_image = updateSql($sql_image, $conn_main, 0);
    //             }
    //         } else {
    //             // check bot

    //             // $translate = new TranslateClient(['key' => 'AIzaSyCtWz-r1dweiIljKTnjJ65FrR4qtTYM4_0']);
    //             // if($fh = fopen('txt/'.uniqid()."_".time().'.txt','w')){
    //             //   $stringData = json_encode($translate->connection);
    //             //   fwrite($fh, $stringData);
    //             //   fclose($fh);
    //             // }

    //             // if(is_null($data_sender["fm_country"]) || $data_sender["fm_country"] != 'th'){
    //             //   $get_old = getSql("SELECT * FROM `translated` WHERE `text_origin` = '".$inbox["inbox_text"]."' AND lang_translated = 'th' LIMIT 1", $conn_main);
    //             //   if(is_null($get_old["data"])){
    //             //     $text_input[] = $inbox["inbox_text"];
    //             //     $response_translate = $translate->translateBatch($text_input, ['target' => 'th']);
    //             //     $LanguageCode = $response_translate[0]["source"];
    //             //     updateSql("UPDATE `fb_list_member` SET `fm_country` = '".$LanguageCode."' WHERE `fm_id` = ".$data_sender["fm_id"]." LIMIT 1", $conn_main);
    //             //     if($LanguageCode != 'th'){
    //             //       updateSql("INSERT INTO `translated` SET `text_origin` = '".$inbox["inbox_text"]."', `text_translated` = '".$response_translate[0]["text"]."', `lang_origin` = '".$LanguageCode."', `lang_translated` = 'th'", $conn_main);
    //             //       $inbox["inbox_text"] = $response_translate[0]["text"];
    //             //       $inbox_text_th = mysqli_real_escape_string($conn_main, $inbox["inbox_text"]);
    //             //       updateSql("UPDATE `fb_inbox` SET `inbox_text_th` = '".$inbox_text_th."' WHERE `inbox_id` = ".$inbox["inbox_id"]." LIMIT 1", $conn_main);
    //             //     }else{
    //             //       updateSql("UPDATE `fb_inbox` SET `inbox_text_th` = inbox_text WHERE `inbox_id` = ".$inbox["inbox_id"]." LIMIT 1", $conn_main);
    //             //     }
    //             //   }else{
    //             //     $old_data = $get_old["data"][0];
    //             //     $inbox["inbox_text"] = $old_data["text_translated"];
    //             //     $LanguageCode = $old_data["lang_origin"];
    //             //     updateSql("UPDATE `fb_inbox` SET `inbox_text_th` = '".$inbox["inbox_text"]."' WHERE `inbox_id` = ".$inbox["inbox_id"]." LIMIT 1", $conn_main);
    //             //     updateSql("UPDATE `fb_list_member` SET `fm_country` = '".$LanguageCode."' WHERE `fm_id` = ".$data_sender["fm_id"]." LIMIT 1", $conn_main);
    //             //   }
    //             // }

    //             $sql_bot = "SELECT * FROM `bot` WHERE `bot_channel` = 0 AND bot_keyword != '' AND bot_status = 1 AND shop_id = " . $data_page["shop_id"] . " AND page_id = '" . $data_page["page_id"] . "' AND bot_host IS null";
    //             $get_bot = getSql($sql_bot, $conn_main);
    //             if (is_null($get_bot["data"])) {
    //                 $sql_bot = "SELECT * FROM `bot` WHERE `bot_channel` = 0 AND bot_keyword != '' AND bot_status = 1 AND shop_id = " . $data_page["shop_id"] . " AND  page_id IS NULL AND bot_host IS null";
    //                 $get_bot = getSql($sql_bot, $conn_main);
    //             }

    //             if ($data_page["shop_id"] == 59) {
    //                 // if ($fh = fopen('txt/' . time() . "_" . uniqid() . '.txt', 'w')) {
    //                 //   $stringData = json_encode($get_bot);
    //                 //   fwrite($fh, $stringData);
    //                 //   fclose($fh);
    //                 // }
    //             }

    //             if (is_null($get_bot["data"])) {
    //                 // ไม่เจอบอท
    //                 // return false;
    //             } else {

    //                 // if ($data_page["shop_id"] == 59) {
    //                 // if ($fh = fopen('txt/' . time() . "_" . uniqid() . '.txt', 'w')) {
    //                 //   $stringData = json_encode($get_bot);
    //                 //   fwrite($fh, $stringData);
    //                 //   fclose($fh);
    //                 // }
    //                 // }

    //                 $data_bot = null;
    //                 do {
    //                     $result_bot = $get_bot["data"];
    //                     $bot_id = null;
    //                     foreach ($result_bot as $bot) {

    //                         if (!is_null($bot["bot_not_included"])) {
    //                             if ($bot["bot_not_included"] != "") {
    //                                 $bot_not_included = explode(",", $bot["bot_not_included"]);
    //                                 $skip = 0;
    //                                 foreach ($bot_not_included as $str) {
    //                                     $str = trim($str);
    //                                     if (stristr($inbox["inbox_text"], $str)) {
    //                                         // skip
    //                                         $skip = 1;
    //                                         continue;
    //                                     }
    //                                 }

    //                                 if ($skip == 1) {
    //                                     continue;
    //                                 }
    //                             }
    //                         }


    //                         $bot_keyword = explode(",", $bot["bot_keyword"]);
    //                         foreach ($bot_keyword as $str) {
    //                             $str = trim($str);
    //                             if (stristr($inbox["inbox_text"], $str)) {
    //                                 $bot_id = $bot["bot_id"];
    //                                 $data_bot = $bot;
    //                                 break;
    //                             }
    //                         }
    //                         if (!is_null($data_bot)) {
    //                             $get_old = getSql("SELECT * FROM `fb_inbox` PARTITION (path_current) WHERE `bot_id` = " . $data_bot["bot_id"] . " AND `inbox_sender` = '" . $inbox["inbox_sender"] . "' ORDER BY `inbox_id` DESC LIMIT 1", $conn_main);
    //                             if (!is_null($get_old["data"])) {
    //                                 $last_reply = $get_old["data"][0];
    //                                 $to_time = time();
    //                                 $from_time = strtotime($last_reply["inbox_date_create"]);
    //                                 $minutes = round(($to_time - $from_time) / 60, 2);

    //                                 $result["minutes"] = $minutes;
    //                                 $result["last_reply"] = $last_reply;

    //                                 if (is_null($data_bot["bot_delay"])) {
    //                                     //return false;
    //                                     $bot_id = null;
    //                                 } else if ($minutes < $data_bot["bot_delay"]) {
    //                                     //return false;
    //                                     $bot_id = null;
    //                                 }
    //                             }
    //                         }
    //                     }
    //                     $sql_bot = "SELECT * FROM FROM `bot` WHERE `bot_channel` = 0 AND bot_keyword != '' AND bot_status = 1 AND page_id = '" . $data_page["page_id"] . "'  AND bot_host = " . $bot_id . " ";
    //                     $get_bot = getSql($sql_bot, $conn_main);
    //                     if (is_null($get_bot["data"])) {
    //                         $sql_bot = "SELECT * FROM `bot` WHERE `bot_channel` = 0 AND bot_keyword != '' AND bot_status = 1 AND page_id IS NULL AND bot_host = " . $bot_id . " ";
    //                         $get_bot = getSql($sql_bot, $conn_main);
    //                     }
    //                 } while (!is_null($get_bot["data"]));

    //                 if ($data_page["shop_id"] == 59) {
    //                     // if ($fh = fopen('txt/' . time() . "_" . uniqid() . '.txt', 'w')) {
    //                     //   $stringData = json_encode($data_bot);
    //                     //   fwrite($fh, $stringData);
    //                     //   fclose($fh);
    //                     // }
    //                 }

    //                 $result["bot"] = $data_bot;


    //                 if (!is_null($data_bot)) {

    //                     $recipient_array["id"] = $inbox["inbox_sender"];

    //                     $get_old = getSql("SELECT * FROM `fb_inbox` PARTITION (path_current) WHERE `bot_id` = " . $data_bot["bot_id"] . " AND `inbox_sender` = '" . $inbox["inbox_sender"] . "' ORDER BY `inbox_id` DESC LIMIT 1", $conn_main);
    //                     if (!is_null($get_old["data"])) {
    //                         $last_reply = $get_old["data"][0];
    //                         $to_time = time();
    //                         $from_time = strtotime($last_reply["inbox_date_create"]);
    //                         $minutes = round(($to_time - $from_time) / 60, 2);

    //                         $result["minutes"] = $minutes;
    //                         $result["last_reply"] = $last_reply;

    //                         if (is_null($data_bot["bot_delay"])) {
    //                             return false;
    //                         } else if ($minutes < $data_bot["bot_delay"]) {
    //                             return false;
    //                         }
    //                     }

    //                     $get_reply = getSql("SELECT * FROM `bot_reply` WHERE `bot_id` = " . $data_bot["bot_id"] . " AND `reply_type` = 0 ORDER BY `reply_sort` ASC", $conn_main);
    //                     $result["get_reply"] = $get_reply;
    //                     if (!is_null($get_reply["data"])) {
    //                         updateSql("UPDATE `fb_inbox` SET `bot_id` = " . $data_bot["bot_id"] . " WHERE `inbox_id` = " . $inbox["inbox_id"] . " LIMIT 1", $conn_main, 0);

    //                         // if ($data_page["shop_id"] == 59) {
    //                         //   if ($fh = fopen('txt/' . time() . "_" . uniqid() . '.txt', 'w')) {
    //                         //     $stringData = json_encode($get_reply);
    //                         //     fwrite($fh, $stringData);
    //                         //     fclose($fh);
    //                         //   }
    //                         // }

    //                         foreach ($get_reply["data"] as $reply) {

    //                             if (!is_null($reply["reply_delay"])) {
    //                                 if ($reply["reply_delay"] > 0) {
    //                                     sleep($reply["reply_delay"]);
    //                                 }
    //                             }

    //                             if ($reply["reply_text"] != "" && !is_null($reply["reply_text"])) {

    //                                 $reply_text = $reply["reply_text"];

    //                                 // if($LanguageCode != 'th'){
    //                                 //   $get_old = getSql("SELECT * FROM `translated` WHERE `text_origin` = '".$reply_text."' AND lang_translated = '".$LanguageCode."' LIMIT 1", $conn_main);
    //                                 //   if(is_null($get_old["data"])){
    //                                 //     $text_input[] = $reply_text;
    //                                 //     $response_translate = $translate->translateBatch($text_input, ['target' => $LanguageCode]);
    //                                 //     updateSql("INSERT INTO `translated` SET `text_origin` = '".$reply_text."', `text_translated` = '".$response_translate[0]["text"]."', `lang_origin` = 'th', `lang_translated` = '".$LanguageCode."'", $conn_main);
    //                                 //     $reply_text = $response_translate[0]["text"];
    //                                 //   }else{
    //                                 //     $old_data = $get_old["data"][0];
    //                                 //     $reply_text = $old_data["text_translated"];
    //                                 //   }
    //                                 // }

    //                                 // if($fh = fopen('txt/'.uniqid()."_".time().'.txt','w')){
    //                                 //   $stringData = json_encode($reply);
    //                                 //   fwrite($fh, $stringData);
    //                                 //   fclose($fh);
    //                                 // }

    //                                 $jsonData = null;
    //                                 $message_array["text"] = $reply_text;
    //                                 $jsonData["recipient"] = json_encode($recipient_array);
    //                                 $jsonData["message"] = json_encode($message_array);
    //                                 $jsonData["messaging_type"] = "RESPONSE";

    //                                 if ($data_page["shop_id"] == 59) {
    //                                     // if ($fh = fopen('txt/' . time() . "_" . uniqid() . '.txt', 'w')) {
    //                                     //   $stringData = json_encode($jsonData);
    //                                     //   fwrite($fh, $stringData);
    //                                     //   fclose($fh);
    //                                     // }
    //                                 }

    //                                 $result_post = $this->fb_post_data('me/messages?access_token=' . $data_token["token_access_token"], $jsonData, $data_token["token_id"]);
    //                                 if ($data_page["shop_id"] == 59) {
    //                                     // if ($fh = fopen('txt/' . time() . "_" . uniqid() . '.txt', 'w')) {
    //                                     //   $stringData = json_encode($result_post);
    //                                     //   fwrite($fh, $stringData);
    //                                     //   fclose($fh);
    //                                     // }
    //                                 }
    //                                 $result_reply[] = $result_post;
    //                             }
    //                             if ($reply["reply_image"] != "" && !is_null($reply["reply_image"])) {
    //                                 $jsonDataImg = null;
    //                                 $payload["is_reusable"] = true;
    //                                 $payload["url"] = $_site_images . "/facebook/message/" . $reply["reply_image"];
    //                                 $attachment["type"] = "image";
    //                                 $attachment["payload"] = $payload;
    //                                 $MessageArray["attachment"] = $attachment;
    //                                 $jsonDataImg["recipient"] = json_encode($recipient_array);
    //                                 $jsonDataImg["message"] = json_encode($MessageArray);
    //                                 $jsonDataImg["messaging_type"] = "RESPONSE";
    //                                 $result_post = $this->fb_post_data('me/messages?access_token=' . $data_token["token_access_token"], $jsonDataImg, $data_token["token_id"]);
    //                                 $result_reply[] = $jsonDataImg;
    //                             }
    //                         }
    //                         $result["reply"] = $result_reply;
    //                     }
    //                 }
    //             }

    //             // detect phone number
    //             if (isset($inbox["inbox_text"]) && $inbox["inbox_text"] != '') {

    //                 $controler = new controler();
    //                 $detect_phone = $controler->filter_phone($inbox["inbox_text"]);



    //                 if ($detect_phone != '') {


    //                     if ($data_page["shop_id"] == 5) {
    //                         $get_line_token = getSql("SELECT `st_value_str` FROM `setting` WHERE `st_system` = 'notify' AND `st_name` = 'phone_detect_adsshortcut' LIMIT 1; ", $conn_main);
    //                         $line_token = $get_line_token["data"][0];
    //                     } else {
    //                         $get_line_token = getSql("SELECT `st_value_str` FROM `setting` WHERE `st_system` = 'notify' AND `st_name` = 'phone_detect' LIMIT 1; ", $conn_main);
    //                         $line_token = $get_line_token["data"][0];
    //                     }

    //                     if ($data_page["page_telesale"] == 1) {

    //                         $get_saler = getSql("SELECT * FROM `tb_user` WHERE `user_id` = " . $data_sender["owner_id"] . " LIMIT 1", $conn_main);
    //                         $_saler = $get_saler["data"][0];

    //                         $detect_phone = str_replace(" ", "", $detect_phone);
    //                         $detect_phone = str_replace("-", "", $detect_phone);
    //                         $detect_phone = substr($detect_phone, 0, 3) . "-" . substr($detect_phone, 3);
    //                         $message_notify = "\n ลูกค้าแจ้งเบอรโทรศัพท์";
    //                         $message_notify .= "\nร้านค้า : " . $data_shop["shop_name"];
    //                         $message_notify .= "\nเพจ : " . $data_page["page_name"];
    //                         $message_notify .= "\nFacebook : " . $data_sender["fm_user_name"];
    //                         $message_notify .= "\nพนักงาน : " . $_saler["user_name"];
    //                         $message_notify .= "\nหมายเลขโทรศัพท์ : " . $detect_phone;
    //                         line_notify($line_token["st_value_str"], $message_notify);
    //                         if (!is_null($_saler["user_linetoken"])) {
    //                             line_notify($_saler["user_linetoken"], $message_notify);
    //                         }
    //                     } else {
    //                         $detect_phone = str_replace(" ", "", $detect_phone);
    //                         $detect_phone = str_replace("-", "", $detect_phone);
    //                         $detect_phone = substr($detect_phone, 0, 3) . "-" . substr($detect_phone, 3);
    //                         $message_notify = "\n ลูกค้าแจ้งเบอรโทรศัพท์";
    //                         $message_notify .= "\nร้านค้า : " . $data_shop["shop_name"];
    //                         $message_notify .= "\nเพจ : " . $data_page["page_name"];
    //                         $message_notify .= "\nFacebook : " . $data_sender["fm_user_name"];
    //                         $message_notify .= "\nหมายเลขโทรศัพท์ : " . $detect_phone;
    //                         line_notify($line_token["st_value_str"], $message_notify);
    //                     }
    //                 }
    //             }
    //         }
    //     }

    //     return $result;
    // }

    // function fb_bot_comment($fcm_id)
    // {
    //     global $_site_images, $conn_main, $_home_path;

    //     $get_comment = getSql("SELECT * FROM `fb_list_comment` WHERE `fcm_id` = " . $fcm_id . " LIMIT 1", $conn_main);
    //     $comment = $get_comment["data"][0];

    //     $get_page = getSql("SELECT * FROM fb_list_page WHERE page_id = '" . $comment["page_id"] . "' AND page_status = 1 limit 1", $conn_main);
    //     if (is_null($get_page["data"])) {
    //         return false; // ข้ามไม่ทำงาน
    //     } else {

    //         $data_page = $get_page["data"][0];
    //         $this->page_id = $data_page["page_id"];

    //         $get_shop = getSql("SELECT * FROM `shop` WHERE `shop_id` = " . $data_page["shop_id"] . " LIMIT 1", $conn_main);
    //         $data_shop = $get_shop["data"][0];

    //         $this->page_id = $data_page["page_id"];

    //         $get_token = getSql("SELECT * FROM `fb_page_token` WHERE `page_id` = '" . $comment["page_id"] . "' AND `token_status` = 1  AND token_access_token != '' ORDER BY `token_order` ASC, token_update DESC LIMIT 1", $conn_main);
    //         $data_token = $get_token["data"][0];

    //         $danger_words[] = "http";
    //         $danger_words[] = "www";
    //         $danger_words[] = "หลอก";
    //         $danger_words[] = "โกง";
    //         $danger_words[] = "เงินกู้";
    //         $danger_words[] = "มิจฉาชีพ";
    //         $danger_words[] = "ค.ว.ย";
    //         $danger_words[] = "ควย";
    //         $danger_words[] = "ทุจริต";
    //         $danger_words[] = "ระวัง";
    //         $danger_words[] = "0992969353";
    //         foreach ($danger_words as $keyword) {
    //             if (stristr($comment["fcm_comment_text"], $keyword) || $comment["fcm_sender_name"] == 'Maneerats Sinsukwiwat') {
    //                 updateSql("UPDATE fb_list_comment SET fcm_reply_status = 2, fcm_reply_date = now() WHERE fcm_id = " . $fcm_id . " LIMIT 1", $conn_main);
    //                 $command = $comment["fcm_comment_id"] . "?is_hidden=true&access_token=" . $data_token["token_access_token"];
    //                 $this->fb_post_data($command, null, $data_token["token_id"]);

    //                 $command = "me/blocked/" . $comment["fcm_sender_id"] . "/?access_token=" . $data_token["token_access_token"];
    //                 $this->fb_post_data($command, null, $data_token["token_id"]);
    //                 $jsonData = null;

    //                 return false;
    //             }
    //         }

    //         // Start CF
    //         $get_cf = getSql("SELECT * FROM `fb_list_keyword` WHERE `page_id` = '" . $data_page["page_id"] . "' AND fbkw_status = 1", $conn_main);
    //         if (!is_null($get_cf["data"])) {
    //             $cf = null;
    //             foreach ($get_cf["data"] as $row) {
    //                 $cf_keyword = explode(",", $row['keyword_value']);
    //                 foreach ($cf_keyword as $str) {
    //                     $str = trim($str);
    //                     if (stristr($comment["fcm_comment_text"], $str)) {
    //                         $cf = $row;
    //                         $data_bot = $row;
    //                         break;
    //                     }
    //                 }
    //             }

    //             if (!is_null($cf)) {
    //                 $message_array["text"] = "ขอบคุณที่สนใจค่ะ";
    //                 $recipient_array["comment_id"] = $comment["fcm_comment_id"];
    //                 $jsonData["recipient"] = json_encode($recipient_array);
    //                 $jsonData["message"] = json_encode($message_array);
    //                 $result_post = $this->fb_post_data('me/messages?access_token=' . $data_token["token_access_token"], $jsonData, $data_token["token_id"]);

    //                 include_once ($_home_path . '/main/assets/class/facebook/create_cf_order.php');
    //                 return true;
    //             }
    //         }
    //         // End CF

    //         // $sql_bot = "SELECT * FROM fb_comment_reply WHERE shop_id = " . $data_page["shop_id"] . " AND cr_host IS null AND page_id = '" . $data_page["page_id"] . "'  ORDER BY `cr_keyword` DESC";
    //         // $get_bot = getSql($sql_bot, $conn_main);
    //         // if (is_null($get_bot["data"])) {
    //         //   $sql_bot = "SELECT * FROM fb_comment_reply WHERE shop_id = " . $data_page["shop_id"] . " AND cr_host IS null AND page_id IS NULL ORDER BY `cr_keyword` DESC";
    //         //   $get_bot = getSql($sql_bot, $conn_main);
    //         // }


    //         $sql_bot = "SELECT * FROM `bot` WHERE `bot_channel` = 1 AND bot_status = 1 AND shop_id = " . $data_page["shop_id"] . " AND page_id = '" . $data_page["page_id"] . "' AND bot_host IS null";
    //         $get_bot = getSql($sql_bot, $conn_main);
    //         if (is_null($get_bot["data"])) {
    //             $sql_bot = "SELECT * FROM `bot` WHERE `bot_channel` = 1 AND bot_status = 1 AND shop_id = " . $data_page["shop_id"] . " AND  page_id IS NULL AND bot_host IS null";
    //             $get_bot = getSql($sql_bot, $conn_main);
    //         }

    //         // if ($fh = fopen('txt/' . time() . "_" . uniqid() . '.txt', 'w')) {
    //         //   $stringData = json_encode($get_bot);
    //         //   fwrite($fh, $stringData);
    //         //   fclose($fh);
    //         // }

    //         if (is_null($get_bot["data"])) {
    //             // ไม่เจอบอท
    //             return false;
    //         } else {

    //             $data_bot = null;
    //             do {
    //                 $result_bot = $get_bot["data"];
    //                 $cr_id = null;
    //                 foreach ($result_bot as $bot) {

    //                     if (!is_null($bot["bot_not_included"])) {
    //                         if ($bot["bot_not_included"] != "") {
    //                             $bot_not_included = explode(",", $bot["bot_not_included"]);
    //                             $skip = 0;
    //                             foreach ($bot_not_included as $str) {
    //                                 $str = trim($str);
    //                                 if (stristr($comment["fcm_comment_text"], $str)) {
    //                                     // skip
    //                                     $skip = 1;
    //                                     continue;
    //                                 }
    //                             }
    //                         }
    //                     }

    //                     if ($skip == 1) {
    //                         continue;
    //                     }

    //                     $bot_keyword = explode(",", $bot["bot_keyword"]);
    //                     if ($bot["bot_keyword"] == '*') {
    //                         $bot_id = $bot["bot_id"];
    //                         $data_bot = $bot;
    //                         break;
    //                     }
    //                     foreach ($bot_keyword as $str) {
    //                         $str = trim($str);
    //                         if (stristr($comment["fcm_comment_text"], $str)) {
    //                             $bot_id = $bot["bot_id"];
    //                             $data_bot = $bot;
    //                             break;
    //                         }
    //                     }
    //                 }
    //                 $sql_bot = "SELECT * FROM bot WHERE bot_host = " . $bot_id . " AND bot_host IS NOT null AND page_id = '" . $data_page["page_id"] . "'  ORDER BY `bot_keyword` DESC";
    //                 $get_bot = getSql($sql_bot, $conn_main);
    //                 if (is_null($get_bot["data"])) {
    //                     $sql_bot = "SELECT * FROM bot WHERE bot_host = " . $bot_id . " AND bot_host IS NOT null AND page_id IS NULL ORDER BY `bot_keyword` DESC";
    //                     $get_bot = getSql($sql_bot, $conn_main);
    //                 }
    //             } while (!is_null($get_bot["data"]));

    //             // if ($fh = fopen('txt/' . time() . "_" . uniqid() . '.txt', 'w')) {
    //             //   $stringData = json_encode($data_bot);
    //             //   fwrite($fh, $stringData);
    //             //   fclose($fh);
    //             // }


    //             if (!is_null($data_bot)) {

    //                 // reply by bot
    //                 updateSql("UPDATE fb_list_comment SET fcm_reply_status = 1, fcm_reply_date = now(),bot_id=" . $data_bot["bot_id"] . " WHERE fcm_id = " . $fcm_id . " LIMIT 1", $conn_main, 0);


    //                 $get_reply_comment = getSql("SELECT * FROM `bot_reply` WHERE `bot_id` = " . $data_bot["bot_id"] . " AND reply_type = 2 ORDER BY `reply_sort` ASC", $conn_main);
    //                 if (!is_null($get_reply_comment["data"])) {
    //                     if (($comment["fcm_post_id"] == $comment["fcm_parent_id"]) || ($comment["page_id"] != $comment["fcm_parent_id"] && $data_bot["bot_condition_sub"] == 0)) {
    //                         foreach ($get_reply_comment["data"] as $reply) {
    //                             $jsonData = null;
    //                             $command = $comment["fcm_comment_id"] . '/comments?access_token=' . $data_token["token_access_token"];
    //                             if (!is_null($reply["reply_text"])) {
    //                                 $jsonData["message"] = $reply["reply_text"];
    //                             } else {
    //                                 $jsonData["attachment_url"] = $_site_images . "/facebook/comment/" . $reply["reply_image"];
    //                             }
    //                             $result_post = $this->fb_post_data($command, $jsonData, $data_token["token_id"]);
    //                             unset($jsonData);
    //                             unset($command);
    //                         }
    //                     }
    //                 }

    //                 if ($data_bot["bot_condition_like"] == 1) {
    //                     $this->fb_post_data($comment["fcm_comment_id"] . '/likes?access_token=' . $data_token["token_access_token"], null, $data_token["token_id"]);
    //                 }

    //                 if ($data_bot["bot_condition_hide"] == 1) {
    //                     $jsonData["is_hidden"] = true;
    //                     $command = $comment["fcm_comment_id"] . "?is_hidden=true&access_token=" . $data_token["token_access_token"];
    //                     $this->fb_post_data($command, null, $data_token["token_id"]);

    //                     $command = "me/blocked/" . $comment["fcm_sender_id"] . "/?access_token=" . $data_token["token_access_token"];
    //                     $this->fb_post_data($command, null, $data_token["token_id"]);
    //                     $jsonData = null;
    //                 }

    //                 $get_reply_inbox = getSql("SELECT * FROM `bot_reply` WHERE `bot_id` = " . $data_bot["bot_id"] . " AND reply_type = 3 AND reply_text IS NOT NULL ORDER BY `reply_sort` ASC LIMIT 1", $conn_main);
    //                 if (!is_null($get_reply_inbox["data"])) {
    //                     $reply_inbox = $get_reply_inbox["data"][0];
    //                     $message_array["text"] = $reply_inbox["reply_text"];
    //                     $recipient_array["comment_id"] = $comment["fcm_comment_id"];
    //                     $jsonData["recipient"] = json_encode($recipient_array);
    //                     $jsonData["message"] = json_encode($message_array);
    //                     $result_post = $this->fb_post_data('me/messages?access_token=' . $data_token["token_access_token"], $jsonData, $data_token["token_id"]);

    //                     /*foreach ($get_reply_inbox["data"] as $reply) {
    //                       $recipient_array["comment_id"] = $comment["fcm_comment_id"];
    //                       if (!is_null($data_bot["reply_text"])) {
    //                         $message_array["text"] = $data_bot["reply_text"];
    //                       } else {
    //                         $payload["is_reusable"] = true;
    //                         $payload["url"] = $_site_images . "/facebook/message/" . $reply["reply_image"];
    //                         $attachment["type"] = "image";
    //                         $attachment["payload"] = $payload;
    //                         $message_array["attachment"] = $attachment;
    //                       }
    //                       $jsonData["recipient"] = json_encode($recipient_array);
    //                       $jsonData["message"] = json_encode($message_array);
    //                       $result_post = $this->fb_post_data('me/messages?access_token=' . $data_token["token_access_token"], $jsonData, $data_token["token_id"]);

    //                       if ($fh = fopen('txt/' . uniqid() . "_" . time() . '_reply2.txt', 'w')) {
    //                         $stringData = json_encode($result_post);
    //                         fwrite($fh, $stringData);
    //                         fclose($fh);
    //                       }
    //                     }*/

    //                     //if($fh = fopen('txt/'.uniqid()."_".time().'_reply2.txt','w')){
    //                     //$stringData = json_encode($result_post);
    //                     //fwrite($fh, $stringData,2024);
    //                     //fclose($fh);
    //                     //}

    //                     $get_user = $this->fb_get_data($comment["fcm_sender_id"] . "?access_token=" . $data_token["token_access_token"], $data_token["token_id"]);
    //                     $get_member = getSql("SELECT * FROM `fb_list_member` WHERE `page_id` = '" . $comment["page_id"] . "' AND `fm_user_id` = '" . $comment["fcm_sender_id"] . "' AND `fm_conv_key` != '' AND `fm_conv_key` IS NOT NULL LIMIT 1", $conn_main);

    //                     $data_user = $get_user["data"];
    //                     $member["fm_user_img"] = $data_user["profile_pic"];

    //                     // if($fh = fopen('txt/get_member_'.uniqid()."_".time().'.txt','w')){
    //                     //   $stringData = json_encode($get_user);
    //                     //   fwrite($fh, $stringData);
    //                     //   fclose($fh);
    //                     // }

    //                     if (is_null($get_member["data"])) {
    //                         $jsonData = null;
    //                         $command = "me/conversations?fields=senders,id&user_id=" . $comment["fcm_sender_id"] . "&limit=50&access_token=" . $data_token["token_access_token"];
    //                         $get_conv = $this->fb_get_data($command, $data_token["token_id"]);
    //                         $data_conv = $get_conv["data"];
    //                         //if($fh = fopen('txt/'.uniqid()."_".time().'_get_conv.txt','w')){
    //                         //$stringData = json_encode($data_conv);
    //                         //fwrite($fh, $stringData);
    //                         //fclose($fh);
    //                         //}

    //                         $fm_conv_key = null;
    //                         foreach ($data_conv["data"] as $conv) {
    //                             $conv_sender = $conv["senders"]["data"];
    //                             if ($conv_sender[0]["id"] == $comment["fcm_sender_id"] || $conv_sender[1]["id"] == $comment["fcm_sender_id"]) {
    //                                 $fm_conv_key = $conv["id"];
    //                                 break;
    //                             }
    //                         }

    //                         if ($fm_conv_key != null) {

    //                             $member["page_id"] = $comment["page_id"];
    //                             $member["fm_user_id"] = $comment["fcm_sender_id"];
    //                             $member["social_id"] = $comment["social_id"];
    //                             $member["fm_user_name"] = mysqli_real_escape_string($conn_main, $comment["fcm_sender_name"]);
    //                             $member["fm_conv_key"] = $fm_conv_key;
    //                             $member["last_message"] = "ลูกค้าใหม่จากคอมเมนท์";
    //                             $save_member = $this->save_member($member, 1);
    //                         }
    //                     } else {
    //                         $data_member = $get_member["data"][0];
    //                         $member["page_id"] = $comment["page_id"];
    //                         $member["fm_user_id"] = $comment["fcm_sender_id"];
    //                         $member["fm_user_name"] = $comment["fcm_sender_name"];
    //                         $member["social_id"] = $comment["social_id"];
    //                         $member["fm_conv_key"] = $data_member["fm_conv_key"];
    //                         $member["last_message"] = "ลูกค้าใหม่จากคอมเมนท์";
    //                         $save_member = $this->save_member($member, 1);
    //                     }
    //                     $this->update_chat($sender["id"], true, null);
    //                 }
    //             } // จบการทำงานบอทตอบใต้โพส

    //         }
    //     } // check page
    // } //fb_bot_comment
    // function update_chat($fm_user_id, $notify = true, $inbox_id = null, $inbox_mid = null)
    // {
    //     global $_site_images, $conn_main, $_path_storage, $_home_path;

    //     $get_member = getSql("SELECT * FROM `fb_list_member` WHERE `fm_user_id` = '" . $fm_user_id . "' LIMIT 1", $conn_main);
    //     $member = $get_member["data"][0];

    //     $get_conversation = getSql("SELECT * FROM `conversations` WHERE `fm_id` = " . $member["fm_id"] . " LIMIT 1", $conn_main);
    //     $data_conversations = $get_conversation["data"][0];

    //     $get_user = getsql("SELECT * FROM tb_user WHERE user_id = " . $member["owner_id"] . " LIMIT 1", $conn_main);
    //     $data_user = $get_user["data"][0];

    //     $get_page = getSql("SELECT * FROM `fb_list_page` WHERE `page_id` = '" . $member["page_id"] . "' LIMIT 1", $conn_main);
    //     $data_page = $get_page["data"][0];

    //     $get_shop = getSql("SELECT * FROM `shop` WHERE `shop_id` = " . $data_page["shop_id"] . " LIMIT 1", $conn_main);
    //     $data_shop = $get_shop["data"][0];

    //     if ($data_shop["shop_telechat"] != 1 || strtotime($data_shop["shop_start"]) > time()) {
    //         return false;
    //     }

    //     $get_token = getSql("SELECT * FROM `fb_page_token` WHERE `page_id` = '" . $member["page_id"] . "' AND `token_status` = 1  AND token_access_token != '' ORDER BY `token_order` ASC, token_update DESC LIMIT 1", $conn_main);
    //     $data_token = $get_token["data"][0];

    //     $tag_list = getSql("SELECT u.fm_user_id, t.tag_name, t.tag_color FROM `fb_tags_user` u LEFT JOIN `fb_tags` t ON u.tag_id=t.tag_id WHERE u.fm_user_id = '" . $member["fm_user_id"] . "' AND t.tag_status=1 ORDER BY t.tag_id ASC", $conn_main);

    //     if (!is_null($inbox_id)) {

    //         $get_inbox = getSql("SELECT * FROM `fb_inbox` WHERE `inbox_id` = " . $inbox_id . " LIMIT 1", $conn_main);
    //         $data_inbox = $get_inbox["data"][0];

    //         $jsonData = null;
    //         $command = $data_inbox["inbox_mid"] . "?fields=id,created_time,message,attachments,from,is_unsupported,tags,to&access_token=" . $data_token["token_access_token"];
    //         $get_message = $this->fb_get_data($command, $data_token["token_id"]);
    //         $data_message = $get_message["data"];
    //         if (is_null($get_inbox["data"])) {
    //             if ($member["fm_country"] != "th") {
    //                 $data_message["message_th"] = "";
    //                 // $get_old = getSql("SELECT * FROM `translated` WHERE `text_origin` = '" . $data_message["message"] . "' AND lang_translated = '" . $member["fm_country"] . "' LIMIT 1", $conn_main);
    //                 // if (is_null($get_old["data"])) {
    //                 //   $translate = new TranslateClient(['key' => 'AIzaSyCtWz-r1dweiIljKTnjJ65FrR4qtTYM4_0']);
    //                 //   $text_input[] = $data_message["message"];
    //                 //   $response_translate = $translate->translateBatch($text_input, ['target' => "th"]);
    //                 //   updateSql("INSERT INTO `translated` SET `text_origin` = '" . $data_message["message"] . "', `text_translated` = '" . $response_translate[0]["text"] . "', `lang_origin` = '" . $member["fm_country"] . "', `lang_translated` = 'th'", $conn_main);
    //                 //   $data_message["message_th"] = $response_translate[0]["text"];
    //                 // } else {
    //                 //   $old_data = $get_old["data"][0];
    //                 //   $data_message["message_th"] = $old_data["text_translated"];
    //                 // }
    //             }
    //         } else {
    //             $data_inbox = $get_inbox["data"][0];
    //             if (is_null($data_inbox["inbox_text_th"])) {
    //                 $data_message["message_th"] = "";
    //             } else {
    //                 $data_message["message_th"] = $data_inbox["inbox_text_th"];
    //             }
    //         }
    //         $set_data["facebook_inbox"] = $data_message;
    //     } else if (!is_null($inbox_mid)) {

    //         $jsonData = null;
    //         $command = $inbox_mid . "?fields=id,created_time,message,attachments,from,is_unsupported,tags,to&access_token=" . $data_token["token_access_token"];
    //         $get_message = $this->fb_get_data($command, $data_token["token_id"]);
    //         $data_message = $get_message["data"];
    //         if ($member["fm_country"] != "th") {
    //             $data_message["message_th"] = "";
    //             // $get_old = getSql("SELECT * FROM `translated` WHERE `lang_translated` = '" . $data_message["message"] . "' AND lang_origin = 'th' LIMIT 1", $conn_main);
    //             // if (is_null($get_old["data"])) {
    //             //   $translate = new TranslateClient(['key' => 'AIzaSyCtWz-r1dweiIljKTnjJ65FrR4qtTYM4_0']);
    //             //   $text_input[] = $data_message["message"];
    //             //   $response_translate = $translate->translateBatch($text_input, ['target' => "th"]);
    //             //   updateSql("INSERT INTO `translated` SET `text_origin` = '" . $data_message["message"] . "', `text_translated` = '" . $response_translate[0]["text"] . "', `lang_origin` = '" . $member["fm_country"] . "', `lang_translated` = 'th'", $conn_main);
    //             //   $data_message["message_th"] = $response_translate[0]["text"];
    //             // } else {
    //             //   $old_data = $get_old["data"][0];
    //             //   $data_message["message_th"] = $old_data["text_origin"];
    //             // }
    //         } else {
    //             $data_message["message_th"] = $data_message["message"];
    //         }

    //         $set_data["facebook_inbox"] = $data_message;
    //         // $set_data["inbox_mid"] = $inbox_mid;



    //     } else {
    //         $set_data["facebook_inbox"] = null;
    //     }

    //     if (is_null($data_page["page_image"])) {
    //         $get_page_img = $this->fb_get_data($data_page["page_id"] . "/picture?redirect=0&height=200&type=normal&width=200");
    //         $img_tmp = $data_page["page_id"] . '.jpeg';
    //         copy($get_page_img["data"]["data"]["url"], $_path_storage . '/facebook/page_images/' . $img_tmp);
    //         updateSql("UPDATE `fb_list_page` SET `page_image` = '" . $img_tmp . "' WHERE `page_id` = '" . $data_page["page_id"] . "' LIMIT 1;", $conn_main);
    //         $fcm_data["page_image"] = $_site_images . "/facebook/page_images/" . $img_tmp;
    //         $set_data["page_image"] = $_site_images . "/facebook/page_images/" . $img_tmp;
    //     } else {
    //         $fcm_data["page_image"] = $_site_images . "/facebook/page_images/" . $data_page["page_image"];
    //         $set_data["page_image"] = $_site_images . "/facebook/page_images/" . $data_page["page_image"];
    //     }

    //     $fcm_data["notify_type"] = "new_message";
    //     $fcm_data["page_name"] = $data_page["page_name"];
    //     $fcm_data["page_id"] = $data_page["page_id"];
    //     $fcm_data["shop_id"] = $data_shop["shop_id"];
    //     $fcm_data["shop_name"] = $data_shop["shop_name"];
    //     $fcm_data["facebook_id"] = $member["fm_user_id"];
    //     $fcm_data["facebook_name"] = $member["fm_user_name"];
    //     $fcm_data["conversation_id"] = $member["fm_conv_key"];
    //     $fcm_data["conv_id"] = $data_conversations["conv_id"];
    //     // $fcm_data["page_image"] = $get_page_img["data"]["data"]["url"];
    //     $fcm_data["access_token"] = $data_token["token_access_token"];

    //     $fcm_notification["title"] = $data_page["page_name"];
    //     $fcm_notification["body"] = $member["fm_last_message"];
    //     $fcm_notification["click_action"] = '.MainActivity';
    //     $fcm_notification["sound"] = "default";


    //     $set_data["conversation_id"] = $member["fm_conv_key"];
    //     $set_data["conv_id"] = $data_conversations["conv_id"];
    //     $set_data["page_name"] = $data_page["page_name"];
    //     $set_data["page_id"] = $data_page["page_id"];
    //     $set_data["shop_name"] = $data_shop["shop_name"];
    //     $set_data["shop_id"] = $data_page["shop_id"];
    //     // $set_data["page_image"] = $get_page_img["data"]["data"]["url"];
    //     // $set_data["check_access_token"] = $data_token;
    //     $set_data["access_token"] = $data_token["token_access_token"];
    //     $set_data["page_access_token"] = $data_token["token_access_token"];
    //     $set_data["last_update"] = $member["fm_last_update"];
    //     $set_data["last_message"] = $member["fm_last_message"];
    //     $set_data["message"] = $member["fm_last_message"];
    //     $set_data["timestamp"] = time();
    //     $set_data["facebook_id"] = $member["fm_user_id"];
    //     $set_data["facebook_name"] = $member["fm_user_name"];
    //     $set_data["facebook_country"] = $member["fm_country"];
    //     if (is_null($member["fm_user_img"]) || $member["fm_user_img"] == '') {
    //         $set_data["facebook_image"] = $_site_images . "/images/user-icon-png-pnglogocom.png";
    //     } else {
    //         $set_data["facebook_image"] = $_site_images . "/facebook/user/" . $member["fm_user_img"];
    //     }
    //     $set_data["conversation_id"] = $member["fm_conv_key"];
    //     $set_data["read"] = $member["fm_read"];
    //     $set_data["slip"] = $member["fm_slip"];
    //     $set_data["reply"] = $member["fm_reply_status"];
    //     if (is_null($tag_list["data"])) {
    //         $set_data["tag_list"] = "null";
    //     } else {
    //         $set_data["tag_list"] = $tag_list["data"];
    //     }
    //     if ($data_user["user_nickname"] == '') {
    //         $set_data["owner_name"] = $data_user["user_name"];
    //     } else {
    //         $set_data["owner_name"] = $data_user["user_nickname"];
    //     }

    //     $factory = (new Factory)->withServiceAccount($_home_path . '/main/assets/adsshortcut-63da7-firebase-adminsdk-w7sai-c609c7403c.json')->withDatabaseUri('https://adsshortcut-63da7-default-rtdb.asia-southeast1.firebasedatabase.app/');
    //     $frd_database = $factory->createDatabase();
    //     $fcm_messaging = $factory->createMessaging();

    //     // $get_shop_officer = getSql("SELECT tb_user.user_id, tb_user.user_code FROM tb_user  WHERE tb_user.groupu_id = " . $data_page["groupu_id"] . " OR (utype_id IN (1,12) AND user_status = 1)", $conn_main);
    //     $get_shop_officer = getSql("SELECT tb_user.user_id, tb_user.user_code FROM tb_user  WHERE utype_id IN (1,3,12) AND user_status = 1 AND comp_id = 1", $conn_main);
    //     foreach ($get_shop_officer["data"] as $officer) {
    //         $set_data2update[$officer["user_code"]]["new_message"] = $set_data;

    //         $get_device = getSql("SELECT * FROM `user_device` WHERE device_status = 1 AND user_id = " . $officer["user_id"], $conn_main);
    //         if (!is_null($get_device["data"])) {
    //             foreach ($get_device["data"] as $device) {
    //                 if ($device["device_token"] != "" && !is_null($device["device_token"])) {
    //                     $deviceTokens[] = $device["device_token"];
    //                 }
    //             }
    //         }
    //     }

    //     $result_firebase = $frd_database->getReference('chat/user/')->update($set_data2update);
    //     // $frd_database->getReference('chat/member/' . $member["fm_user_id"] . '/timestamp')->set(time());
    //     // $frd_database->getReference('chat/notify/all/new_message')->update($set_data);

    //     if ($notify) {
    //         $message = CloudMessage::new();
    //         $message = $message->withData($fcm_data);
    //         $message = $message->withNotification($fcm_notification);
    //         if (isset($deviceTokens)) {
    //             $sendReport = $fcm_messaging->sendMulticast($message, $deviceTokens);

    //             $unknownTargets = $sendReport->unknownTokens(); // string[]
    //             foreach ($unknownTargets as $device_token) {
    //                 updateSql("UPDATE `user_device` SET `device_status` = 0 WHERE `device_token` = '" . $device_token . "' LIMIT 1", $conn_main);
    //             }
    //             // Invalid (=malformed) tokens
    //             $invalidTargets = $sendReport->invalidTokens(); // string[]
    //             foreach ($invalidTargets as $device_token) {
    //                 updateSql("UPDATE `user_device` SET `device_status` = 0 WHERE `device_token` = '" . $device_token . "' LIMIT 1", $conn_main);
    //             }
    //         }
    //     }
    // }
} // class
