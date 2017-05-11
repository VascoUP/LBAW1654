<?php 
	include_once('../../../config/init.php');
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
	include_once($BASE_DIR .'database/Tasks/tasks.php');
	include_once($BASE_DIR .'database/Iterations/iterations.php');
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');
	
	$userInfo = getUserInformation($_SESSION['username']);
  	$smarty->assign('smartyUsrInfo', $userInfo);

	$projectInvites = invitedProjects($userInfo[0]['userid']);
  	$smarty->assign('smartyProjInvites', $projectInvites);
	
	$taskID = $_GET['taskID'];
	$taskInfo = getInfoTask($taskID);
	$numberWorkers = getNumberUsers($taskID);
	
	$smarty->assign('smartyTaskID', $taskID);
	$smarty->assign('smartyInfo', $taskInfo);
	$smarty->assign('smartyWorkers', $numberWorkers);
	
	$numberTasks = numberTasks($taskInfo['0']['iterationID']);
	$numberTasksCompleted = numberTasksCompleted($taskInfo['0']['iterationID']);
	
	if($numberTasks == $numberTasksCompleted)
		$value = 1;
	else
		$value = 0;
	
	$smarty->assign('smartyTaskValue', $value);
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/tasks/taskPage.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>