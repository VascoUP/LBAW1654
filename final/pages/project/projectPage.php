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
  $projectRequestedInvites = getRequestedParticition($projID);
  echo print_r($projectRequestedInvites);
  $smarty->assign('smartyProjInvites', $projectInvites);
  
  if( $isCollaborator === false ) {
    $smarty->assing('joinProjectButton', true);
    if( getRequestInvite($userInfo[0]['userid'], $projID) === true )
        $smarty->assign('joinProjectButtonActive', false);
    else
        $smarty->assign('joinProjectButtonActive', true);
  } else
    $smarty->assing('joinProjectButton', false);

  $smarty->assign('smartyProjID', $projID);
  $smarty->assign('smartyProjInfo', $projectInformation);
  $smarty->assign('smartyCoord', getCoordinator($projID));

  $smarty->display($BASE_DIR .'templates/common/header.tpl'); 
  $smarty->display($BASE_DIR .'templates/projects/projectPage.tpl');
  $smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>