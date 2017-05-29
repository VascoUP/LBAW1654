<?php
	include_once('../../config/init.php');

    if( !($_SESSION['username']) ) {
        header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
        die();
    }

	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/Users/userStatistics.php');

    $userInfo = getUserInformation($_SESSION['username']);
    $userType = $userInfo[0]['type'];
	$userID = $_GET['userInfo'];
	$userStatistics = getUserStatistics($userID);

	$smarty->assign('smartyUsrInfo', $userInfo);
	$smarty->assign('userStatistics', $userStatistics);
	
	if(isset($_GET['user']))
		$smarty->assign('smartyUser', $_GET['user']);
	else
		$smarty->assign('smartyUser', false);
	
	$smarty->assign('PAGE_TEMPLATE', $BASE_DIR .'templates/profiles/userStatistics.tpl');
	$smarty->assign('SIDEBAR_TEMPLATE', $BASE_DIR .'templates/profiles/profileSidebar.tpl');
	$smarty->assign('varSideBar', 4);
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/page.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>
