<?php
	include_once($BASE_DIR .'database/Users/userInformation.php');

	function createUser($username, $email, $password) {
		if(	!preg_match('/^[a-z0-9]+$/i', $username) ||
			!filter_var($email, FILTER_VALIDATE_EMAIL))
			return 'Invalid input';
		try {
			global $conn;
			$passwordHash = password_hash($password, PASSWORD_DEFAULT);

			$type = 'user';
			$userStatus = 'active';

			$stmt = $conn->prepare("INSERT INTO UserSite(username, email, password, type, userStatus)
										VALUES (:username, :email, :password, :type, :userStatus)");						
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':password', $passwordHash);
			$stmt->bindParam(':type', $type);
			$stmt->bindParam(':userStatus', $userStatus);
			$stmt->execute();
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}

	function emailExists($email) {
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			return 'Invalid input';
		try {
			global $conn;

			$stmt = $conn->prepare('SELECT * FROM UserSite WHERE email = ?');
			$stmt->execute(array($email));
			$result = $stmt->fetch();
		} catch(Exception $e) {
			return $e->getMessage();
		}
		return ($result !== false);
	}

	function usernameExists($username) {
		if(!preg_match('/^[a-z0-9]+$/i', $username))
			return 'Invalid input';
		try {
			global $conn;
			$stmt = $conn->prepare('SELECT * FROM UserSite WHERE username = ?');
			$stmt->execute(array($username));
			$result = $stmt->fetch();
		} catch(Exception $e) {
			return $e->getMessage();
		}
		return ($result !== false);
	}

	function isLoginCorrect($username, $password) {
		if(	!preg_match('/^[a-z0-9]+$/i', $username))
			return 'Invalid input';
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT * 
									FROM UserSite 
									WHERE username = ?");
			$stmt->execute(array($username));
			$result = $stmt->fetch();
		} catch(Exception $e) {
			return $e->getMessage();
		}

		if(!password_verify($password, $result["password"])) {
			$data = array('result' => 'fail');
			header($_SERVER["SERVER_PROTOCOL"]."400 Bad Request");
			return false;
		}
		
		$data = array('result' => 'done');
		return true;
	}

	function verifyPassword($password, $confirm) {
		if($password === $confirm)
			return true;
		return false;
	}

	function deleteUser($username) {
		if(	!preg_match('/^[a-z0-9]+$/i', $username))
			return 'Invalid input';
		$id = getUserID($username);
		try {
			global $conn;	
			
			$conn->beginTransaction();
			
			$stmt = $conn->prepare("DELETE FROM ProjectCoordinator WHERE userID = ?");
			$stmt->execute(array($id));

			$stmt = $conn->prepare("DELETE FROM ProjectUsers WHERE userID = ?");
			$stmt->execute(array($id));
			
			$stmt = $conn->prepare("UPDATE UserSite
									SET userStatus = 'inactive'
									WHERE userID = ?");
			$stmt->execute(array($id));
			
			$conn->commit();
		} catch(Exception $e) {
			$conn->rollBack();
			return $e->getMessage();
		}
	}
?>