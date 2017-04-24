<?php
	echo "<script>console.log('BEGIN');</script>";
	include_once("../../config/init.php");
    include_once("{$BASE_DIR}database/Projects/editProject.php");
	echo 'projectEdit: after includes';

	$id = $_GET['projID'];
	echo 'projectEdit: after get id';
	
	if($_POST['name'])
		$result = updateProjName($_POST['name'], $id);
	else if($_POST['description'])
		$result = updateOverview($_POST['description'], $id);
	else if($_POST['access'])
		$result = updateAccess($id);

	echo 'projectEdit: end';

	if( isset($result) )
		echo $$result;
	echo "<script>console.log('END');</script>";
	header("Location: ../../pages/project/projectPage.php?projID=" .$id);
?>