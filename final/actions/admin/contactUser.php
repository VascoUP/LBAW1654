<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/Admin/contacts.php');
  include_once($BASE_DIR .'database/Users/userInformation.php');  
  
  if(!$_POST['comment'] || !$_POST['subject'] || !$_GET['userID'] || !$_GET['second']){
	  $_SESSION['error_messages'][] = 'Invalid contact';
	  $_SESSION['form_values'] = $_POST;
	  header('Location: ' . $_SERVER['HTTP_REFERER']);
	  exit;
  }
  
  addContactUser($_GET['userID'], $_GET['second'], $_POST['subject'], $_POST['comment']);
  $_SESSION['success_messages'][] = 'Message sent successfully';
 
  $secondUserEmail = getUserInformationByID($_GET['second'])['0']['email'];
  $firstUserEmail = getUserInformationByID($_GET['userID'])['0']['email'];
  
  $email = $secondUserEmail;
  $to = $email;
		$subject = $_POST['subject'];

		$bound_text = "----*%$!$%*";
		$bound = "--".$bound_text."\r\n";
		$bound_last = "--".$bound_text."--\r\n";
		
		$headers = "From: " . $firstUserEmail;
	
		$message = $_POST['comment'];
		
		$sent = mail($to, $subject, $message, $headers);

	if(getUserInformationByID($_GET['userID'])['0']['type'] == 'administrator')
		header("Location: $BASE_URL" . "pages/profile/profileAdminOverview.php?userInfo=".$_GET['userID']);
	else
		header("Location: $BASE_URL" . "pages/profile/profileUserOverview.php?userInfo=".$_GET['userID']);
?>