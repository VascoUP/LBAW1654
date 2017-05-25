<?php
	include_once('../../../config/init.php');
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');
	include_once($BASE_DIR .'database/Threads/threads.php');
	
	$userInfo = getUserInformation($_SESSION['username']);
	$smarty->assign('smartyUsrInfo', $userInfo);
	
	$projectInvites = invitedProjects($userInfo[0]['userid']);
	$smarty->assign('smartyProjInvites', $projectInvites);
	
	$forumID = $_GET['forumID'];
	$smarty->assign('smartyForumID', $forumID);
	
	$taskID = $_GET['taskID'];
	$smarty->assign('smartyTaskID', $taskID);
	
	$comments = getComments($forumID);
	$userInformation = array();
	
	$projID = getProject($forumID);
	$smarty->assign('smartyProjID', $projID);
	
	foreach($comments as $comment){
		$aux = getUserInformationByID($comment['userid'])['0'];
		$userInformation[] = $aux;
	}

	$smarty->assign('smartyComments', $comments);
	$smarty->assign('smartyUserInformation', $userInformation);

  include_once($BASE_DIR .'database/prepareNotifications.php');
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/forums/forum.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>