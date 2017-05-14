<?php 
	include_once('../../../config/init.php');
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
  	include_once($BASE_DIR .'database/Projects/validateUser.php');
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/Tasks/tasks.php');
	include_once($BASE_DIR .'database/invites.php');
	
	$userInfo = getUserInformation($_SESSION['username']);
  	$smarty->assign('smartyUsrInfo', $userInfo);

	$projectInvites = invitedProjects($userInfo[0]['userid']);
  	$smarty->assign('smartyProjInvites', $projectInvites);
	
	$id = $_GET['taskID'];
	$smarty->assign('smartyTaskID', $id);
	
	$status = getInfoTask($id)['0']['status'];
	$smarty->assign('smartyTaskStatus', $status);
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/tasks/editTask.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>
