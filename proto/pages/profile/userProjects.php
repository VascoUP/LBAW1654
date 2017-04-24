<?php 
	include_once('../../config/init.php');
	include($BASE_DIR .'database/Projects/projectInformation.php'); 
	
	$projects = getProjects($_SESSION['username']);
	$userInfo = getUserInformation($_SESSION['username']);
	
  	$smarty->assign('smartyUsrInfo', $userInfo);
	$smarty->assign('projects', $projects);

	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/profiles/userProjects.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>