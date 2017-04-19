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
	$result = $stmt->fetchAll();
    return $result['0']['userid'];
  }
  
  function updateUsername($username){
	$id = getUserID($_SESSION['username']);
	global $conn;
	$stmt = $conn->prepare("UPDATE UserSite
							SET username = ?
							WHERE userID = ?");
							
    $stmt->execute(array($username, $id));
	$_SESSION['username'] = $username;
  }
  
  function updateEmail($email){
	$id = getUserID($_SESSION['username']);
	  
	global $conn;
	$stmt = $conn->prepare("UPDATE UserSite
							SET email = ?
							WHERE userID = ?");
							
    $stmt->execute(array($email, $id));
  }
  
  function updatePassword($password){
	$id = getUserID($_SESSION['username']);
	  
	global $conn;
	$stmt = $conn->prepare("UPDATE UserSite
							SET password = ?
							WHERE userID = ?");
	$passHash = password_hash($password, PASSWORD_DEFAULT);	
    $stmt->execute(array($passHash, $id));
  }
  
  function updateDescription($overview){
	$id = getUserID($_SESSION['username']);
	  
	global $conn;
	$stmt = $conn->prepare("UPDATE UserSite
							SET description = ?
							WHERE userID = ?");
							
    $stmt->execute(array($description, $id));
  }
  
  function updatePhoto($photo){
	$id = getUserID($_SESSION['username']);
	  
	global $conn;
	$stmt = $conn->prepare("UPDATE UserSite
							SET photo = ?
							WHERE userID = ?");
							
    $stmt->execute(array($photo, $id));
  }
  
  function updateCurriculum($cv){
	$id = getUserID($user);
	  
	global $conn;
	$stmt = $conn->prepare("UPDATE UserSite
							SET curriculumVitae = ?
							WHERE userID = ?");
							
    $stmt->execute(array($cv, $id));
  }
?>