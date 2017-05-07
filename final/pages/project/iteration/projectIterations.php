<?php
  include_once('../../../config/init.php');
    include($BASE_DIR .'database/Iterations/iterations.php');
  
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