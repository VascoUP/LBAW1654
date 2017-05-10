<?php	
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/Tasks/tasks.php');  
	include_once($BASE_DIR .'database/Users/userInformation.php'); 
	
	$id = $_GET['taskID'];
	$info = getInfoTask($id);
	$itID = $info['0']['iterationid'];
	
	$userInfoID = getUserID($_SESSION['username']);
	
	leaveTask($userID, $id);
	
	
  $_SESSION['success_messages'][] = 'Task removed successfully';  
  header('Location: ' .$BASE_URL.'pages/project/iteration/iterationPage.php?itID='.$itID);
 ?>