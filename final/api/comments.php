<?
	include_once('../config/init.php');
	include_once($BASE_DIR .'database/Threads/threads.php'); 
	include_once($BASE_DIR .'database/Users/userInformation.php'); 
	
	$data = json_decode(file_get_contents('php://input'), true);
	
	$userID = getUserID($_SESSION['username']);
	$forumID = $_GET['forumID'];
	$content = $data['content'];
	
	if($data['accepted'] == true)
		addComment($forumID, $userID, $content);

?>