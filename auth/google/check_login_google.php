<?php
if (!($_SERVER['REQUEST_METHOD'] === "GET")) {
	echo "Method Not Allowed!!!";
	exit;
}

require_once("../../includes/config.php");
require_once($_dr_plugin."/composer/vendor/autoload.php");
require_once($_dr_assets."/class/class_google_service.php");

$database_obj = new Database();

$database_obj->get_session_start();
$pdo = $database_obj->get_var_connect();

$google_client = new Google_Client();
$google_client->setClientId($_google_client_id);
$google_client->setClientSecret($_google_client_secret);
//Set the OAuth 2.0 Redirect URI
$google_client->setIncludeGrantedScopes(true);
$google_client->setAccessType("offline");
$google_client->setPrompt("consent");
$google_client->setRedirectUri($_redirect_url_for_auth_by_google);
$google_client->addScope('email');
$google_client->addScope('profile');
$google_client->addScope('https://www.googleapis.com/auth/user.phonenumbers.read');

if (isset($_GET["code"])) {
	$token = $google_client->fetchAccessTokenWithAuthCode(trim($_GET["code"]));
	//print_r($token);

	if (!isset($token['error'])) {
		$google_client->setAccessToken($token['access_token']);
		//$_SESSION['access_token'] = $token['access_token'];
		$expire_token = date('Y-m-d H:m:s', time() + $token['expires_in']);

		$google_service = new Google_Service_Oauth2($google_client);
		$data = $google_service->userinfo->get();
		$data = json_encode($data);
		$data = json_decode($data, true);

		// $service = new Google_Service_People($google_client);
		// // ดึงหมายเลขโทรศัพท์
		// $data["phone_number"] = $service->people->get('people/me', array('personFields' => 'phoneNumbers'));

		if ($data["verifiedEmail"]) {
			//given_name,family_name,email,gender,picture

			$stmt = $pdo->prepare("SELECT * FROM users WHERE user_status = 1 AND user_email = :user_email LIMIT 1");
			$stmt->bindValue(':user_email', $data["email"], PDO::PARAM_STR);
			$get = $database_obj->qrySql($stmt);

			if ($get["count_all"] > 0) { // กรณีที่ email มีอยู่ในระบบอยู่แล้ว
				$stmt = $pdo->prepare("UPDATE `users` SET `user_last_login_date` = :user_last_login_date WHERE user_email = :user_email ");
				$stmt->bindValue(':user_last_login_date', date('Y-m-d H:i:s'), PDO::PARAM_STR);
				$stmt->bindValue(':user_email', $data["email"], PDO::PARAM_STR);
			} else { // กรณีที่ email ยังไม่มีอยู่ในระบบ
				$stmt = $pdo->prepare("INSERT INTO `users` SET `user_firstname` = :user_firstname, `user_lastname` = :user_lastname, user_email = :user_email, user_status = 1, user_type = 2 ");
				$stmt->bindValue(':user_firstname', $data["givenName"], PDO::PARAM_STR);
				$stmt->bindValue(':user_lastname', $data["familyName"], PDO::PARAM_STR);
				$stmt->bindValue(':user_email', $data["email"], PDO::PARAM_STR);
			}
			$result = $stmt->execute();
			if($result){
				$stmt = $pdo->prepare("SELECT * FROM users WHERE user_status = 1 AND user_email = :user_email LIMIT 1");
				$stmt->bindValue(':user_email', $data["email"], PDO::PARAM_STR);
				$get = $database_obj->qrySql($stmt);

				$_SESSION["id"] = session_id();

				$stmt = $pdo->prepare("UPDATE `users` SET `user_session` = :user_session WHERE user_id = :user_id ");
				$stmt->bindValue(':user_session', $_SESSION["id"], PDO::PARAM_STR);
				$stmt->bindValue(':user_id', $get["data"][0]["user_id"], PDO::PARAM_INT);
				$stmt->execute();

				$stmt = $pdo->prepare("INSERT INTO `user_login` SET `user_id`=" . $get["data"][0]["user_id"] . ",`login_ip`='" . $database_obj->get_client_ip() . "',`login_sessionid`='" . $_SESSION["id"] . "', `login_channel` = 'google', `login_from`=0");
				$stmt->execute();

				$user_type_obj = $database_obj->user_type_int_to_text($get["data"][0]["user_type"]);
				$get["data"][0]["user_type_text"] = $user_type_obj["thai"];

				$_SESSION["user"] = array();
				$_SESSION["user"] = $get["data"][0];

				header("location: ".$_dr_page."/login/page_login.php");
			}else{
				echo "Save Failed";
			}
		} else {
			echo "Login Failed";
		}
	}
} else {
	header("location:" . $google_client->createAuthUrl());
	exit();
}

// $ggservice = new ads_google_service();

// $client_redirect_url = "http://localhost/A_Torax/auth/check_login_google.php";
// if (isset($_GET['code'])) {
// 	$ggservice->set_client_id("491542154488-todme6vg23prgvmoi8t473v8bl8kg75l.apps.googleusercontent.com");
// 	$ggservice->set_client_secret("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");
// 	$rs = $ggservice->get_access_token($_GET['code'], $client_redirect_url);
// 	var_dump($rs);
// 	if ($rs["access_token"]) {
// 		$sql = "INSERT INTO temp_data SET ";
// 		$sql .= "a='login_gg_token'";
// 		$sql .= ",b='" . $rs["access_token"] . "'";//access_token
// 		$sql .= ",c='" . $rs["refresh_token"] . "'";//refresh_token
// 		$sql .= ",d=" . time();
// 		$stmt = $pdo->prepare($sql);
// 		$result = $stmt->execute();
// 	}
// }
// $echo["status"] = 1;
// echo json_encode($echo);
?>