<?php
	include_once('../../../config/init.php');
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');
	include_once($BASE_DIR .'database/Threads/threads.php');
	
	$userInfo = getUserInformation($_SESSION['username']);
	$smarty->assign('smartyUsrInfo', $userInfo);

	$projectInvites = invitedProjects($userInfo[0][userid]);
	$smarty->assign('smartyProjInvites', $projectInvites);
	
	$forumID = $_GET['forumID'];
	$smarty->assign('smartyForumID', $forumID);
	
	$comments = getComments($forumID);
	$userInformation = array();
	
	foreach($comments as $comment){
		$userInformation = getUserInformationByID($comment['userid']);
	}

	$smarty->assign('smartyComments', $comments);
	$smarty->assign('smartyUserInformation', $userInformation)
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/forums/forum.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>