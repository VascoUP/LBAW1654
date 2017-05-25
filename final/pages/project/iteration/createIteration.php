<?php 
	include_once('../../../config/init.php');
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');
	
	$userInfo = getUserInformation($_SESSION['username']);
	$smarty->assign('smartyUsrInfo', $userInfo);
	
	include_once($BASE_DIR .'database/Projects/validateUser.php');

	$projectInvites = invitedProjects($userInfo[0]['userid']);
	$smarty->assign('smartyProjInvites', $projectInvites);
	
	$ID = $_GET['projID'];
	
	$smarty->assign('smartyProjID', $ID);
	
  include_once($BASE_DIR .'database/prepareNotifications.php');
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/iterations/createIteration.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>