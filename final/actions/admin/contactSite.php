<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/Admin/contacts.php'); 
  include_once($BASE_DIR .'database/Users/userInformation.php');
  
  if(!$_POST['name'] || !$_POST['email'] || !$_POST['tel'] || !$_POST['content']){
	  $_SESSION['error_messages'][] = 'Invalid contact';
	  $_SESSION['form_values'] = $_POST;
	  header('Location: ' . $_SERVER['HTTP_REFERER']);
	  exit;
  }
	$admin = getAdmin();
	
  addContactSite($_POST['name'], $_POST['email'], $_POST['tel'], $_POST['content']);
  $_SESSION['success_messages'][] = 'Message sent successfully';  
  
  $email = $admin;
  $to = $email;
		$subject = "Contact site YM";

		$bound_text = "----*%$!$%*";
		$bound = "--".$bound_text."\r\n";
		$bound_last = "--".$bound_text."--\r\n";
		
		$headers = "From: " . $_POSR['email'];
	
		$message = $_POST['content'];
		
		$sent = mail($to, $subject, $message, $headers);
		
	header("Location: $BASE_URL" . "pages/general/mainPage.php");
?>