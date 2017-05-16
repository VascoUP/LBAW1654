<?
	include_once('../config/init.php');
	include_once($BASE_DIR .'database/Threads/threads.php'); 
	include_once($BASE_DIR .'database/Users/userInformation.php'); 
	
	$data = json_decode(file_get_contents('php://input'), true);
	
	$userID = getUserID($data['username']);
	$forumID = $data['forumID'];
	$content = $data['content'];
	$userInfo = getUserInformation($data['username']);
	$date = date('Y-m-d');
	
	
		addComment($forumID, $userID, $content, $date);

	echo json_encode(array( "date" => $date, "userInfo" => $userInfo['0'] ));
?>