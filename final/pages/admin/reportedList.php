<?php
	include_once('../../config/init.php');

	include_once($BASE_DIR .'database/Users/userInformation.php');
    $userInfo = getUserInformation($_SESSION['username']);
    $userType = $userInfo[0]['type'];

    if( !($_SESSION['username'] && $userType == 'administrator') ) {
        header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
        die();
    }

	include_once($BASE_DIR .'database/Admin/report.php');
	include_once($BASE_DIR .'database/Threads/threads.php');
	include_once($BASE_DIR .'database/Tasks/tasks.php');
	
	include_once($BASE_DIR .'database/invites.php');
	
  	$smarty->assign('smartyUsrInfo', $userInfo);

	$projectInvites = invitedProjects($userInfo[0]['userid']);
  	$smarty->assign('smartyProjInvites', $projectInvites);
	
	$handled = getReported('handled');
	$reported = getReported('waiting');
	
	$namesHandled = array();
	$namesReported = array();
	
	foreach($handled as $h){
		if($h['userid'])
			$namesHandled[] = getUserInformationByID($h['userid'])['0']['username'];
		else if($h['taskid'])
			$namesHandled[] = getInfoTask($h['taskid'])['0']['name'];
		else if($h['threadid'])
			$namesHandled[] = getThreadInfo($h['threadid'])['0']['title'];			
	}
	
	echo $handled;
	echo count($handled);
	
	foreach($reported as $r){
		if($r['userid'])
			$namesReported[] = getUserInformationByID($r['userid'])['0']['username'];
		else if($r['taskid'])
			$namesReported[] = getInfoTask($r['taskid'])['0']['name'];
		else if($r['threadid'])
			$namesReported[] = getThreadInfo($r['threadid'])['0']['title'];			
	}
	
	$userReport = getUsersReported();
	
	echo $userReport;
	echo count($userReport);
	
	$usernames = array();
	
	foreach($userReport as $userRep)
		$usernames[] = getUserInformationByID($userRep['userid'])['0']['username'];
		
	$taskReport = getTaskReported();
	
	$names = array();
	
	foreach($taskReport as $taskRep)
		$names[] = getInfoTask($taskRep['taskid'])['0']['name'];
		
	$threadReport = getThreadReported();
	
	$titles = array();
	
	foreach($threadReport as $threadRep)
		$titles[] = getThreadInfo($threadRep['threadid'])['0']['title'];
		
	$smarty->assign('handled', $handled);
	$smarty->assign('reported', $reported);
	$smarty->assign('userReport', $userReport);
	$smarty->assign('taskReport', $taskReport);
	$smarty->assign('threadReport', $threadReport);
	$smarty->assign('namesHandled', $namesHandled);
	$smarty->assign('namesReported', $namesReported);
	$smarty->assign('usernames', $usernames);
	$smarty->assign('names', $names);
	$smarty->assign('titles', $titles);

	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/admin/reportedList.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>
