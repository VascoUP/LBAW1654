<?php
  function getUserInformation($username) {
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT * 
									FROM UserSite
									WHERE username = ?");
								
			$stmt->execute(array($username));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
    return $result;
  }

  function getUserID($username){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT userID 
									FROM UserSite
									WHERE username = ?");
								
			$stmt->execute(array($username));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
    return $result['0']['userid'];
  }
  
  function updateUsername($username){
		$id = getUserID($_SESSION['username']);
		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE UserSite
									SET username = ?
									WHERE userID = ?");
									
			$stmt->execute(array($username, $id));
		} catch(Exception $e) {
			return $e->getMessage();
		}

		$_SESSION['username'] = $username;
  }
  
  function updateEmail($email){
		$id = getUserID($_SESSION['username']);
		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE UserSite
									SET email = ?
									WHERE userID = ?");
			$stmt->execute(array($email, $id));
		} catch(Exception $e) {
			return $e->getMessage();
		}
  }
  
  function updatePassword($password){
		$id = getUserID($_SESSION['username']);
		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE UserSite
									SET password = ?
									WHERE userID = ?");
			$passHash = password_hash($password, PASSWORD_DEFAULT);	
			$stmt->execute(array($passHash, $id));
		} catch(Exception $e) {
			return $e->getMessage();
		}
  }
  
  function updateDescription($overview){
		$id = getUserID($_SESSION['username']);
		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE UserSite
									SET description = ?
									WHERE userID = ?");
			$stmt->execute(array($overview, $id));
		} catch(Exception $e) {
			return $e->getMessage();
		}
  }
  
  function updatePhoto($photo){
		$id = getUserID($_SESSION['username']);
		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE UserSite
									SET photo = ?
									WHERE userID = ?");
			$stmt->execute(array($photo, $id));
		} catch(Exception $e) {
			return $e->getMessage();
		}
  }
  
  function updateCurriculum($cv){
		$id = getUserID($_SESSION['username']);
		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE UserSite
									SET curriculumVitae = ?
									WHERE userID = ?");
			$stmt->execute(array($cv, $id));
		} catch(Exception $e) {
			return $e->getMessage();
		}
  }
  
  function getProjects($username){
	  $id = getUserID($username);
	  try {
		global $conn;
		$stmt = $conn->prepare("SELECT *
								FROM Project
								WHERE projectid IN (SELECT ProjectCoordinator.projectid
													FROM ProjectCoordinator
													WHERE ProjectCoordinator.userid = ?)
								OR projectid IN (SELECT ProjectUsers.projectid FROM ProjectUsers
								WHERE ProjectUsers.userid = ?);");
		$stmt->execute(array($id, $id));
		$result = $stmt->fetchAll();
	} catch(Exception $e) {
		return $e->getMessage();
	}
	
	return $result;
  }
?>