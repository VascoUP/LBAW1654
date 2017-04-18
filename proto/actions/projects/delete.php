<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  
 
  deleteUser($_SESSION['username'])
  $_SESSION['success_messages'][] = 'User deleted successfully';  
  header('Location: ' .$BASE_URL.'pages/general/MainPage.php');
?>
