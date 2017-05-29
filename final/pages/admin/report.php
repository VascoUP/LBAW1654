<?php 
	include_once('../../config/init.php');
	
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');
	include_once($BASE_DIR .'database/Admin/getInformationSite.php');
	include_once($BASE_DIR .'database/Users/userInformation.php');
    
    $user = $_SESSION['username'];
	if( !isset($user) || !$user ) {
		header("Location: https://gnomo.fe.up.pt" . $BASE_URL . "pages/general/mainPage.php");
		die();
	}
	
    $userInfo = getUserInformation($user);
	
	if(isset($_GET['userID'])){
		$userID = $_GET['userID'];
		$smarty->assign('smartyUserID', $userID);
	}
	else if(isset($_GET['threadID']) && isset($_GET['projID'])){
		$threadID = $_GET['threadID'];
		$smarty->assign('smartyThreadID', $threadID);
		
		$projID = $_GET['projID'];
		$smarty->assign('smartyProjID', $projID);
	}
	else if(isset($_GET['taskID']) && isset($_GET['projID'])){
		$taskID = $_GET['taskID'];
		$smarty->assign('smartyTaskID', $taskID);
		
		$projID = $_GET['projID'];
		$smarty->assign('smartyProjID', $projID);
	}
	else if(isset($_GET['projID'])){
		$projID = $_GET['projID'];
		$smarty->assign('smartyProjID', $projID);
	}
	else {
		header("Location: https://gnomo.fe.up.pt" . $BASE_URL . "pages/general/mainPage.php");
		die();
	}

	$projectInvites = invitedProjects($userInfo[0]['userid']);
  	$smarty->assign('smartyProjInvites', $projectInvites);

	$smarty->display($BASE_DIR .'templates/common/header.tpl');
	$smarty->display($BASE_DIR .'templates/admin/report.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>