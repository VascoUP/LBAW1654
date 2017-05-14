<?php
  include_once('../../config/init.php');
  include($BASE_DIR .'database/Users/recoverPassword.php');  

  $email = $_POST['email'];
  $password = $_POST['password'];
  
  updatePassword($email, $password);
  
  $_SESSION['success_messages'][] = 'password changed successfully';  
  header("Location: $BASE_URL" . "pages/users/login.php");
?>
