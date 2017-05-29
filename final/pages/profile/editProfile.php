<?php 
	include_once('../../config/init.php');	
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');
	$userInfo = getUserInformation($_SESSION['username']);
	$projectInvites = invitedProjects($userInfo[0]['userid']);
  	include_once($BASE_DIR .'database/prepareNotifications.php');

  	$smarty->assign('smartyProjInvites', $projectInvites);
  	$smarty->assign('smartyUsrInfo', $userInfo);
	$smarty->assign('smartyUser', false);
	$smarty->assign('PAGE_TEMPLATE', $BASE_DIR .'templates/profiles/editProfile.tpl');

    if( $userType == 'administrator' )
  		$smarty->assign('SIDEBAR_TEMPLATE', $BASE_DIR .'/templates/admin/adminSidebar.tpl');
	else
		$smarty->assign('SIDEBAR_TEMPLATE', $BASE_DIR .'/templates/profiles/profileSidebar.tpl');
	
	$smarty->assign('admin', $userType);
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
  	$smarty->display($BASE_DIR .'templates/page.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>