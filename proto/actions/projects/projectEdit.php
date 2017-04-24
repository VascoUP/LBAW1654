<?php	
	include_once('../../config/init.php');
	include($BASE_DIR .'database/Projects/editProject.php');  

	$id = $_GET['projID'];
	
	if($_POST['name'])
		updateProjName($_POST['name'], $id);
	else if($_POST['description'])
		updateOverview($_POST['description'], $id);
	else if($_POST['access'])
		updateAccess($id);
	
  header('Location: ' .$BASE_URL.'pages/project/projectPage.php?projID='.$id);
?>