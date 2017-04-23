<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/projectInformation.php'); 

  $projID = $_GET['projID'];
  $smarty->assign('smartyProjID', $projID);
  $smarty->assign('smartyProjInfo', getProjectInformation($projID));
  $smarty->assign('smartyNumUsers', getNumberUsers($projID));

  $smarty->display($BASE_DIR .'templates/common/header.tpl'); 
  $smarty->display($BASE_DIR .'templates/projects/projectPage.tpl');
  $smarty->display($BASE_DIR .'templates/projects/projectOverview.tpl');
  $smarty->display($BASE_DIR .'templates/projects/projectIterations.tpl');
  echo '<div id=\'statsContainer\'>';
  echo '</div>';
  $smarty->display($BASE_DIR .'templates/projects/projectForum.tpl');
  $smarty->display($BASE_DIR .'templates/projects/projectEdit.tpl');


  $smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>