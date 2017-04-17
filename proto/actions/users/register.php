<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

  if (!$_POST['username'] || !$_POST['email'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/register.php');
    exit;
  }

  $email = strip_tags($_POST['email']);
  $username = strip_tags($_POST['username']);
  $password = $_POST['password'];

  /**$photo = $_FILES['photo'];
  $extension = end(explode(".", $photo["name"]));*/


    createUser($username, $email, $password);
   /* move_uploaded_file($photo["tmp_name"], $BASE_DIR . "images/users/" . $username . '.' . $extension); // this is dangerous
    chmod($BASE_DIR . "images/users/" . $username . '.' . $extension, 0644);*/
  
	if (usernameExists($username))
	  $_SESSION['field_errors']['username'] = 'Username already exists';
	else if (emailExists($email))
		$_SESSION['field_errors']['email'] = 'Email already exists';
	else $_SESSION['error_messages'][] = 'Error creating user';

  $_SESSION['success_messages'][] = 'User registered successfully';  
  header('Location: ' .$BASE_URL.'pages/profile/profileUserOverview.php');
?>
