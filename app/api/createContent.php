<?php
	require "Constants.php";
	require "AbstractContent.php";

	header('Accept: application/json');
	header('content-type:application/json');

	$input = file_get_contents('php://input');

	echo $input;

	$newContent = new AbstractContent($input['id'],$input['title'],$input['img'],$input['summary'],$input['description'],$input['author'],$input['rating'],$input['noofviews'],$input['createdts']);



	//TODO write a helper for insert to table

	
	/*$dao = new DAO(DBUSERNAME,DBPASSWD,DBHOST,DBNAME);

	$result = $dao->fetchData("SELECT * FROM contents_test");

	$contentsWrapper = array(); 

	foreach ($result as $row) {
		$content = new AbstractContent($row['title'],$row['desc'],$row['imgsrc'],$row['author'],$row['comments']);
		array_push($contentsWrapper, $content);
	}
	
	echo json_encode($contentsWrapper); */
 ?>