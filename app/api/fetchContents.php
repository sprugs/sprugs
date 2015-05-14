<?php  
	require "Dao.php";
	require "Constants.php";
	require "AbstractContent.php";

	header('content-type:application/json');

	$dao = new DAO(DBUSERNAME,DBPASSWD,DBHOST,DBNAME);

	$result = $dao->fetchData("SELECT * FROM contents_test");

	$contentsWrapper = array(); 

	foreach ($result as $row) {
		$content = new AbstractContent($row['title'],$row['desc'],$row['imgsrc'],$row['author'],$row['comments']);
		array_push($contentsWrapper, $content);
	}
	
	echo json_encode($contentsWrapper);

?>