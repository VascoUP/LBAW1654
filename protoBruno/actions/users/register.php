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
	if(preg_match('/^[a-z0-9_\-]+$/', $username)){
	    if(usernameExists($username)|| emailExists($email)){
	    		        $_SESSION['form_values'] = $_POST;
        		        $_SESSION['field_errors']['username'] = 'Email or Username already exists';
        				header("Location: $BASE_URL" . 'pages/users/register.php');
	    }
		else if (!verifyPassword($password, $confirm)){
	    		        $_SESSION['form_values'] = $_POST;
        		        $_SESSION['field_errors']['password'] = 'Passwords do not match';
        				header("Location: $BASE_URL" . 'pages/users/register.php');
		}

		else if (verifyPassword($password, $confirm)){
        		$_SESSION['username'] = $username;
        		createUser($username, $email, $password);
        		$_SESSION['success_messages'][] = 'User registered successfully';
        		header('Location: ' .$BASE_URL.'pages/profile/profileUserOverview.php');
        		}
	}
	else{
	        $_SESSION['field_errors']['usernameLow'] = 'Username must be lowercase';
			header("Location: $BASE_URL" . 'pages/users/register.php');
	}
  }
  else
	header('Location: ' .$BASE_URL.'pages/profile/profileUserOverview.php');
?>
