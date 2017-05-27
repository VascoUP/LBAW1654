<?php	
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/Iterations/iterations.php');  

	$id = $_GET['itID'];
	$projID = $_GET['projID'];
	
	if($_POST['ItName'])
		updateName($_POST['ItName'], $id);	
	else if($_POST['maximum'])
		updateMaximum($_POST['maximum'], $id);
	else if($_POST['StartDate'] || $_POST['DueDate']){
		if($_POST['StartDate'] && $_POST['DueDate'])
			updateDates($_POST['StartDate'], $_POST['DueDate'], $id);
		else if($_POST['StartDate'])
			updateStartDate($_POST['StartDate'], $id);
		else if($_POST['DueDate'])
			updateDueDate($_POST['DueDate'], $id);		
	}	
	else if($_POST['Description'])
		updateIterationDescription($_POST['Description'], $id);
 
  $_SESSION['success_messages'][] = 'Iteration updated successfully';  
  header('Location: ' .$BASE_URL.'pages/project/iteration/iterationPage.php?projID=' . $projID . '&itID='.$id);
?>