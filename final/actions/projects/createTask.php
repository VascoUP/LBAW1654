<?php	
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/Tasks/tasks.php');  

	$id = $_GET['itID'];
//Mudar ids na database
	if (!$_POST['Priority'] || !$_POST['TaskName'] || !$_POST['Effort']){
		$_SESSION['error_messages'][] = 'All fields are mandatory';
		$_SESSION['form_values'] = $_POST;
		header("Location: $BASE_URL" . 'pages/project/task/createTask.php?itID='.$id);
		exit;
	}
	
	$priority = strip_tags($_POST['Priority']);
	$name =  strip_tags($_POST['TaskName']);
	$effort = strip_tags($_POST['Effort']);
    $description = strip_tags($_POST['description']);
	
	addTask($name, $priority, $description, $effort, $id);
 
  $_SESSION['success_messages'][] = 'Task created successfully';  
  header('Location: ' .$BASE_URL.'pages/project/iteration/iterationPage.php?itID='.$id);
?>