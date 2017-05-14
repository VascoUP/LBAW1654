<?php 
	include_once('../../config/init.php');
	
	$smarty->display($BASE_DIR . 'templates/common/headerMainPage.tpl'); 
	$smarty->display($BASE_DIR . 'templates/general/mainPage.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>