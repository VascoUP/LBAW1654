<?php
	include_once('../../config/init.php');

	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/Users/siteStatistics.php');
    $userInfo = getUserInformation($_SESSION['username']);
    $userType = $userInfo[0]['type'];

    if( !($_SESSION['username'] && $userType == 'administrator') ) {
        header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
        die();
    }

	$userStatistics = getUserStatistics();
	
	$smarty->assign('smartyUsrInfo', $userInfo);
	$smarty->assign('userStatistics', $userStatistics);

	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/admin/siteStatistics.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>
