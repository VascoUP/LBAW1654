<?php 
	include_once('../../config/init.php');

	if( $_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php');
		die();
	}
	
	$smarty->display($BASE_DIR . 'templates/common/headerMainPage.tpl'); 
	$smarty->display($BASE_DIR . 'templates/general/mainPage.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>