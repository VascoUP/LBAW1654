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
  	$smarty->assign('smartyUsrInfo', $userInfo);
	
	$projects = getProjects($userID);
	$smarty->assign('projects', $projects);
	
	$projectsCoord = getProjectsCoordinator($userID);
	$smarty->assign('projectsCoord', $projectsCood);
	
	$projectsCollab = getProjectsCollaborator($userID);
	$smarty->assign('projectsCollab', $projectsCollab);
	
	$projectInvites = invitedProjects($userID);
  	$smarty->assign('smartyProjInvites', $projectInvites);

	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/profiles/userProjects.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>