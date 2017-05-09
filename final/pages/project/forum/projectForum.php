<?php
  include_once('../../../config/init.php');
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');
	include_once($BASE_DIR .'database/Threads/threads.php')
	
	$userInfo = getUserInformation($_SESSION['username']);
	$smarty->assign('smartyUsrInfo', $userInfo);

	$projectInvites = invitedProjects($userInfo[0][userid]);
	$smarty->assign('smartyProjInvites', $projectInvites);
  
  $projID = $_GET['projID'];
  $smarty->assign('smartyProjID', $projID);
  
  $threads = getThreads($projID);
  $smarty->assign('smartyThreads', $projID);
  
  $numberComments = array();
  $usernames = array();
  $lastCommentUser = array();
  $lastCommentDate = array();
  
  foreach($threads as $thread){
	  $numberComments[] = numberOfComments($thread['threadid']);
	  $userInfo = getUserInformationByID($thread['userid'])
	  $usernames[] = $userInfo['username'];
	  $lastComment = lastComment($thread['threadid']);
	  $lastCommentUser[] = getUserInformationByID($lastComment['userid'])['username'];
	  $lastCommentDate[] = $lastComment['date'];
  }

  $smarty->display($BASE_DIR .'templates/common/header.tpl'); 
  $smarty->display($BASE_DIR .'templates/projects/projectForum.tpl');
  
  $smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>