<?php
	include_once('../../config/init.php');

	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/Admin/siteStatistics.php');
	include_once($BASE_DIR .'database/Admin/validateAdmin.php');

	$userStatistics = getUserStatistics();
	$userStatus = getUserStatusStatistics();
	$reportStatistics = getReportsStatistics();
	$projects = getProjectStatistics();
	
	$smarty->assign('smartyUsrInfo', $userInfo);
	$smarty->assign('userStatistics', $userStatistics);
	$smarty->assign('userStatus', $userStatus);
	$smarty->assign('reportStatistics', $reportStatistics);
	$smarty->assign('projects', $projects);

	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/admin/siteStatistics.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>
