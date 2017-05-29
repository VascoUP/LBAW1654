<?php
	function updatePassword($email, $password){
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			return 'Invalid input';
			
		try {
			global $conn;
			$update = $conn->prepare("UPDATE UserSite SET password = ? WHERE email = ?");
			$passwordHash = password_hash($password, PASSWORD_DEFAULT);
			$update->execute(array($passwordHash, $email));
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}
?>