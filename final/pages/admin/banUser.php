<?php
	include_once('../../config/init.php');

	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/Admin/validateAdmin.php');
	include_once($BASE_DIR .'database/invites.php');
	
	$projectInvites = invitedProjects($userInfo[0]['userid']);
	
	$smarty->assign('smartyUsrInfo', $userInfo);
  	$smarty->assign('smartyProjInvites', $projectInvites);

	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/admin/banUser.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>
