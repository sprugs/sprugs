<?php 
	header('content-type:application/json');

	session_name("us");
	session_set_cookie_params(600); 
	
 if(isset($_COOKIE['us'])){
	 session_start($_COOKIE['us']);
	 var_dump(session_save_path());	
	 var_dump($_SESSION);
	 
 }else{
 	echo "failure";
 }



 
?>