<?php 
	include_once('../../config/init.php');
	
	$userID = $_GET['userID'];
	$smarty->assign('userID', $userID);
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/general/contactPage.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>