<?php 
	include_once('../../config/init.php');
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
	include_once($BASE_DIR .'database/Users/userInformation.php');
	$userID = $_GET['userID'];
	$projects = getProjects($userID);
	$userInfo = getUserInformationByID($userID);
  	include_once($BASE_DIR .'database/prepareNotifications.php');

	$smarty->assign('userID', $userID);
	$smarty->assign('projects', $projects);
	$smarty->assign('smartyUsrInfo', $userInfo);
	$smarty->assign('PAGE_TEMPLATE', $BASE_DIR .'templates/profiles/projects.tpl');
	$smarty->assign('SIDEBAR_TEMPLATE', $BASE_DIR .'templates/profiles/profileSidebar.tpl');
	$smarty->assign('varSideBar', 2);
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
  	$smarty->display($BASE_DIR .'templates/page.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>