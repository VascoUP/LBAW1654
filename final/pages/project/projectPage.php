<?php
  include_once('../../config/init.php');
	
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
	
  include_once($BASE_DIR .'database/Projects/projectInformation.php');
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php'); 
  include_once($BASE_DIR .'database/Projects/validateUser.php');
  include_once($BASE_DIR .'database/prepareNotifications.php');
  include_once($BASE_DIR .'database/projectInfo.php');

  $smarty->assign('smartyUsrInfo', $userInfo);
  $smarty->assign('PAGE_TEMPLATE', $BASE_DIR .'templates/projects/projectPage.tpl');

  $smarty->display($BASE_DIR .'templates/common/header.tpl'); 
  $smarty->display($BASE_DIR .'templates/projects/project.tpl');
  $smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>