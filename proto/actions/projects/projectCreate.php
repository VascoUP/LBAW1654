<?php	
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/project.php');  

	if (!$_POST['projName'] || !$_POST['overview'] || !$_POST['tags'] || !$_POST['access') {
		$_SESSION['error_messages'][] = 'All fields are mandatory';
		$_SESSION['form_values'] = $_POST;
		header("Location: $BASE_URL" . 'pages/project/general/projectCreate.php');
		exit;
  }

  $name = strip_tags($_POST['projName']);
  $overview = strip_tags($_POST['overview']);
  $tags = strip_tags($_POST['tags']);
  $access = strip_tags($_POST['access']);
	
  createProject($name, $overview, $tags, $access);

  $_SESSION['success_messages'][] = 'Project created successfully';  
  header('Location: ' .$BASE_URL.'pages/project/general/projectOverview.php');
?>