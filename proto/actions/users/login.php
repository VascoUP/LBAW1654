<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

  if (!$_POST['username'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'Invalid login';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);
  
  echo $username;
  if (isLoginCorrect($username, $password)) {
    $_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	echo $username;
    $_SESSION['success_messages'][] = 'Login successful';  
	header('Location: ' .$BASE_DIR.'pages/profile/profileUserOverview.php');
  } else {
    $_SESSION['error_messages'][] = 'Login failed';  
  }

  /**if($_POST['remember'] == '1' || $_POST['remember'] == 'on')
  {
    $year = time() + (365 * 24 * 60 * 60); //365 days * 24 hours * 60 minutes * 60 seconds
    setcookie('username', $username, $year);
    setcookie('password', $password, $year);
  }**/
?>
