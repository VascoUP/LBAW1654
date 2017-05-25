<?php 
	include_once('../../config/init.php');
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');
	
	if(!isset($_GET['userInfo']))
		$userID = getUserInformation($_SESSION['username'])['0']['userid'];
	else
		$userID = $_GET['userInfo'];
	
	$first = $_GET['user'];
	$smarty->assign('smartyUser', $first);
	
	$userInfoFirst = getUserInformationByID($first);
	$smarty->assign('smartyUserInfoFirst', $userInfoFirst);
	
	$userInfo = getUserInformationByID($userID);
  	$smarty->assign('smartyUsrInfo', $userInfo);

	$projectInvites = invitedProjects($userInfo[0]['userid']);
  	$smarty->assign('smartyProjInvites', $projectInvites);

  include_once($BASE_DIR .'database/prepareNotifications.php');

	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/profiles/profileUsrOverview.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>