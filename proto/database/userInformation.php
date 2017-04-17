<?php
  
  function getUserInformation($username) {
	global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM UserSite
                            WHERE username = ?");
							
    $stmt->execute(array($username));
    return $stmt->fetchAll();
  }

  function getUserID($username){
	global $conn;
    $stmt = $conn->prepare("SELECT userID 
                            FROM UserSite
                            WHERE username = ?");
							
    $stmt->execute(array($username));
    return $stmt->fetchAll();
  }
  
  function updateUsername($oldUser, $username){
	$id = getUserID($oldUser);
	  
	global $conn;
	$stmt = $conn->prepare("UPDATE UserSite
							SET username = ?
							WHERE userID = ?");
							
    $stmt->execute(array($username), array($id));
  }
  
  function updateEmail($oldUser, $email){
	$id = getUserID($oldUser);
	  
	global $conn;
	$stmt = $conn->prepare("UPDATE UserSite
							SET email = ?
							WHERE userID = ?");
							
    $stmt->execute(array($email), array($id));
  }
  
  function updatePassword($oldUser, $password){
	$id = getUserID($oldUser);
	  
	global $conn;
	$stmt = $conn->prepare("UPDATE UserSite
							SET password = ?
							WHERE userID = ?");
							
    $stmt->execute(array($password), array($id));
  }
  
  function updateDescription($oldUser, $overview){
	$id = getUserID($oldUser);
	  
	global $conn;
	$stmt = $conn->prepare("UPDATE UserSite
							SET description = ?
							WHERE userID = ?");
							
    $stmt->execute(array($description), array($id));
  }
?>