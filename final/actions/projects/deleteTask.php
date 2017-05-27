<?php	
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/Tasks/tasks.php');  

	$id = $_GET['taskID'];
	$projID = $_GET['projID'];
	$info = getInfoTask($id);
	$itID = $info['0']['iterationid'];
	
	deleteTask($id);
	
  $_SESSION['success_messages'][] = 'Task removed successfully';  
  header('Location: ' .$BASE_URL.'pages/project/iteration/iterationPage.php?projID=' . $projID . '&itID='.$itID);
 ?>