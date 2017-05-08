<?php 
	include_once('../../../config/init.php');
	
	$itID = $_GET['itID'];
	$smarty->assign('smartyItID', $itID);
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/tasks/createTask.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>
