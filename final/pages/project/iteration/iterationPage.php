<?php 
	include_once('../../../config/init.php');
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
	include_once($BASE_DIR .'database/Iterations/iterations.php');
	include_once($BASE_DIR .'database/Tasks/tasks.php');
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');
		
	$userInfo = getUserInformation($_SESSION['username']);
	$smarty->assign('smartyUsrInfo', $userInfo);

	$projectInvites = invitedProjects($userInfo[0]['userid']);
	$smarty->assign('smartyProjInvites', $projectInvites);
	
	$itID = $_GET['itID'];
	$iterations = getInfoIteration($itID);
	
	$tasks = getTasks($itID);
	$numberUsers = array();
	$numberTasks = numberTasksCompleted($itID);
	
	$userPermissions = userWithPermission($itID, $userInfo['0']['userid']);
	 
	foreach($tasks as $task){
		$numberUsers[] = getNumberUsers($task['taskid']);
	}
	
	$smarty->assign('smartyIterations', $iterations);
	$smarty->assign('smartyID', $itID);
	$smarty->assign('smartyTasks', $tasks);
	$smarty->assign('smartyNumberUsers', $numberUsers);
	$smarty->assign('smartyNumberTasks', $numberTasks);
	$smarty->assign('smartyPermission', $userPermissions);
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/iterations/iterationPage.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>