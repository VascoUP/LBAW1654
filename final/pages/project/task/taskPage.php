<?php 
	include_once('../../../config/init.php');
	include($BASE_DIR .'database/Tasks/tasks.php');
	
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