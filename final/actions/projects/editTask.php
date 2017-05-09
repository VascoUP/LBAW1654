<?php	
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/Tasks/tasks.php');  
	include_once($BASE_DIR .'database/Users/userInformation.php'); 

	$id = $_GET['taskID'];
	
	if($_POST['TaskName'])
		updateName($_POST['TaskName'], $id);	
	else if($_POST['Priority'])
		updatePriority($_POST['Priority'], $id);
	else if($_POST['Effort'])
		updateEffort($_POST['Effort'], $id);
	else if($_POST['Collaborators']){
		$userID = getUserID($_POST['Collaborators']);
		joinTask($userID, $id);
	}
	else if($_POST['Description'])
		updateTaskDescription($_POST['Description'], $id);
 
  $_SESSION['success_messages'][] = 'Task updated successfully';  
  header('Location: ' .$BASE_URL.'pages/project/task/taskPage.php?taskID='.$id);
 ?>
  