<?php 
	include_once('../../../config/init.php');
	include_once($BASE_DIR .'database/Tasks/tasks.php');
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');
	
	$userInfo = getUserInformation($_SESSION['username']);
  	$smarty->assign('smartyUsrInfo', $userInfo);

	$projectInvites = invitedProjects($userInfo[0][userid]);
  	$smarty->assign('smartyProjInvites', $projectInvites);
	
	$taskID = $_GET['taskID'];
	$taskInfo = getInfoTask($taskID);
	$numberWorkers = getNumberUsers($taskID);
	
	$smarty->assign('smartyTaskID', $taskID);
	$smarty->assign('smartyInfo', $taskInfo);
	$smarty->assign('smartyWorkers', $numberWorkers);
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/tasks/taskPage.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>