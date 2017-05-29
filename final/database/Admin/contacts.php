<?php
	function addContactSite($name, $email, $phone, $content){
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