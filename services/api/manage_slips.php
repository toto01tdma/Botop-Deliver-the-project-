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

    if($action == "read_slips"){
        $echo["status"] = 1;
        $stmt = $pdo->prepare("SELECT slip_img FROM slips WHERE od_id = :od_id");
        $stmt->bindValue(':od_id', $_POST["order_id"], PDO::PARAM_INT);
        $get = $database_obj->qrySql($stmt);
        $echo["count_all"] = $get["count_all"];
        $echo["data"] = [];
        foreach($get["data"] AS $rs){
            $echo["data"][] = $rs;
        }
        echo json_encode($echo);
    }else if($action == "upload_slips"){
        $echo["status"] = 1;
        if(!isset($_FILES["slip_file"])){
            $echo["status"] = 0;
            $echo["error"] = "กรุณาแนบไฟล์หลักฐานการชำระเงิน";
        }else if($_POST["slip_date"] == "" || $_POST["slip_time"] == ""){
            $echo["status"] = 0;
            $echo["error"] = "กรุณากรอกข้อมูลวันที่ และ เวลาการชำระเงิน";
        }else{
            $file_obj = $database_obj->check_file_image($_FILES["slip_file"]);
            if($file_obj["status"] == 1){
                $path = $_dr_storage."/slips";
                $target_file = $_POST["order_id"].$database_obj->get_table_id("slips").$file_obj["file_name"];
                if(move_uploaded_file($_FILES["slip_file"]["tmp_name"], $path."/".$target_file)){
                    $date_time = $_POST["slip_date"]." ".$_POST["slip_time"];
                    $stmt = $pdo->prepare("INSERT INTO `slips`(`slip_img`, `slip_datetime`, `od_id`) VALUES (:slip_img, :slip_datetime, :od_id)");
                    $stmt->bindParam(":slip_img", $target_file, PDO::PARAM_STR);
                    $stmt->bindParam(":slip_datetime", $date_time, PDO::PARAM_STR);
                    $stmt->bindParam(":od_id", $_POST["order_id"], PDO::PARAM_INT);
                    $result = $stmt->execute();
                    if(!$result){
                        $echo["status"] = 0;
                        $echo["error"] = "ไม่สามารถบันทึกรูปได้";
                    }else{
                        $stmt = $pdo->prepare("UPDATE `orders` SET `od_status`= 2 WHERE `od_id` = :od_id");
                        $stmt->bindParam(":od_id", $_POST["order_id"], PDO::PARAM_INT);
                        $result = $stmt->execute();
                    }
                }else{
                    $echo["status"] = 0;
                    $echo["error"] = "ไม่สามารถเก็บรูปได้";
                }
            }else{
              $echo["status"] = 0;
              $echo["error"] = $file_obj["error"];
            }
        }
        echo json_encode($echo);
    }/*else if($action == "verify_slip"){
        $upload = $controler->upload_files($_FILES["pay_img"]);
        if($upload["status"] == 1){
          $echo["upload"] = $upload;
          $result_qr = scan_qr($_path_storage."/temp_upload/".$upload["files"][0]);
          if($result_qr != ""){
            $result_qr = explode(":", $result_qr);
            $qr_code = $result_qr[1];
          }else{
            $qr_code = "";
          }
          $echo["qr_code"] = $qr_code;
          $echo["result_qr"] = $result_qr;
          $echo["upload"] = $upload;
          unlink($_path_storage."/temp_upload/".$upload["files"][0]);
          if($qr_code != ""){
            $get_statment = getSql("SELECT * FROM `account_statement` WHERE `state_qr` = '".$qr_code."' AND `state_status` = 1 LIMIT 1", $conn_main);
            if(!is_null($get_statment["data"])){
              $echo["status"] = 0;
              $echo["error"] = "สลิปนี้ไม่สามารถใช้ได้เนื่องจากมีการใช้งานแล้ว";
            }else{
              $get_payment = getSql("SELECT * FROM `payment` WHERE `pay_qr` = '".$qr_code."' AND `pay_status` = 0 LIMIT 1", $conn_main);
              if(!is_null($get_payment["data"])){
                $echo["status"] = 2;
                $echo["error"] = "สลิปมีการอัพโหลดเข้ามาก่อนหน้าแล้ว";
              }else{
                $get_installment = getSql("SELECT * FROM `order_installment` WHERE `ism_qr` = '".$qr_code."' AND `ism_status` IS null LIMIT 1", $conn_main);
                if(!is_null($get_installment["data"])){
                  $echo["status"] = 2;
                  $echo["error"] = "สลิปมีการอัพโหลดเข้ามาก่อนหน้าแล้ว";
                }else{
                  $echo["status"] = 1;
                }
              }
            }
          }else{
            $echo["status"] = 2;
            $echo["error"] = "ไม่สามารถตรวจสอบความถูกต้องของสลิปได้";
          }
        }else{
          $echo["status"] = 0;
          $echo["error"] = "ไม่สามารถอัพโหลดไฟล์สลิปเพื่อตรวจสอบได้";
        }
        echo json_encode($echo);
      }else if($action == "verify_multi_slip"){
      
        $upload = $controler->upload_files($_FILES["pay_img"]);
        if($upload["status"] == 1){
          foreach($upload["files"] as $file){
            $result_qr = scan_qr($_path_storage."/temp_upload/".$file);
            if($result_qr != ""){
              $result_qr = explode(":", $result_qr);
              $qr_code = $result_qr[1];
            }else{
              $qr_code = "";
            }
            $echo["qr_code"][] = $qr_code;
            $echo["result_qr"][] = $result_qr;
      
            unlink($_path_storage."/temp_upload/".$file);
            if($qr_code != ""){
              $get_statment = getSql("SELECT * FROM `account_statement` WHERE `state_qr` = '".$qr_code."' AND `state_status` = 1 LIMIT 1", $conn_main);
              if(!is_null($get_statment["data"])){
                $echo["status"] = 0;
                $echo["error"] = "สลิปนี้ไม่สามารถใช้ได้เนื่องจากมีการใช้งานแล้ว";
                break;
              }else{
                $get_payment = getSql("SELECT * FROM `payment` WHERE `pay_qr` = '".$qr_code."' AND `pay_status` = 0 LIMIT 1", $conn_main);
                if(!is_null($get_payment["data"])){
                  $echo["status"] = 2;
                  $echo["error"] = "สลิปมีการอัพโหลดเข้ามาก่อนหน้าแล้ว";
                  break;
                }else{
                  $get_installment = getSql("SELECT * FROM `order_installment` WHERE `ism_qr` = '".$qr_code."' AND `ism_status` IS null LIMIT 1", $conn_main);
                  if(!is_null($get_installment["data"])){
                    $echo["status"] = 2;
                    $echo["error"] = "สลิปมีการอัพโหลดเข้ามาก่อนหน้าแล้ว";
                    break;
                  }else{
                    $echo["status"] = 1;
                  }
                }
              }
            }else{
              $echo["status"] = 2;
              $echo["error"] = "ไม่สามารถตรวจสอบความถูกต้องของสลิปได้";
            }
          }
        }else{
          $echo["status"] = 0;
          $echo["error"] = "ไม่สามารถอัพโหลดไฟล์สลิปเพื่อตรวจสอบได้";
        }
      
        echo json_encode($echo);
      }*/

    //   function scan_qr($file){
    //     $command = "zbarimg --quiet ";
    //     $command .= " ".$file;
    //     $output=null;
    //     $retval=null;
    //     exec($command, $output, $retval);
    //     if($retval === 0){
    //       return $output[0];
    //     }else{
    //       return "";
    //     }
    //   }

    $database_obj->closs_sql();
?>