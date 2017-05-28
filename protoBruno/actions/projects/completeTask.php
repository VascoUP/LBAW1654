<?php	
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/Tasks/tasks.php');  

	$id = $_GET['taskID'];
	$projID = $_GET['projID'];
	
	completeTask($id);
	
	$_SESSION['success_messages'][] = 'Task completed successfully';  
	header('Location: ' .$BASE_URL.'pages/project/task/taskPage.php?projID=' . $projID . '&taskID='.$id);
 ?>