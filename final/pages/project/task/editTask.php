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
	
	$id = $_GET['taskID'];
	$status = getInfoTask($id)['0']['status'];

  	$smarty->assign('smartyUsrInfo', $userInfo);
	$smarty->assign('smartyTaskID', $id);
	$smarty->assign('smartyTaskStatus', $status);
  	$smarty->assign('PAGE_TEMPLATE', $BASE_DIR .'templates/tasks/editTask.tpl');
  	$smarty->assign('SIDEBAR_TEMPLATE', $BASE_DIR .'templates/projects/projectSideBar.tpl');
	$smarty->assign('varSideBar', 3);
	$smarty->assign('collaborator', $isCollaborator);
	$smarty->assign('userIsCoord', $userIsCoord);
	$smarty->assign('type', $userType);
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
  	$smarty->display($BASE_DIR .'templates/page.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>
