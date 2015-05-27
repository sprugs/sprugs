<?php

	require_once "Dao.php";
	require_once "AbstractSession.php";
	require_once "Constants.php";
	
	class DBHelper{
		private $dao;

		function __construct(){
			$this->dao = new DAO(DBUSERNAME,DBPASSWD,DBHOST,DBNAME);
		}

		public function addContent($content){
			$result = $this->dao->addData($content);
			return $result;
		}

		public function fetchContents($offset,$limit){
			$sql = "SELECT * FROM `content` LIMIT ".$offset."," .$limit;
			$result = $this->dao->fetchData($sql);
			
			return $result;
		}

		public function fetchDetails($id,$type){
			$sql = "SELECT * FROM `content` where id = ". $id;
			$result = $this->dao->fetchData($sql);
			
			return $result;
		}


		public function parseContentsArray($arr){
			$jsonDecode = json_decode($arr[0]);
			//echo $jsonDecode;

			if($jsonDecode==NULL){
				$len 	= count($arr);
				$index 	= 0;
				$temp = "[";
				foreach ($arr as $key => $row) {
					$temp .= "{";

					foreach ($row as $key => $value) {
						$key = "\"".$key."\"";
						$value = "\"".$value."\"";
						$temp .= $key.":".$value.",";
					}

					$temp = rtrim($temp,",");
					if($index+1<$len){
						$temp .= "},";
						$index++;
					}else{
						$temp .= "}";
					}
				}
				$temp .= "]";


				echo $temp;
			}else{
				echo $jsonDecode;
			}
		}
	} 

	class SessionHelper{
		private $session;

		function __construct($uname){
			if($uname){
				$authToken = $this->generateAuthToken($uname);
				$this->session = new AbstractSession($uname,$authToken);
			}else{
				$this->session = NULL;
			}
		}

		public function generateAuthToken($uname){
			
			$authToken = md5($uname.",".((string)time()).",".$_SERVER['SERVER_ADDR']);
			return $authToken;

		}

		public function initSession($sessionName){
			session_name(SESSION_NAME);
			session_set_cookie_params(SESSION_TIMEOUT);
			if($sessionName){
				session_start($sessionName);
			}else{
				session_start();
			}
		}

		public function validateSession(){

			if(isset($_COOKIE[SESSION_NAME])){
				$this->initSession($_COOKIE[SESSION_NAME]);

				return true;
			}
			return false;

		}

		public function setActiveSession(){
			if ($this->session && !isset($_SESSION['token']) && !isset($_SESSION['uname']) && !isset($_SESSION['createdts'])) {
			    
			    $this->initSession($_COOKIE[SESSION_NAME]);

			    $_SESSION['token'] = $this->session->getAuthToken();
			    $_SESSION['uname'] = $this->session->getUserName();
			    $_SESSION['createdts'] = time();

			    session_write_close();
			 	return 1;  
			}
			return -1;
		}

		public function destroyActiveSession(){
			if(session_id()!="" || isset($_COOKIE[session_name()]))	{
				setcookie(session_name(), '', time() - 2592000, '/');
				var_dump($_COOKIE);
				session_destroy();
			}
		}
	}
?>