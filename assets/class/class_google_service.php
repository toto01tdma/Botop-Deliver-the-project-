<?php
/*beta 0.1 basic call*/
class ads_google_service {
	public $api_id="";
	public $api_key="";
	public $api_secret="";
	public $url_api="https://www.googleapis.com";
	var $error,$raw,$access_token;
	
	public function __construct(){
		//global $_init;
		// $this->client_id = "1074049442369-6gbk5b6m1apeo7l6dc7vuu0enjr7c74h.apps.googleusercontent.com";//$_init["gg_api_id"];
		$this->client_id = "491542154488-3i4ms1n2e9dv1i3hpjf2qhq6dlmv9kbg.apps.googleusercontent.com";
		// $this->api_secret = "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";//$_init["gg_api_secret"];
		$this->api_secret = "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";
		$this->api_key = "AIzaSyAcX4odvvGkHRIzfHLsbBIAiN_yTnZLeRE";//$_init["gg_api_key"];	
	}
	//setup
	public function set_client_id($client_id){
		$this->client_id = $client_id;
	}
	public function set_client_secret($client_secret){
		$this->api_secret = $client_secret;
	}
	public function set_access($token){
		$this->access_token=$token;
	}
	public function gen_authen_url($redirect_uri,$scope){
		$scope = implode(" ",$scope);
		$login_url = 'https://accounts.google.com/o/oauth2/v2/auth?scope='.urlencode($scope).'&redirect_uri='.urlencode($redirect_uri).'&response_type=code&client_id='.$this->client_id.'&prompt=consent&access_type=offline';
		return $login_url;
	}
	public function get_access_token($code,$redirect_uri=""){
		$url = 'https://www.googleapis.com/oauth2/v4/token';

		$ch = curl_init();
		if($redirect_uri==""){
			$curlPost ="client_id=".$this->client_id
				."&client_secret=".$this->api_secret
				."&refresh_token=".$code
				."&grant_type=refresh_token";
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
			curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
		}else if($redirect_uri=="revoke"){
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
			$url='https://oauth2.googleapis.com/revoke?token='.$code;
		}else{
			$curlPost = 'client_id='.$this->client_id.'&redirect_uri='.$redirect_uri
				.'&client_secret='.$this->api_secret.'&code='.$code
				.'&grant_type=authorization_code';
			curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
		}
	
		curl_setopt($ch, CURLOPT_URL, $url);		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);		
		curl_setopt($ch, CURLOPT_POST, 1);		
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			
		$str = curl_exec($ch);
		$http_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);		
		if($http_code != 200) {
			//$data=$http_code;
		}	
		return json_decode($str, true);
	}

	//core
	public function call_data($endpoint,$data=null){

		$resault["data"] = $this->curl($endpoint,$data);
		if($this->error){$resault["error"] = $this->error;}
		return $resault;
	}
	public function curl($endpoint,$data=null){
		$this->error="";

		$header=array();
		$header[]='Authorization: Bearer ' . $this->access_token;
		$header[]='Accept: application/json';

		$ch = curl_init();
		if($data){
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_ENCODING, '');

			$header[]='Content-Type: application/json';
			$header[]='Content-Encoding: gzip';
		}else{
			curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');
		}

		curl_setopt($ch, CURLOPT_URL, $this->url_api.$endpoint."?key=".$this->api_key);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$str = curl_exec($ch);

		if (curl_errno($ch)) {
			$this->error='Error: ' . curl_error($ch);
		}
		curl_close($ch);
		return json_decode($str, true);
	}
}
/*
https://developers.google.com/calendar/api/v3/reference
*/
?>