<?php 
	include_once('../../../config/init.php');
		
	$userInfo = getUserInformation($_SESSION['username']);
	$smarty->assign('smartyUsrInfo', $userInfo);

	$projectInvites = invitedProjects($userInfo[0][userid]);
	$smarty->assign('smartyProjInvites', $projectInvites);
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/tasks/taskPage.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>