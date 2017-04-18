<?php
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/userInformation.php');  

  foreach($_POST as $key) {
	if($key === 'username'){
		updateUsername($_SESSION['username'], $_POST['username']);
		$_SESSION["username"] = $_POST['username'];
		header('Location: ' .$BASE_URL.'pages/profile/profileUserOverview.php');
	}
	else if($key === 'email')
		updateEmail($_SESSION['username'], $_POST['email']);
	else if($key === 'password')
		if(!$_POST['confirm'])
			$_SESSION['error_messages'][] = 'You need to confirm the password';
		else{
			if($_POST['password'] !== $_POST['confirm'])
				$_SESSION['error_messages'][] = 'The passwords must be equal';
			else
				updatePassword($_SESSION['username'], $_POST['password']);
		}
	else if($key === 'overview')
		updateDescription($_SESSION['username'], $_POST['overview']);
	else if($key === 'upload'){
		updatePhoto($_SESSION['username'], $_POST['upload']);
		
		$target_dir = "images/assets/";
		$target_file = $target_dir . basename($_FILES["upload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["upload"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["upload"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $_FILES["upload"]["name"]). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
	}
	else if($key === 'uploadCV'){
		updateCurriculum($_SESSION['username'], $_POST['uploadCV']);
		$target_dir = "documents/";
		$target_file = $target_dir . basename($_FILES["uploadCV"]["name"]);
		$uploadOk = 1;
		$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["uploadCV"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($fileType != "pdf") {
			echo "Sorry, only pdf files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["uploadCV"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $_FILES["uploadCV"]["name"]). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
	}
  }
?>