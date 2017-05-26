<?php
	include_once('../../config/init.php');

	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/Users/userStatistics.php');
    $userInfo = getUserInformation($_SESSION['username']);
    $userType = $userInfo[0]['type'];

    if( !($_SESSION['username']) ) {
        header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
        die();
    }

	$userID = $_GET['userInfo'];
	
	$userStatistics = getUserStatistics($userID);
	$smarty->assign('smartyUsrInfo', $userInfo);
	$smarty->assign('userStatistics', $userStatistics);
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/profiles/userStatistics.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>
