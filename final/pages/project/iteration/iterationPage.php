<?php 
	include_once('../../../config/init.php');
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/Iterations/iterations.php');
	include_once($BASE_DIR .'database/Tasks/tasks.php');
	include_once($BASE_DIR .'database/invites.php');
	include_once($BASE_DIR .'database/Projects/validateUser.php');
	include_once($BASE_DIR .'database/prepareNotifications.php');
	include_once($BASE_DIR .'database/projectInfo.php');

	$itID = $_GET['itID'];
	$iterations = getInfoIteration($itID);
	
	$tasks = getTasks($itID);
	$numberUsers = array();
	$numberTasks = numberTasksCompleted($itID);
	
	$userPermissions = userWithPermission($itID, $userInfo['0']['userid']);
	 
	foreach($tasks as $task){
		$numberUsers[] = getNumberUsers($task['taskid']);
	}

	$smarty->assign('smartyUsrInfo', $userInfo);
	$smarty->assign('smartyProjID', $projID);
	$smarty->assign('smartyIterations', $iterations);
	$smarty->assign('smartyID', $itID);
	$smarty->assign('smartyTasks', $tasks);
	$smarty->assign('smartyNumberUsers', $numberUsers);
	$smarty->assign('smartyNumberTasks', $numberTasks);
	$smarty->assign('smartyPermission', $userPermissions);
 	$smarty->assign('PAGE_TEMPLATE', $BASE_DIR .'templates/iterations/iterationPage.tpl');
  	$smarty->assign('SIDEBAR_TEMPLATE', $BASE_DIR .'/templates/projects/projectSideBar.tpl');
	$smarty->assign('collaborator', $isCollaborator);
	$smarty->assign('userIsCoord', $userIsCoord);
  	$smarty->assign('varSideBar', 3);
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
  	$smarty->display($BASE_DIR .'templates/page.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>