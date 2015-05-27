<?php  
	require_once "Helper.php";
	require_once "AbstractContent.php";

	header('content-type:application/json');

	$dao = new DAO(DBUSERNAME,DBPASSWD,DBHOST,DBNAME);

	//TODO addd helper function to query with limits
	$actions = new DBHelper();

	switch ($_GET['type']) {
		case 'detail':
			$id = $_GET['id'];
			$result = $actions->fetchDetails($id,'blog');

			echo $actions->parseContentsArray($result);
			break;
		
		default:
			$result = $actions->fetchContents(0,30); 

			$contentsWrapper = array(); 
			foreach ($result as $row) {

				$content = new AbstractContent($row['id'],$row['title'],$row['img'],$row['summary'],$row['description'],$row['authorid'],$row['rating'],$row['noofviews'],$row['createdts']);
				array_push($contentsWrapper, $content);
			}
			
			echo $actions->parseContentsArray($contentsWrapper);
			break;
	}

	

?>