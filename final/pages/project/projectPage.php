<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/Projects/projectInformation.php');
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');

  $userInfo = getUserInformation($_SESSION['username']);
  $smarty->assign('smartyUsrInfo', $userInfo);

  $projectInvites = invitedProjects($userInfo[0][userid]);
  $smarty->assign('smartyProjInvites', $projectInvites);
  
  $projID = $_GET['projID'];
  $smarty->assign('smartyProjID', $projID);
  $smarty->assign('smartyProjInfo', getProjectInformation($projID));
  $smarty->assign('smartyCoord', getCoordinator($projID));

  $smarty->display($BASE_DIR .'templates/common/header.tpl'); 
  $smarty->display($BASE_DIR .'templates/projects/projectPage.tpl');
  $smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>