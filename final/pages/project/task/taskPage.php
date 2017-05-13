<?php 
	include_once('../../../config/init.php');
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
  	include_once($BASE_DIR .'database/Projects/validateUser.php');
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
	
	$iterationID = $taskInfo['0']['iterationid'];
	$projID = getInfoIteration($iterationID)['0']['projectid'];
	
	$userPermissions = userWithPermission($iterationID, $userInfo['0']['userid']);
	
	$numberWorkers = getNumberUsers($taskID);
	
	$smarty->assign('smartyTaskID', $taskID);
	$smarty->assign('smartyInfo', $taskInfo);
	$smarty->assign('smartyWorkers', $numberWorkers);
	$smarty->assign('smartyIterationID', $iterationID);
	$smarty->assign('smartyProjectID', $projID);
	$smarty->assign('smartyPermission', $userPermissions);
	
	$numberTasks = numberTasks($iterationID);
	$numberTasksCompleted = numberTasksCompleted($iterationID);

	if($numberTasks == $numberTasksCompleted)
		$value = 1;
	else
		$value = 0;
	
	$smarty->assign('smartyTaskValue', $value);
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/tasks/taskPage.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>