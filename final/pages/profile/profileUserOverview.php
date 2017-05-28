<?php 
	include_once('../../config/init.php');	
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');
	include_once($BASE_DIR .'database/Profile/validateUserOverview.php');
  	include_once($BASE_DIR .'database/prepareNotifications.php');
		
	if(isset($_GET['searchUser']))
		$projectInvites = invitedProjects($first);
	else
		$projectInvites = invitedProjects($userInfo[0]['userid']);

	$smarty->assign('smartyUser', $first);
	$smarty->assign('smartyUserInfoFirst', $userInfoFirst);
  	$smarty->assign('smartyUsrInfo', $userInfo);
  	$smarty->assign('smartyProjInvites', $projectInvites);
  	$smarty->assign('PAGE_TEMPLATE', $BASE_DIR .'templates/profiles/profileUsrOverview.tpl');
  	$smarty->assign('SIDEBAR_TEMPLATE', $BASE_DIR .'/templates/profiles/profileSidebar.tpl');

	$smarty->display($BASE_DIR .'templates/common/header.tpl');
  	$smarty->display($BASE_DIR .'templates/page.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>