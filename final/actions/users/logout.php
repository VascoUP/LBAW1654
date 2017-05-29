<?php
  include_once('../../config/init.php');
  
  session_destroy();
  unset($_COOKIE['remember_username']);
  setcookie('remember_username', '', time() - 3600, '/');

  header('Location: ' .$BASE_URL.'pages/general/mainPage.php');
?>
