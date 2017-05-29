<?php
	include_once('../../../config/init.php');
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/Tasks/tasks.php');
	include_once($BASE_DIR .'database/invites.php');
	include_once($BASE_DIR .'database/Projects/validateUser.php');
	include_once($BASE_DIR .'database/prepareNotifications.php');
	include_once($BASE_DIR .'database/projectInfo.php');
	
	$taskID = $_GET['taskID'];
	$taskName = getInfoTask($taskID)['0']['name'];

	$smarty->assign('smartyUsrInfo', $userInfo);
	$smarty->assign('smartyProjID', $projID);
	$smarty->assign('smartyTaskID', $taskID);
	$smarty->assign('smartyTaskName', $taskName);
	$smarty->assign('varSideBar', 3);
	$smarty->assign('collaborator', $isCollaborator);
	$smarty->assign('userIsCoord', $userIsCoord);
	$smarty->assign('type', $userType);
  	$smarty->assign('PAGE_TEMPLATE', $BASE_DIR .'templates/forums/createForumTask.tpl');
    $smarty->assign('SIDEBAR_TEMPLATE', $BASE_DIR .'/templates/projects/projectSideBar.tpl');

	$smarty->display($BASE_DIR .'templates/common/header.tpl');
  	$smarty->display($BASE_DIR .'templates/page.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>