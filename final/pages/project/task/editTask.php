<?php 
	include_once('../../../config/init.php');
	
	$id = $_GET['taskID'];
	
	$smarty->assign('smartyTaskID', $id);
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/tasks/editTask.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>
