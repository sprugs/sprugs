<?php

	require "Dao.php";
	require "Constants.php";
	
	class DBHelper{
		private $dao;

		function __construct(){
			$this->dao = new DAO(DBUSERNAME,DBPASSWD,DBHOST,DBNAME);
		}

		public function addContent($content){
			$result = $dao->addData($content);

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
?>