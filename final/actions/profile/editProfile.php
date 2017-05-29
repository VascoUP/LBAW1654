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
  else if($_FILES['upload'])
  {
	$extension = $extension = end(explode(".", $_FILES['upload']['name']));

	$photo = $_SESSION['username'] . '.' . $extension;

	if (move_uploaded_file($_FILES['upload']['tmp_name'], $BASE_DIR . "images/users/" . $photo)) {
		echo "The file ". basename( $_FILES["upload"]["name"]). " has been uploaded.";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
	unset($_FILES['upload']);
	updatePhoto($photo);
  }
  else if($_FILES['uploadCV']){
	$extension = $extension = end(explode(".", $_FILES['uploadCV']['name']));

    $cv = $_SESSION['username'] . '.' . $extension;

	if (move_uploaded_file($_FILES['uploadCV']['tmp_name'], $BASE_DIR . "documents/" . $cv)) {
		echo "The file ". basename( $_FILES["uploadCV"]["name"]). " has been uploaded.";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
	unset($_FILES['uploadCV']);
	updateCurriculum($cv);
  }
  else if($_POST['overview'])
	updateDescription($_POST['overview']); 

header('Location: ' .$BASE_URL.'pages/profile/profileUserOverview.php');
   
?>