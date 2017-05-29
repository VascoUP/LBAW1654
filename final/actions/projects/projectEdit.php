<?php	
	include_once('../../config/init.php');
    include_once($BASE_DIR ."database/Projects/editProject.php");
	include_once($BASE_DIR ."database/Projects/projects.php");
	include_once($BASE_DIR ."database/Projects/inviteAndTags.php");

	$id = $_GET['projID'];
	if($_POST['name'])
		$result = updateProjName($_POST['name'], $id);
		if ($result) {
		    $_SESSION['field_errors'][name] = 'Name too long';
		    header("Location: https://gnomo.fe.up.pt" . $BASE_URL ."pages/project/projectEdit.php?projID=" .$id);
			die();
		}
	else if($_POST['description'])
		$result = updateOverview($_POST['description'], $id);
				if ($result) {
        		    $_SESSION['field_errors'][description] = 'Description too long';
        		    header("Location: https://gnomo.fe.up.pt" . $BASE_URL ."pages/project/projectEdit.php?projID=" .$id);
        			die();
        		}
	else if($_POST['tags']){
		$tags = explode(';', $_POST['tags']);
		addTags($tags, $id);
	}
	else if($_POST['joinUser']) {
		$userInfo = getUserInformation($_POST['joinUser']);
		$result = inviteToProject($userInfo[0]['userid'], $id);
		if($result) {
		    $_SESSION['field_errors'][user] = 'Unable to join requested user';
		    header("Location: https://gnomo.fe.up.pt" . $BASE_URL ."pages/project/projectEdit.php?projID=" .$id);
			die();
		}
	}
	else if($_POST['access'])
		updateAccess($_POST['access'], $id);
	header("Location: https://gnomo.fe.up.pt" . $BASE_URL ."pages/project/projectPage.php?projID=" .$id);
?>