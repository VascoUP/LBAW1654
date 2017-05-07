<?php	
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/Iterations/iterations.php');  

	$id = $_GET['itID'];
	
	foreach($_POST as $key => $val){
		if($key == 'itName')
			updateName($_POST['itName'], $id);
		else if($key == 'maximum')
			updateMaximum($_POST['maximum'], $id);
		else if($key == 'StartDate')
			updateStartDate($_POST['StartDate'], $id);
		else if($key == 'DueDate')
			updateDueDate($_POST['DueDate'], $id);
		else if($key == 'Description')
			updateDescription($_POST['Description'], $id);
	}
 
  $_SESSION['success_messages'][] = 'Iteration updated successfully';  
  header('Location: ' .$BASE_URL.'pages/project/iteration/iterationPage.php?itID='.$id);
?>