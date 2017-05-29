<?php
	include_once('../../../config/init.php');
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');
	include_once($BASE_DIR .'database/Threads/threads.php');
	include_once($BASE_DIR .'database/Projects/validateUser.php');
	include_once($BASE_DIR .'database/prepareNotifications.php');
	include_once($BASE_DIR .'database/projectInfo.php');
	
	$forumID = $_GET['forumID'];
	$taskID = $_GET['taskID'];
	$comments = getComments($forumID);

	$userInformation = array();
	foreach($comments as $comment) {
		$aux = getUserInformationByID($comment['userid'])['0'];
		$userInformation[] = $aux;
	}

	$smarty->assign('smartyComments', $comments);
	$smarty->assign('smartyUserInformation', $userInformation);
	$smarty->assign('smartyUsrInfo', $userInfo);
	$smarty->assign('smartyProjID', $projID);
	$smarty->assign('smartyForumID', $forumID);
	$smarty->assign('smartyTaskID', $taskID);
	$smarty->assign('collaborator', $isCollaborator);
 $smarty->assign('varSideBar', 4);
	$smarty->assign('collaborator', $isCollaborator);
	$smarty->assign('userIsCoord', $userIsCoord);
	$smarty->assign('type', $userType);
  	$smarty->assign('PAGE_TEMPLATE', $BASE_DIR .'templates/forums/forum.tpl');
    $smarty->assign('SIDEBAR_TEMPLATE', $BASE_DIR .'/templates/projects/projectSideBar.tpl');
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
  	$smarty->display($BASE_DIR .'templates/page.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>