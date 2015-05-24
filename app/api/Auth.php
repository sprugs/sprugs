<?php
	require_once "lib/PasswordHash.php";

	$userName = "bala";
	$passwd 	= "bala";

	
	$hasher = new PasswordHash();

	$hash = $hasher->HashPassword($passwd);

	$hashType = $hasher->CheckPassword($passwd,$hash);

	/*
	$crypt = crypt($passwd);

	$hash = password_hash($passwd,PASSWORD_BCRYPT);

	$info = password_get_info($hash);

	var_dump($info['algo']);
	var_dump($info['algoName']);



	$algoOpt = $info['options'];*/
	var_dump($hashType);
	var_dump($hash);
?>