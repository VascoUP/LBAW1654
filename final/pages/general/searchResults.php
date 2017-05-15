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
	
	$search = $_GET['search'];
	echo $search;
	$projects = searchProjects($search);
	$users = searchUsers($search);
	
	$smarty->assign('smartyUsers', $users);
	$smarty->assign('smartyProjs', $projects);
	
	echo count($projects);
	echo count($users);
	echo $users['0']['username'];
	echo $projects['0']['description'];
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/general/searchResults.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>