<?php 
	include_once('../../../config/init.php');
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');
	
	$userInfo = getUserInformation($_SESSION['username']);
	$smarty->assign('smartyUsrInfo', $userInfo);

	$projectInvites = invitedProjects($userInfo[0][userid]);
	$smarty->assign('smartyProjInvites', $projectInvites);
	
	$ID = $_GET['projID'];
	
	$smarty->assign('smartyProjID', $ID);
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/iterations/createIteration.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>