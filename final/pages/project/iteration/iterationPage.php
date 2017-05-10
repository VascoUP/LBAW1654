<?php 
	include_once('../../../config/init.php');
	
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
	 
	foreach($tasks as $task){
		$numberUsers[] = getNumberUsers($task['taskID']);
	}
	
	$smarty->assign('smartyIterations', $iterations);
	$smarty->assign('smartyID', $itID);
	$smarty->assign('smartyTasks', $tasks);
	$smarty->assign('smartyNumberUsers', $numberUsers);
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/iterations/iterationPage.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>