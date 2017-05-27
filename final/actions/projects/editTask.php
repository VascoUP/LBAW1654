<?php	
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/Tasks/tasks.php');  
	include_once($BASE_DIR .'database/Users/userInformation.php'); 

	$id = $_GET['taskID'];
	$projID = $_GET['projID'];
	
	if($_POST['TaskName'])
		updateTaskName($_POST['TaskName'], $id);	
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
	else if($_POST['status'])
		updateStatus($_POST['status'], $id);
 
  $_SESSION['success_messages'][] = 'Task updated successfully';  
  header('Location: ' .$BASE_URL.'pages/project/task/taskPage.php?projID=' . $projID . '&taskID='.$id);
 ?>
  