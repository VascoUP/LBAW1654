<?php	
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/editProject.php');  

	$id = $_GET['projID'];
	
	if($_POST['name'])
		updateProjName($_POST['name'], $id);
	else if($_POST['overview'])
		updateOverview($_POST['overview'], $id);
	else if($_POST['access'])
		updateAccess($id);
	else if($_POST['delete'])
		deleteProject($id);
	
  header('Location: ' .$BASE_URL.'pages/project/projectPage.php?projID='.$id);
?>