<?php 
	include_once('../../config/init.php');
	
	$email = $_GET['email'];
	
	$smarty->assign('email', $email);

	$smarty->display($BASE_DIR .'templates/common/headerLoginRegister.tpl'); 
	$smarty->display($BASE_DIR .'templates/users/waitingPage.tpl');

	$smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>