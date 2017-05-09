<?php	
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/Tasks/tasks.php');  

	$id = $_GET['taskID'];
	
	updateTaskStatus($id);
 
  $_SESSION['success_messages'][] = 'Task updated successfully';  
  header('Location: ' .$BASE_URL.'pages/project/task/taskPage.php?taskID='.$id);
 ?>