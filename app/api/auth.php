<?php
	require_once "lib/PasswordHash.php";
	require_once "Helper.php";

	header('Accept: application/json');
	header('content-type:application/json');

	$input = file_get_contents('php://input');

	$input = json_decode($input);

	if($input->uname){
		$sessionActions = new SessionHelper($input->uname);
	}else{
		$sessionActions = new SessionHelper();
	}

	

	
	if($_GET['login']=='1'){
		$uname 	= $input->uname;
		$passwd = $input->passwd;
		
		$hasher = new PasswordHash();

		$hash = $hasher->HashPassword($passwd);

		$hashType = $hasher->CheckPassword($passwd,$hash);

		
		$isValidSession = $sessionActions->validateSession();
		if(!$isValidSession){
			$sessionActions->setActiveSession();	
		}

		echo "{\"login\":true}";

		
	}else{
		$sessionActions->destroyActiveSession();
		echo "{login:'false'}";
	}

		
?>