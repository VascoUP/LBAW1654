<?php
  include_once('../../../config/init.php');
  
  $projID = $_GET['projID'];
  $smarty->assign('smartyProjID', $projID);

  $smarty->display($BASE_DIR .'templates/common/header.tpl'); 
  $smarty->display($BASE_DIR .'templates/projects/projectIterations.tpl');
  
  $smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>