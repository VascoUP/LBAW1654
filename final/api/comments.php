<?
	include_once('../config/init.php');
	include_once($BASE_DIR .'database/Threads/threads.php'); 
	include_once($BASE_DIR .'database/Users/userInformation.php'); 
	
	$data = json_decode(file_get_contents('php://input'), true);
	
	$userID = getUserID($data['username']);
	$forumID = $data['forumID'];
	$content = $data['content'];
	$taskID = $data['taskID'];
	$userInfo = getUserInformation($data['username']);
	$date = date('Y-m-d');
	
	if(isset($taskID))
		addTaskComment($forumID, $userID, $content, $date, $taskID);
	else
		addComment($forumID, $userID, $content, $date);

	echo json_encode(array( "date" => $date, "userInfo" => $userInfo['0'] ));
?>