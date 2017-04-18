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
    $stmt = $conn->prepare("SELECT * 
                            FROM UserSite
                            WHERE username = ?");
							
    $stmt->execute(array($username));
    return $stmt->fetchAll();
  }
  
  function updateUsername($user, $username){
	$id = getUserID($user);
	  
	global $conn;
	$stmt = $conn->prepare("UPDATE UserSite
							SET username = ?
							WHERE userID = ?");
							
    $stmt->execute(array($username), array($id));
  }
  
  function updateEmail($user, $email){
	$id = getUserID($user);
	  
	global $conn;
	$stmt = $conn->prepare("UPDATE UserSite
							SET email = ?
							WHERE userID = ?");
							
    $stmt->execute(array($email), array($id));
  }
  
  function updatePassword($user, $password){
	$id = getUserID($user);
	  
	global $conn;
	$stmt = $conn->prepare("UPDATE UserSite
							SET password = ?
							WHERE userID = ?");
							
    $stmt->execute(array($password), array($id));
  }
  
  function updateDescription($user, $overview){
	$id = getUserID($user);
	  
	global $conn;
	$stmt = $conn->prepare("UPDATE UserSite
							SET description = ?
							WHERE userID = ?");
							
    $stmt->execute(array($description), array($id));
  }
  
  function updatePhoto($user, $photo){
	$id = getUserID($user);
	  
	global $conn;
	$stmt = $conn->prepare("UPDATE UserSite
							SET photo = ?
							WHERE userID = ?");
							
    $stmt->execute(array($photo), array($id));
  }
  
  function updateCurriculum($user, $cv){
	$id = getUserID($user);
	  
	global $conn;
	$stmt = $conn->prepare("UPDATE UserSite
							SET curriculumVitae = ?
							WHERE userID = ?");
							
    $stmt->execute(array($cv), array($id));
  }
?>