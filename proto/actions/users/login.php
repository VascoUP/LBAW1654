<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

  if (!$_POST['username'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'Invalid login';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $username = $_POST['username'];
  $password = $_POST['password'];
  
  if (isLoginCorrect($username, $password)) {
    $_SESSION['username'] = $username;
    $_SESSION['success_messages'][] = 'Login successful'; 
	if(!empty($_POST["remember"])) {
		$year = time() + (365 * 24 * 60 * 60); //365 days * 24 hours * 60 minutes * 60 seconds
		setcookie('username', $username, $year);
		setcookie('password', $password, $year);
	  }
	  else {
		if(isset($_COOKIE["username"])) {
			setcookie ("username","");
		}
		if(isset($_COOKIE["password"])) {
			setcookie ("password","");
		}
	  }	
	header("Location: $BASE_URL" . "pages/profile/profileUserOverview.php");
  } 
  else {
    $_SESSION['error_messages'][] = 'Login failed';  
  }
  
?>
