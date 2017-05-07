<?php 
	include_once('../../../config/init.php');
	
	$id = $_GET['itID'];
	
	$smarty->assign('smartyItID', $id);
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/iterations/editIteration.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>