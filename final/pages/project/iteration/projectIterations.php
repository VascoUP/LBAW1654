<?php
  include_once('../../../config/init.php');
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
  include_once($BASE_DIR .'database/Iterations/iterations.php');
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/Projects/projectInformation.php');
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
  $numberCompletedTasks = array();
  
  foreach($iterations as $iteration){
	$iterationCounter[] = numberTasks($iteration['iterationid']);
	$numberCompletedTasks[] = numberTasksCompleted($iteration['iterationid']);
  }

  $smarty->assign('smartyIterationsCounter', $iterationCounter);
  $smarty->assign('numberTasksCompleted', $numberCompletedTasks);
  
  $smarty->display($BASE_DIR .'templates/common/header.tpl'); 
  $smarty->display($BASE_DIR .'templates/projects/projectIterations.tpl');
  
  $smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>