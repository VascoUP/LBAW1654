<?php
  include_once('../../../config/init.php');
  
  $projID = $_GET['projID'];
  $smarty->assign('smartyProjID', $projID);

  $smarty->display($BASE_DIR .'templates/common/header.tpl'); 
  $smarty->display($BASE_DIR .'templates/projects/projectForum.tpl');
  
  $smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>