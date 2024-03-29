<?php	
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/Tasks/tasks.php'); 
	include_once($BASE_DIR .'database/Users/userInformation.php'); 	

	$id = $_GET['itID'];
	$projID = $_GET['projID'];
	$userInfo = getUserInformation($_SESSION['username']);
	$userID = $userInfo['0']['userid'];
	
	if (!$_POST['Priority'] || !$_POST['TaskName'] || !$_POST['Effort']){
		$_SESSION['error_messages'][] = 'All fields are mandatory';
		$_SESSION['form_values'] = $_POST;
		header("Location: $BASE_URL" . 'pages/project/task/createTask.php?projID=' . $projID . '&itID='.$id);
		exit;
	}
	
	$priority = strip_tags($_POST['Priority']);
	$name =  strip_tags($_POST['TaskName']);
	$effort = strip_tags($_POST['Effort']);
    $description = htmlspecialchars($_POST['Description']);
	
	$result = addTask($name, $priority, $description, $effort, $id, $userID);
	if( $result ) {
        $_SESSION['field_errors'][taskCreate] = 'Invalid parameters. Make sure only Letters, numbers, \'.\' and \'-\' are used';
		header('Location: https://gnomo.fe.up.pt' .$BASE_URL.'pages/project/task/createTask.php?projID=' . $projID . '&itID='.$id);
		die();
	}
 
	$_SESSION['success_messages'][] = 'Task created successfully';  
	header('Location: https://gnomo.fe.up.pt' .$BASE_URL.'pages/project/iteration/iterationPage.php?projID=' . $projID . '&itID='.$id);
?>