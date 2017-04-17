<?php
  
  function createUser($username, $email, $password) {
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
                            WHERE username = ?");
    $stmt->execute(array($username));
    $result = $stmt->fetch();
	
	if(!password_verify($password, $result["password"])){
        $data = array('type' => 'fail');
        header($_SERVER["SERVER_PROTOCOL"]."400 Bad Request");
        return false;
    }
	
	return true;
  }
  
  function verifyPassword($password, $confirm){
	  if($password === $confirm)
		  return true;
	  return false;
  }
?>