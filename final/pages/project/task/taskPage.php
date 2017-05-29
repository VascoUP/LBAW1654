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
	include_once($BASE_DIR .'database/Projects/validateUser.php');
	include_once($BASE_DIR .'database/prepareNotifications.php');
	include_once($BASE_DIR .'database/projectInfo.php');
	
	$taskID = $_GET['taskID'];
	$taskInfo = getInfoTask($taskID);
	
	$iterationID = $taskInfo['0']['iterationid'];
	$projID = getInfoIteration($iterationID)['0']['projectid'];
	
	$userPermissions = userWithPermission($iterationID, $userInfo['0']['userid']);
	
	$numberWorkers = getNumberUsers($taskID);
	
	$numberTasks = numberTasks($iterationID);
	$numberTasksCompleted = numberTasksCompleted($iterationID);

	if($numberTasks == $numberTasksCompleted)
		$value = 1;
	else
		$value = 0;

	$userTask = getUserTask($userInfo['0']['userid'], $taskID);
	
  	$smarty->assign('smartyUsrInfo', $userInfo);
	$smarty->assign('userTask', $userTask);
  	$smarty->assign('smartyProjID', $projID);
	$smarty->assign('smartyTaskID', $taskID);
	$smarty->assign('smartyInfo', $taskInfo);
	$smarty->assign('smartyWorkers', $numberWorkers);
	$smarty->assign('smartyIterationID', $iterationID);
	$smarty->assign('smartyProjectID', $projID);
	$smarty->assign('smartyPermission', $userPermissions);
	$smarty->assign('smartyTaskValue', $value);
  	$smarty->assign('PAGE_TEMPLATE', $BASE_DIR .'templates/tasks/taskPage.tpl');
  	$smarty->assign('SIDEBAR_TEMPLATE', $BASE_DIR .'templates/projects/projectSideBar.tpl');
	$smarty->assign('varSideBar', 3);
	$smarty->assign('collaborator', $isCollaborator);
	$smarty->assign('userIsCoord', $userIsCoord);
	$smarty->assign('type', $userType);
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
  	$smarty->display($BASE_DIR .'templates/page.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>