<?php
	function addContactSite($name, $email, $phone, $content){
		if(	!preg_match('/^[a-z0-9\-]+$/i', $name) || 
			!filter_var($email, FILTER_VALIDATE_EMAIL) ||
			!preg_match('/^[0-9]+$/i', $phone) ||
			!preg_match('/^[a-zA-Z0-9 .\-]+$/i', $content) ||)
			return 'Invalid input';

		try {
			global $conn;
		
			$stmt = $conn->prepare("INSERT INTO ContactsSite(userName, phone, email, content)
									VALUES (:name, :phone, :email, :content)");						
			$stmt->bindParam(':name', $name);
			$stmt->bindParam(':phone', $phone);
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':content', $content);
			$stmt->execute();
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}
	
	function addContactUser($firstUser, $secondUser, $subject, $content){
		if(	!preg_match('/^[a-z0-9\-]+$/i', $firstUser) || 
			!preg_match('/^[a-z0-9\-]+$/i', $secondUser) || 
			!preg_match('/^[a-zA-Z0-9 \-]+$/i', $subject) || 
			!preg_match('/^[a-zA-Z0-9 .\-]+$/i', $content) ||)
			return 'Invalid input';
			
		try {
			global $conn;
		
			$stmt = $conn->prepare("INSERT INTO ContactsUser(firstUser, secondUser, subject, content)
									VALUES (:first, :second, :subject, :content)");						
			$stmt->bindParam(':first', $firstUser);
			$stmt->bindParam(':second', $secondUser);
			$stmt->bindParam(':subject', $subject);
			$stmt->bindParam(':content', $content);
			$stmt->execute();
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}
?>