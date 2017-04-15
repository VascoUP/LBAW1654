<?php
  
  function createUser($username, $email, $password) {
    global $conn;
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
  
	$type = 'user';
	$userStatus = 'active';
	
	try {
		$stmt = $conn->prepare("INSERT INTO UserSite(username, email, password, type, userStatus)
								VALUES (:username, :email, :password, :type, :userStatus)");
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':password', $hash);
		$stmt->bindParam(':type', $type);
		$stmt->bindParam(':userStatus', $userStatus);
		$stmt->execute();
	}
	catch (PDOException $e) {
		echo $e->getMessage();
	}
  }
  
  function emailExists($email) {
	global $conn;

	$stmt = $conn->prepare('SELECT * FROM UserSite WHERE email = ?');
	$stmt->execute($email);
	$result = $stmt->fetch();

	return ($result !== false);
  }
  
   function usernameExists($username) {
	global $conn;

	$stmt = $conn->prepare('SELECT * FROM UserSite WHERE username = ?');
	$stmt->execute($username);
	$result = $stmt->fetch();

	return ($result !== false);
  }

  function isLoginCorrect($username, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM UserSite 
                            WHERE username = ? AND password = ?");
    $stmt->execute(array($username, sha1($password)));
    return $stmt->fetch() == true;
  }
?>