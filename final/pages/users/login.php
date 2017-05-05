<?php 
	include_once('../../config/init.php');
	include('../../database/Users/userInformation.php');
	
	if($_COOKIE['remember_username']){
		$userID = getTokenInfo($_COOKIE['remember_username']);
		$username = getUserInformationByID($userID);
		
		$smarty->assign('smartyUsername', $username['0']['username']);
		$smarty->assign('smartyCheck', 'checked');
	}		

	$smarty->display($BASE_DIR .'templates/common/headerLoginRegister.tpl'); 
	$smarty->display($BASE_DIR .'templates/users/login.tpl');

	$smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>