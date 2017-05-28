<?php
  include_once($BASE_DIR .'database/Projects/validateUser.php');

  $smarty->assign('smartyProjID', $projID);
  $smarty->assign('smartyProjInfo', $projectInformation);
  $smarty->assign('smartyCoord', getCoordinator($projID));
?>
