<?php 
	include_once('../../config/init.php');
	
	if( $_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php');
		die();
	} else if( $_COOKIE['remember_username'] ) {
		$username = $_COOKIE['remember_username'];
		$userInfo = getUserInformation($username);
		if($userInfo['0']['userstatus'] != 'inactive' || $userInfo['0']['userstatus'] != 'banned'){
			$_SESSION['username'] = $username;
			$_SESSION['success_messages'][] = 'Login successful';

			if($userInfo['0']['type'] == 'administrator')
				header('Location: ' .$BASE_URL.'pages/admin/profileAdminOverview.php');
			else
				header('Location: ' .$BASE_URL.'pages/profile/profileUserOverview.php');
			die();
		}
	}
	unset($_COOKIE['remember_username']);
	setcookie('remember_username', '', time() - 3600, '/');
	
	$smarty->display($BASE_DIR .'templates/common/headerLoginRegister.tpl');
	$smarty->display($BASE_DIR .'templates/users/recoverPassword.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>
