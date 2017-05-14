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
  
  $projID = $_GET['projID'];
  $smarty->assign('smartyProjID', $projID);
  
  $threads = getThreads($projID);
  $smarty->assign('smartyThreads', $threads);
  
  $numberComments = array();
  $usernames = array();
  $lastCommentUser = array();
  $lastCommentDate = array();
  
  foreach($threads as $thread){
	  $numberComments[] = numberOfComments($thread['threadid']);
	  $userInfo = getUserInformationByID($thread['userid']);
	  $usernames[] = $userInfo['0']['username'];
	  $lastComment = lastComment($thread['threadid']);
	  $lastCommentInfo = getUserInformationByID($lastComment['0']['userid']);
	  if(count($lastCommentInfo) != 0){
		$lastCommentUser[] = $lastCommentInfo['0']['username'];
		$lastCommentDate[] = $lastComment['0']['date'];
	  }
  }

  $smarty->assign('numberComments', $numberComments);
  $smarty->assign('usernames', $usernames);
  $smarty->assign('lastCommentUser', $lastCommentUser);
  $smarty->assign('lastCommentDate', $lastCommentDate);
  
  $smarty->display($BASE_DIR .'templates/common/header.tpl'); 
  $smarty->display($BASE_DIR .'templates/projects/projectForum.tpl');
  
  $smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>