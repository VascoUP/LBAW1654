<?php 
	include_once('../../config/init.php');
	include($BASE_DIR .'database/Users/userInformation.php');
	include($BASE_DIR .'database/invites.php');
	
	$userInfo = getUserInformation($_SESSION['username']);
  	$smarty->assign('smartyUsrInfo', $userInfo);

	$projectInvites = invitedProjects($userInfo[0][userid]);
  	$smarty->assign('smartyProjInvites', $userInfo);

	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/profiles/profileUsrOverview.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>