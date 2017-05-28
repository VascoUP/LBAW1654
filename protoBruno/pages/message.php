<?php
  include_once('../config/init.php');
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');
	
	$userInfo = getUserInformation($_SESSION['username']);
	$smarty->assign('smartyUsrInfo', $userInfo);

	$projectInvites = invitedProjects($userInfo[0]['userid']);
	$smarty->assign('smartyProjInvites', $projectInvites);
	
  include_once($BASE_DIR .'database/prepareNotifications.php');
 
  $smarty->display($BASE_DIR .'templates/common/header.tpl');
?>
    <p><?php echo $_GET["result"]; ?></p>
<?php
  $smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>