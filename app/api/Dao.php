<?php 
	class Dao {
		private $userName;
		private $password;
		private $dbName;
		private $host;

		private $dsn;

		private $conn;

	//getters
		public function getUserName(){
			return $this->userName;
		}

		public function getPassword(){
			return $this->password;
		}

		public function getDbName(){
			return $this->dbName;
		}

		public function getHost(){
			return $this->host;
		}

		public function getDsn(){
			return $this->dsn;
		}

	//setters
		public function setUserName($userName){
			$this->userName = $userName;
		}

		public function setPassword($password){
			$this->password = $password;
		}

		public function setDbName($dbName){
			$this->dbName = $dbName;
		}

		public function setHost($host){
			$this->host = $host;
		}

		public function setDsn(){
			$this->dsn = $this->generateDSN();
		}

	//constructor
		function  __construct($uname,$passwd,$host,$dbName){
			$this->setUserName($uname);
			$this->setPassword($passwd);
			$this->setDbName($dbName);
			$this->setHost($host);
			$this->setDsn();
		}

	//dao functions
		public function generateDSN(){
			return "mysql:host=".$this->host.";dbname=".$this->dbName;
		}

		public function connectToDB(){
			$conn = new PDO($this->dsn,$this->userName,$this->password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conn;
		}

		public function fetchData($query){
			if(!$this->conn){
				$this->conn = $this->connectToDB();

			}

			try{
				$result = $this->conn->query($query);
				return $result->fetchAll();

			}catch(PDOException $e){
		    	echo "Connection failed: " . $e->getMessage();
		    	return false;
		    }
			
		}

		public function addData($data){
			if(!$this->conn){
				$this->conn = $this->connectToDB();
			}
			try{
				$stmt = $this->conn->prepare('INSERT INTO `sprugs`.`content` (`title`, `img`, `summary`, `description`, `authorid`, `rating`, `noofviews`) VALUES (:title,:img,:summary,:description,:author,:rating,:noofviews)');
				$stmt->bindParam(':title', $data->title);
				$stmt->bindParam(':img', $data->img);
				$stmt->bindParam(':summary', $data->summary);
				$stmt->bindParam(':description', $data->description);
				$stmt->bindParam(':author', $data->author);
				$stmt->bindParam(':rating', $data->rating);
				$stmt->bindParam(':noofviews', $data->noofviews);
				$stmt->execute();

				$query = "SELECT `id` FROM `content` WHERE `title`='".$data->title."' and `description`='".$data->description."' and `authorid`='".$data->author."'";
				$result = $this->fetchData($query);

				var_dump($result);
				return true;

			}catch(PDOException $e){
		    	//echo "Connection failed: " . $e->getMessage();
		    	return false;
		    }
			
		}

	}
?>