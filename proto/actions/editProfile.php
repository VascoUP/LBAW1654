<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/userInformation.php');  

  foreach($_POST as $key => $value) {
	if($key === 'username')
		updateUsername($_SESSION['username'], $_POST['username']);
	else if($key === 'email')
		updateEmail($_SESSION['username'], $_POST['email']);
	else if($key === 'password')
		if(!$_POST['confirm'])
			$_SESSION['error_messages'][] = 'You need to confirm the password';
		else{
			if($_POST['password'] !== $_POST['confirm'])
				$_SESSION['error_messages'][] = 'The passwords must be equal';
			else
				updatePassword($_SESSION['username'], $_POST['password']);
		}
	else if($key === 'overview')
		updateDescription($_SESSION['username'], $_POST['overview']);
  }
  
  header('Location: ' .$BASE_URL.'pages/profile/profileUserOverview.php');
?>