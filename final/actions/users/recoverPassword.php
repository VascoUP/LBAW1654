<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/Users/recoverPassword.php');  

  $email = strip_tags($_POST['email']);
  
  sendEmail($email);
  $password = $_POST['password'];
  updatePassword($email, $password);
  
  $_SESSION['success_messages'][] = 'password changed successfully';  
  header("Location: $BASE_URL");
?>
