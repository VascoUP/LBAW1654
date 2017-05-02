<?php 
	include_once('../../config/init.php');
	if(isset($_COOKIE['remember_username'])){
		$smarty->assign('smartyUsername', $_COOKIE['remember_username']);
		$smarty->assign('smartyCheck', 'checked');
	}		

	$smarty->display($BASE_DIR .'templates/common/headerLoginRegister.tpl'); 
	$smarty->display($BASE_DIR .'templates/users/login.tpl');

	$smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>