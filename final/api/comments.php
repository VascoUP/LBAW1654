<?
	include_once('../config/init.php');
	include_once($BASE_DIR .'database/Threads/threads.php'); 
	
	$userID = $_GET['userID'];
	$forumID = $_GET['forumID'];
	
	if($_POST['accepted'] == true)
		addComment($forumID, $userID);

?>