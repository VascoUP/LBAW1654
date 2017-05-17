<?php	
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/Iterations/iterations.php');  
	include_once($BASE_DIR .'database/Users/userInformation.php'); 
	
	$id = $_GET['projID'];
	
	if (!$_POST['maximum'] || !$_POST['StartDate'] || !$_POST['Description']) {
		$_SESSION['error_messages'][] = 'All fields are mandatory';
		$_SESSION['form_values'] = $_POST;
		header("Location: $BASE_URL" . 'pages/project/iteration/createIteration.php?projID='.$id);
		exit;
	}

  $name = strip_tags($_POST['IterationName']);
  $maximum = strip_tags($_POST['maximum']);
  $startDate = strip_tags($_POST['StartDate']);
  $dueDate = strip_tags($_POST['DueDate']);
  $description = strip_tags($_POST['Description']);
	
 $itID = addIteration($id, $name, $description, $startDate, $maximum, $dueDate);
 $userID = getUserID($_SESSION['username']);
 insertPermission($itID, $userID);
 
  $_SESSION['success_messages'][] = 'Iteration created successfully';  
  header('Location: ' .$BASE_URL.'pages/project/iteration/projectIterations.php?projID='.$id);
?>