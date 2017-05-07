<?php 
	include_once('../../../config/init.php');
	 include($BASE_DIR .'database/Iterations/iterations.php');
	
	$itID = $_GET['itID'];
	$iterations = getInfoIteration($itID);
	$smarty->assign('smartyIterations', $iterations);
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/iterations/iterationPage.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>