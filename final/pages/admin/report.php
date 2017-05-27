<?php 
	include_once('../../config/init.php');

	include_once($BASE_DIR .'database/Admin/validateAdmin.php');	
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');
	
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
	if(isset($_GET['projID'])){
		$projID = $_GET['projID'];
		$smarty->assign('smartyProjID', $projID);
	}

	$projectInvites = invitedProjects($userInfo[0]['userid']);
  	$smarty->assign('smartyProjInvites', $projectInvites);

	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/admin/report.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>