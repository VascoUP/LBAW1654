<?php
	include_once('../../config/init.php');

	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/Admin/validateAdmin.php');
	include_once($BASE_DIR .'database/Admin/getInformationSite.php');
	include_once($BASE_DIR .'database/invites.php');
	
	$projectInvites = invitedProjects($userInfo[0]['userid']);
	$usersActive = getSiteUsers('active');
	$usersInactive = getSiteUsers('inactive');
	$usersReported = getSiteUsers('reported');
	$usersBanned = getSiteUsers('banned');

  	$smarty->assign('smartyUsrID', $userInfo[0]['userid']);
  	$smarty->assign('smartyUsrInfo', $userInfo);
  	$smarty->assign('smartyProjInvites', $projectInvites);
	$smarty->assign('smartyUsersActive', $usersActive);
	$smarty->assign('smartyUsersInactive', $usersInactive);
	$smarty->assign('smartyUsersReported', $usersReported);
	$smarty->assign('smartyUsersBanned', $usersBanned);

	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/admin/profileAdminSiteUsers.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>
