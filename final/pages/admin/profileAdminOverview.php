<?php 
	include_once('../../config/init.php');
	include($BASE_DIR .'database/Users/userInformation.php'); 
	
	$userInfo = getUserInformation($_SESSION['username']);
  	$smarty->assign('smartyUsrInfo', $userInfo);
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/admin/profileAdminOverview.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>