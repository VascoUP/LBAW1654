<?php 
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/userInformation.php'); 
	
	$userInfo = getUserInformation($_SESSION['username']);
  	$smarty->assign('smartyUsrInfo', $userInfo);

	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/profiles/profileUsrOverview.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>