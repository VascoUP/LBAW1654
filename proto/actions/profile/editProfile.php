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
	  if($_POST['upload']){
		  if (isset($_FILES['upload'])) {
			$profilePicName = $_FILES['upload']['name'];
			$profilePicTempName = $_FILES['upload']['tmp_name'];
			if(isset($profilePicName)) {
				if(!empty($profilePicName)) {
					$extension = strtolower(substr($profilePicName, strpos($profilePicName, '.')));
					$fileName = "images/assets/$username$extension";
					$thumbnailName = "images/assets/$username$extension";
					move_uploaded_file($profilePicTempName, $fileName);
					if($extension == '.png')
						$originalImage = imagecreatefrompng($fileName);
					else 
						$originalImage = imagecreatefromjpeg($fileName);
					$width = imagesx($originalImage);
					$height = imagesy($originalImage);
					$square = min($width, $height);
					//Create 200x200 thumbnail
					$thumbnail = imagecreatetruecolor(200, 200); 
					imagecopyresized($thumbnail, $originalImage, 0, 0, ($width>$square)?($width-$square)/2:0, ($height>$square)?($height-$square)/2:0, 200, 200, $square, $square);
					if($extension == '.png')
						imagepng($thumbnail, $thumbnailName);
					else
						imagejpeg($thumbnail, $thumbnailName);
				}
			}
		}
		  updatePhoto($_POST['upload']);
	  }
	  if($_POST['uploadCV'])
		  updateCurriculum($_POST['uploadCV']);
  }
  else if($_POST['overview'])
	updateDescription($_POST['overview']); 
  
  header('Location: ' .$BASE_URL.'pages/profile/profileUserOverview.php'); 
?>