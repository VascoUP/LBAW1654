<?php
include($BASE_DIR .'database/Users/userInformation.php');

  function createUser($username, $email, $password) {
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
	  $id = getUserID($username);
		try {
			global $conn;	
			
			$stmt = $conn->prepare("UPDATE UserSite
									SET userStatus = 'inactive'
									WHERE username = ?");
			$stmt->execute(array($username));
		} catch(Exception $e) {
			return $e->getMessage();
		}
  }
  
  function addUserToken($token, $username){
	  $id = getUserID($username);
	  try {
			global $conn;	
			
			$stmt = $conn->prepare("INSERT INTO UserToken(userID, tokenName) VALUES (:userID, :tokenName");
			$stmt->bindParam(':userID', $id);
			$stmt->bindParam(':tokenName', $token);
			$stmt->execute();
		} catch(Exception $e) {
			return $e->getMessage();
		}
	  
  }
?>