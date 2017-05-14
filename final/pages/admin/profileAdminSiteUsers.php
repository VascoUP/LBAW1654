<?php 
	include_once('../../config/init.php');
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
	include_once($BASE_DIR .'database/Users/userInformation.php');
		include_once($BASE_DIR .'database/Admin/getInformationSite.php');
	include_once($BASE_DIR .'database/invites.php');
	
	$userInfo = getUserInformation($_SESSION['username']);
  	$smarty->assign('smartyUsrInfo', $userInfo);

	$projectInvites = invitedProjects($userInfo[0]['userid']);
  	$smarty->assign('smartyProjInvites', $projectInvites);
	
	$usersActive = getSiteUsers('active');
	$smarty->assign('smartyUsersActive', $usersActive);
	
	$usersInactive = getSiteUsers('inactive');
	$smarty->assign('smartyUsersInactive', $usersInactive);
	
	$usersReported = getSiteUsers('reported');
	$smarty->assign('smartyUsersReported', $usersReported);
	
	$usersBanned = getSiteUsers('banned');
	$smarty->assign('smartyUsersBanned', $usersBanned);
	  
	$smarty->display($BASE_DIR .'templates/common/header.tpl'); 
	$smarty->display($BASE_DIR .'templates/admin/profileAdminSiteUsers.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');	
?>