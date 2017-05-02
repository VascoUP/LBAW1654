<?php
  include_once('../../config/init.php');

  $email = strip_tags($_POST['email']);
  
  $to = $email;
		$subject = 'YourManagement: Password Recovery';

		$bound_text = "----*%$!$%*";
		$bound = "--".$bound_text."\r\n";
		$bound_last = "--".$bound_text."--\r\n";
		
		$headers = "From: YM@hotmail.com\r\n";
	
		$message = " you may wish to enable your email program to accept HTML \r\n".$bound;
		$message .=
		'Content-Type: text/html; charset=UTF-8'."\r\n".
		'Content-Transfer-Encoding: 7bit'."\r\n\r\n".
		'
		<BODY BGCOLOR="White">
		<body>
			<div style=" height="40" align="left">

				<font size="3" color="#000000" style="text-decoration:none;font-family:Lato light">
					<div class="info" Style="align:left;">

					<p>Click in the link below to recover your passord.</p>
					<br>
					<a href="www.gnomo.fe.up.pt/~lbaw1654/piu/pages/users/recoverPassword.php">

					<p>-----------------------------------------------------------------------------------------------------------------</p>
					<p>( This is an automated message, please do not reply to this message, if you have any queries please contact YM@hotmail.com )</p>
				</font>
			</div>
		</body>
		'."\n\n".$bound_last;

		echo $message;
		$sent = mail($to, $subject, $message, $headers);
		
		header("Location: $BASE_URL" . "pages/users/login.php");
?>
