<?php 
	class AbstractSession{
		private $userName;
		private $authToken;

	//getters
		public function getUserName(){
			return $this->userName;
		}

		public function getAuthToken(){
			return $this->authToken;
		}

	//setters
		public function setUserName($uname){
			$this->userName = $uname;
		}

		public function setAuthToken($authToken){
			$this->authToken = $authToken;
		}

	//constructor
		function __construct($uname,$authToken){
			$this->setUserName($uname);
			$this->setAuthToken($authToken);
		}
	}
?>