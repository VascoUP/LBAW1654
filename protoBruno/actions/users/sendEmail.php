<?php
  include_once('../../config/init.php');

  $email = strip_tags($_POST['email']);
  
  $to = $email;
		$subject = 'YourManagement: Password Recovery';

		$bound_text = "----*%$!$%*";
		$bound = "--".$bound_text."\r\n";
		$bound_last = "--".$bound_text."--\r\n";
		
		$headers = "From: YM@hotmail.com\r\n";
	
		$message =
		"Click in the link below to recover your passord.
					https://gnomo.fe.up.pt/~lbaw1654/final/pages/users/recoverPassword.php

		( This is an automated message, please do not reply to this message, if you have any queries please contact YM@hotmail.com )";
		
		$sent = mail($to, $subject, $message, $headers);
		
		header("Location: $BASE_URL" . "pages/users/login.php");
?>
