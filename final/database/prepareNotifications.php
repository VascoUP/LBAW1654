<?php
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');
    
    $projectInvites = invitedProjects($userInfo[0]['userid']);
    $projectRequestedInvites = getRequestedParticition($userInfo[0]['userid']);
    $smarty->assign('smartyProjInvites', $projectInvites);
    $smarty->assign('projectRequestedInvites', $projectRequestedInvites);
?>