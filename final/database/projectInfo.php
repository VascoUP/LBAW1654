<?php
  include_once($BASE_DIR .'database/Projects/validateUser.php');

  if(empty($projectInformation)) {
      header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
      die();
  }

  $smarty->assign('smartyProjID', $projID);
  $smarty->assign('smartyProjInfo', $projectInformation);
  $smarty->assign('smartyCoord', getCoordinator($projID));
?>
