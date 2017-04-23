<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/Users/users.php');  

  if (!$_POST['username'] || !$_POST['email'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/register.php');
    exit;
  }

  $email = strip_tags($_POST['email']);
  $username = strip_tags($_POST['username']);
  $password = $_POST['password'];
  $confirm = $_POST['confirm'];

  if(empty($_SESSION['username'])){
	if(ctype_lower($username)){
		if (!usernameExists($username) && !emailExists($email) && verifyPassword($password, $confirm)){
		$_SESSION['username'] = $username;
		createUser($username, $email, $password);
		}
		else
			header("Location: $BASE_URL" . 'pages/users/register.php');
	}
	else
		header("Location: $BASE_URL" . 'pages/users/register.php');
  }
  else
	header('Location: ' .$BASE_URL.'pages/profile/profileUserOverview.php'); 

  $_SESSION['success_messages'][] = 'User registered successfully';  
  header('Location: ' .$BASE_URL.'pages/profile/profileUserOverview.php');
?>
