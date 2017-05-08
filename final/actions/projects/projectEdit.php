<?php	
	include_once('../../config/init.php');
	include($BASE_DIR .'database/Users/userInformation.php');
    include("{$BASE_DIR}database/Projects/editProject.php");
	include("{$BASE_DIR}database/Projects/inviteAndTags.php");

	$id = $_GET['projID'];
	
	if($_POST['name'])
		updateProjName($_POST['name'], $id);
	else if($_POST['description'])
		updateOverview($_POST['description'], $id);
	else if($_POST['access'])
		updateAccess($_POST['access'], $id);
	/*else if($_POST['tags']){
		$tags = explode(' ; ', $_POST['tags']);
		editTags($tags, $id);
	}*/
	else if($_POST['joinUser']) {
		$userInfo = getUserInformation($_POST['joinUser']);
		$result = inviteToProject($userInfo[0][userid], $id);
		if( $result ) {
			$string = urlencode($result);
			header("Location: ../../pages/message.php?result={$string}");
			exit("Stop");
		}
	}

	header("Location: ../../pages/project/projectPage.php?projID=" .$id);
?>