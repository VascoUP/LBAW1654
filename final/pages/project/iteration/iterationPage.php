<?php 
	include_once('../../../config/init.php');
	 include($BASE_DIR .'database/Iterations/iterations.php');
	 include($BASE_DIR .'database/Tasks/tasks.php');
	
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