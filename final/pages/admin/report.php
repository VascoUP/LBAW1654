<?php 
	include_once('../../config/init.php');
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');

	$userInfo = getUserInformation($_SESSION['username']);
  	$smarty->assign('smartyUsrInfo', $userInfo);
	
	if(isset($_GET['userID'])){
		$userID = $_GET['userID'];
		$smarty->assign('smartyUserID', $userID);
	}
	else if(isset($_GET['threadID'])){
		$threadID = $_GET['threadID'];
		$smarty->assign('smartyThreadID', $threadID);
	}
	else if(isset($_GET['taskID'])){
		$taskID = $_GET['taskID'];
		$smarty->assign('smartyTaskID', $taskID);
	}

	$projectInvites = invitedProjects($userInfo[0]['userid']);
  	$smarty->assign('smartyProjInvites', $projectInvites);

	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/admin/report.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>