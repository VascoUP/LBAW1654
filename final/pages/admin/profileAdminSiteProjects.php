<?
	include_once('../../config/init.php');

	include_once($BASE_DIR .'database/Users/userInformation.php');
    $userInfo = getUserInformation($_SESSION['username']);
    $userType = $userInfo[0]['type'];

    if( !($_SESSION['username'] && $userType == 'administrator') ) {
        header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
        die();
    }

	include_once($BASE_DIR .'database/Admin/getInformationSite.php');
	include_once($BASE_DIR .'database/invites.php');
	
  	$smarty->assign('smartyUsrInfo', $userInfo);

	$projectInvites = invitedProjects($userInfo[0]['userid']);
  	$smarty->assign('smartyProjInvites', $projectInvites);

	$projectsActive = getSiteProjects('active');
	$smarty->assign('smartyProjectsActive', $projectsActive);

	$projectsReported = getSiteProjects('reported');
	$smarty->assign('smartyProjectsReported', $projectsReported);

	$projectsBanned = getSiteProjects('banned');
	$smarty->assign('smartyProjectsBanned', $projectsBanned);

	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/admin/profileAdminSiteProjects.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>
