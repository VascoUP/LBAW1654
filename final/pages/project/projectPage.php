<?php
  include_once('../../config/init.php');
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
  include_once($BASE_DIR .'database/Projects/projectInformation.php');
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');

  $userInfo = getUserInformation($_SESSION['username']);
  $smarty->assign('smartyUsrInfo', $userInfo);
  
  include_once($BASE_DIR .'database/Projects/validateUser.php');

  $projectInvites = invitedProjects($userInfo[0]['userid']);
  $smarty->assign('smartyProjInvites', $projectInvites);
  
  if( $isCollaborator === false ) {
    // ADD BUTTON TO THE PAGE
    //if( getRequestInvite($userInfo[0]['userid'], $projID) === true )
      // DEACTIVATE BUTTON
  }

  $smarty->assign('smartyProjID', $projID);
  $smarty->assign('smartyProjInfo', $projectInformation);
  $smarty->assign('smartyCoord', getCoordinator($projID));

  $smarty->display($BASE_DIR .'templates/common/header.tpl'); 
  $smarty->display($BASE_DIR .'templates/projects/projectPage.tpl');
  $smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>