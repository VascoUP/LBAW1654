<?php
	include_once('../../config/init.php');

	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/Projects/statistics.php');
    $userInfo = getUserInformation($_SESSION['username']);
    $userType = $userInfo[0]['type'];

    if( !($_SESSION['username']) ) {
        header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
        die();
    }

	$projID = $_GET['projID'];
	
	$tasksIteration = taskCompletedPerIteration($projID);
	$reports = reports($projID);
	$numberOf = numberOf($projID);
	
	$smarty->assign('projID', $projID);
	$smarty->assign('smartyUsrInfo', $userInfo);
	$smarty->assign('tasksIteration', $tasksIteration);
	$smarty->assign('reports', $reports);
	$smarty->assign('numberOf', $numberOf);
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/projects/statisticsProject.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>