<?php
  include_once('../../../config/init.php');
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
  include_once($BASE_DIR .'database/Iterations/iterations.php');
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');
		
	$userInfo = getUserInformation($_SESSION['username']);
	$smarty->assign('smartyUsrInfo', $userInfo);

	$projectInvites = invitedProjects($userInfo[0]['userid']);
	$smarty->assign('smartyProjInvites', $projectInvites);
  
  $projID = $_GET['projID'];
  $smarty->assign('smartyProjID', $projID);
  
  $iterations = getProjectIterations($projID);
  $smarty->assign('smartyIterations', $iterations);
  
  $iterationCounter = array();
  
  foreach($iterations as $iteration){
	$iterationCounter[] = numberTasks($iteration['iterationID']);
  }

  $smarty->assign('smartyIterationsCounter', $iterationCounter);
  
  $smarty->display($BASE_DIR .'templates/common/header.tpl'); 
  $smarty->display($BASE_DIR .'templates/projects/projectIterations.tpl');
  
  $smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>