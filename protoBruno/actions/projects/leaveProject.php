<?php	
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/Projects/projects.php');
	
	$id = $_GET['projID'];
	$userInfoID = getUserID($_SESSION['username']);
	
	leaveProject($userInfoID, $id);
	
  $_SESSION['success_messages'][] = 'Leave project successfully';  
  header('Location: ' .$BASE_URL.'pages/profile/userProjects.php?userInfo='.$userInfoID);
 ?>