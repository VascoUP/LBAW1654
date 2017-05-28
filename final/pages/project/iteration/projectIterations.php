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
	include_once($BASE_DIR .'database/Projects/validateUser.php');
	include_once($BASE_DIR .'database/prepareNotifications.php');
	include_once($BASE_DIR .'database/projectInfo.php');
	
  $iterations = getProjectIterations($projID);
  $iterationCounter = array();
  $numberCompletedTasks = array();
  
  foreach($iterations as $iteration){
    $iterationCounter[] = numberTasks($iteration['iterationid']);
    $numberCompletedTasks[] = numberTasksCompleted($iteration['iterationid']);
  }

	$smarty->assign('smartyUsrInfo', $userInfo);
  $smarty->assign('smartyProjID', $projID);
  $smarty->assign('smartyIterations', $iterations);
  $smarty->assign('smartyIterationsCounter', $iterationCounter);
  $smarty->assign('numberTasksCompleted', $numberCompletedTasks);
 	$smarty->assign('PAGE_TEMPLATE', $BASE_DIR .'templates/projects/projectIterations.tpl');
	$smarty->assign('varSideBar', 3);
	
	$smarty->assign('collaborator', $isCollaborator);
	$smarty->assign('userIsCoord', $userIsCoord);
	
	$smarty->assign('type', $userType);
	
  $smarty->display($BASE_DIR .'templates/common/header.tpl'); 
  $smarty->display($BASE_DIR .'templates/projects/project.tpl');
  $smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>