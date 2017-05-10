<?
	include_once('../../config/init.php');
	include($BASE_DIR .'database/Tasks/tasks.php');
	include($BASE_DIR .'database/Users/userInformation.php');
	
	$taskID = $_GET['taskID'];
	$userInfo = getUserID($_SESSION['username']);
	$userID = $userInfo['0']['userid'];
	
	joinTask($userID, $taskID);
	
    header('Location: ' .$BASE_URL.'pages/project/task/taskPage.php?taskID='.$taskID);
?>