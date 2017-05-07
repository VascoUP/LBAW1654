<?php 
	include_once('../../../config/init.php');
	
	$ID = $_GET['projID'];
	
	$smarty->assign('smartyProjID', $ID);
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/iterations/createIteration.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>