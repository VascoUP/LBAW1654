<?php	
	include_once('../../config/init.php');
    include_once("{$BASE_DIR}database/Projects/editProject.php");

	$id = $_GET['projID'];
	
	if($_POST['name'])
		updateProjName($_POST['name'], $id);
	else if($_POST['description'])
		updateOverview($_POST['description'], $id);
	
	header("Location: ../../pages/project/projectPage.php?projID=" .$id);
	
?>