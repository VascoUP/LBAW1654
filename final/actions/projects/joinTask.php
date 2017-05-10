<?
	include_once('../../config/init.php');
	include($BASE_DIR .'database/Tasks/tasks.php');
	include($BASE_DIR .'database/Users/userInformation.php');
	
	$taskID = $_GET['taskID'];
	$userID= getUserID($_SESSION['username']);
	
	joinTask($userID, $taskID);
	
    header('Location: ' .$BASE_URL.'pages/project/task/taskPage.php?taskID='.$taskID);
?>