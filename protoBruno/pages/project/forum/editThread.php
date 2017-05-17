<?php
	include_once('../../../config/init.php');
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
  	include_once($BASE_DIR .'database/Projects/validateUser.php');
	include($BASE_DIR .'database/Users/userInformation.php');
	include($BASE_DIR .'database/invites.php');
	
	$forum = $_GET['forumID'];
	$smarty->assign('smartyForumID', $forum);
	
	$userInfo = getUserInformation($_SESSION['username']);
	$smarty->assign('smartyUsrInfo', $userInfo);

	$projectInvites = invitedProjects($userInfo[0]['userid']);
	$smarty->assign('smartyProjInvites', $projectInvites);

	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/forums/editThread.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>