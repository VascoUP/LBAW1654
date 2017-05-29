<?php	
	include_once('../../config/init.php');
    include_once("{$BASE_DIR}database/Projects/editProject.php");
	include_once("{$BASE_DIR}database/Projects/projects.php");
	include_once("{$BASE_DIR}database/Projects/inviteAndTags.php");

	$id = $_GET['projID'];
	if($_POST['name'])
		$result = updateProjName($_POST['name'], $id);
		if ($result) {
		    $_SESSION['field_errors'][name] = 'Name too long';
		    header("Location: ../../pages/project/projectEdit.php?projID=" .$id);
		}
	else if($_POST['description'])
		updateOverview($_POST['description'], $id);
	else if($_POST['tags']){
		$tags = explode(' ; ', $_POST['tags']);
		addTags($tags, $id);
	}
	else if($_POST['joinUser']) {
		$userInfo = getUserInformation($_POST['joinUser']);
		$result = inviteToProject($userInfo[0]['userid'], $id);
		if( $result ) {
			$string = urlencode($result);
			header("Location: ../../pages/message.php?result={$string}");

			exit("Stop");
		}
	}
	else if($_POST['access'])
		updateAccess($_POST['access'], $id);


?>