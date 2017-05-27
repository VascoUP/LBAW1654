<?php	
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/Threads/threads.php');
	include_once($BASE_DIR .'database/Tasks/tasks.php'); 	
	include_once($BASE_DIR .'database/Users/userInformation.php'); 	

	$id = $_GET['projID'];
	$taskID = $_GET['taskID'];
	$projID = $_GET['projID'];
	
	$name = getInfoTask($taskID)['0']['name'];
	$date = date('Y-m-d');
	$userID = getUserID($_SESSION['username']);
	addForum($id, $userID, $name, $date);
	
	$forumID = getThreadCreated($id)['0']['threadid'];
 
  $_SESSION['success_messages'][] = 'Thread created successfully';  
  header('Location: ' .$BASE_URL.'pages/project/forum/forum.php?projID=' . $projID . '&forumID='.$forumID.'&taskID='.$taskID);
?>