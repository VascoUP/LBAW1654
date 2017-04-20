<?php 
	include_once('../../config/init.php');

	if(isset($_COOKIE['username']))
		$smarty->assign('smartyUsername', $_COOKIE['username']);
	if(isset($_COOKIE['password']))
		$smarty->assign('smartyPassword', $_COOKIE['password']);
	if(isset($_COOKIE["username"]))
		$smarty->assign('smartyCheck', $_COOKIE["username"]);

	$smarty->display($BASE_DIR .'templates/common/headerLoginRegister.tpl'); 
	$smarty->display($BASE_DIR .'templates/users/login.tpl');

	$smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>