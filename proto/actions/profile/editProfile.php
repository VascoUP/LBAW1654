<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/Users/userInformation.php');  

  if(isset($_POST['username']))
	  updateUsername($_POST['username']);
  else if(isset($_POST['password']) && isset($_POST['confirm'])){
	  if($_POST['password'] === $_POST['confirm'])
		  updatePassword($_POST['password']);
  }
  else if(isset($_POST['email']))
	 updateEmail($_POST['email']);  
  else if(isset($_POST['upload']) && isset($_POST['uploadCV']))
  {
	  if(isset($_POST['upload']))
		  updatePhoto($_POST['upload']);
	  
	  if(isset($_POST['uploadCV']))
		  updateCurriculum($_POST['uploadCV']);
  }
  else if(isset($_POST['overview']))
	updateDescription($_POST['overview']); 
  
  header('Location: ' .$BASE_URL.'pages/profile/profileUserOverview.php'); 
?>