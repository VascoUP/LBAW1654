<?
	include_once('../../config/init.php');

	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/Admin/validateAdmin.php');
	include_once($BASE_DIR .'database/Admin/getInformationSite.php');
	include_once($BASE_DIR .'database/invites.php');
	
	$projectInvites = invitedProjects($userInfo[0]['userid']);
	$projectsActive = getSiteProjects('active');
	$projectsReported = getSiteProjects('reported');
	$projectsBanned = getSiteProjects('banned');
	
  	$smarty->assign('smartyUsrInfo', $userInfo);
  	$smarty->assign('smartyProjInvites', $projectInvites);
	$smarty->assign('smartyProjectsActive', $projectsActive);
	$smarty->assign('smartyProjectsReported', $projectsReported);
	$smarty->assign('smartyProjectsBanned', $projectsBanned);

	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/admin/profileAdminSiteProjects.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>
