<?php	
	include_once('../../config/init.php');
    include_once("{$BASE_DIR}database/Projects/editProject.php");

	$id = $_GET['projID'];
	echo 'projectEdit: after get id';
	
	if($_POST['name'])
		$result = updateProjName($_POST['name'], $id);
	else if($_POST['description'])
		$result = updateOverview($_POST['description'], $id);
	else if($_POST['access'])
		$result = updateAccess($id);

	if( isset($result) )
		echo $result;
	
	header("Location: ../../pages/project/projectPage.php?projID=" .$id);
?>