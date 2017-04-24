<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/Projects/projectInformation.php'); 

  $projID = $_GET['projID'];
  $smarty->assign('smartyProjID', $projID);
  $smarty->assign('smartyProjInfo', getProjectInformation($projID));
  $smarty->assign('smartyNumUsers', getNumberUsers($projID));

  $smarty->display($BASE_DIR .'templates/common/header.tpl'); 
  $smarty->display($BASE_DIR .'templates/projects/projectPage.tpl');
  
  $smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>