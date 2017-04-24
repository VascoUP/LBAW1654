<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/Users/userInformation.php');  

  if($_POST['username'])
		updateUsername($_POST['username']);
  else if($_POST['password'] && $_POST['confirm']){
	  if($_POST['password'] === $_POST['confirm'])
		  updatePassword($_POST['password']);
  }
  else if($_POST['email'])
	 updateEmail($_POST['email']);  
  else if($_POST['upload'] || $_POST['uploadCV'])
  {
	  if($_POST['upload'])
		  updatePhoto($_POST['upload']);
	  
	  if($_POST['uploadCV'])
		  updateCurriculum($_POST['uploadCV']);
  }
  else if($_POST['overview'])
	updateDescription($_POST['overview']); 
  
  header('Location: ' .$BASE_URL.'pages/profile/profileUserOverview.php'); 
?>