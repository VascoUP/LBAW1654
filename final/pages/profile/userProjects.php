<?php 
	include_once('../../config/init.php');
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
	include_once($BASE_DIR .'database/Projects/projectInformation.php');
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');
	$userID = $_GET['userInfo'];
	$userInfo = getUserInformationByID($userID);
	$projects = getProjects($userID);
	$top = getTop5($userID);
	$projectsCoord = getProjectsCoordinator($userID);
	$projectsCollab = getProjectsCollaborator($userID);
	$projectInvites = invitedProjects($userID);
  	include_once($BASE_DIR .'database/prepareNotifications.php');

  	$smarty->assign('smartyUsrInfo', $userInfo);
	$smarty->assign('top', $top);
	$smarty->assign('projects', $projects);
	$smarty->assign('projectsCoord', $projectsCoord);
	$smarty->assign('projectsCollab', $projectsCollab);
  	$smarty->assign('smartyProjInvites', $projectInvites);
	
	if(isset($_GET['user']))
		$smarty->assign('smartyUser', $_GET['user']);
	else
		$smarty->assign('smartyUser', false);
	$smarty->assign('PAGE_TEMPLATE', $BASE_DIR .'templates/profiles/userProjects.tpl');
	$smarty->assign('SIDEBAR_TEMPLATE', $BASE_DIR .'/templates/profiles/profileSidebar.tpl');

	$smarty->display($BASE_DIR .'templates/common/header.tpl');
  	$smarty->display($BASE_DIR .'templates/page.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>