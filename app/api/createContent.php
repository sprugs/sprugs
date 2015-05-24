<?php
	require "Helper.php";
	require "AbstractContent.php";

	header('Accept: application/json');
	header('content-type:application/json');

	$input = file_get_contents('php://input');
	$actions = new DBHelper();

	$input = json_decode($input);
	$input->author = 1;
	$input->rating = 0;
	$input->noofviews = 0;

	$newContent = new AbstractContent($input->id,$input->title,$input->img,$input->summary,$input->description,$input->author,$input->rating,$input->noofviews,$input->createdts);
	
	$result = $actions->addContent($newContent);
	if($result){
		
	}


	
 ?>