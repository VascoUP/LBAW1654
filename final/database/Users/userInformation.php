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

	function getUserInformationByID($ID) {
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT * 
									FROM UserSite
									WHERE userid = ?");
								
			$stmt->execute(array($ID));
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
  
  	function getProjects($id){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT *
									FROM Project
									WHERE projectid IN (SELECT ProjectCoordinator.projectid
														FROM ProjectCoordinator
														WHERE ProjectCoordinator.userid = ?)
									OR projectid IN (SELECT ProjectUsers.projectid FROM ProjectUsers
									WHERE ProjectUsers.userid = ?
									AND userStatusProject = 'active')
									ORDER BY name
									LIMIT 5");
			$stmt->execute(array($id, $id));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}

		return $result;
  	}
	
	function getProjectsCoordinator($id){
		try {
		global $conn;
		$stmt = $conn->prepare("SELECT *
								FROM Project
								WHERE projectid IN (SELECT ProjectCoordinator.projectid
													FROM ProjectCoordinator
													WHERE ProjectCoordinator.userid = ?)
								ORDER BY name
								LIMIT 6");
		$stmt->execute(array($id));
		$result = $stmt->fetchAll();
		} catch(Exception $e) {
		return $e->getMessage();
		}

		return $result;
	}
	
	function getProjectsCollaborator($id){
		try {
		global $conn;
		$stmt = $conn->prepare("SELECT *
								FROM Project
								WHERE projectid IN (SELECT ProjectUsers.projectid FROM ProjectUsers
													WHERE ProjectUsers.userid = ?
													AND userStatusProject = 'active')
								ORDER BY name
								LIMIT 6");
		$stmt->execute(array($id));
		$result = $stmt->fetchAll();
		} catch(Exception $e) {
		return $e->getMessage();
		}

		return $result;
	}
	
	function getTop5($userID){
		try {
		global $conn;
		$stmt = $conn->prepare("SELECT *
								FROM Project
								WHERE projectid IN (SELECT ProjectCoordinator.projectid
													FROM ProjectCoordinator
													WHERE ProjectCoordinator.userid = ?
													ORDER BY startDate DESC
													LIMIT 5)
								OR projectid IN (SELECT ProjectUsers.projectid FROM ProjectUsers
								WHERE ProjectUsers.userid = ?
								AND userStatusProject = 'active'
								ORDE BY invitedate DESC
								LIMIT 5)
								LIMIT 5");
		$stmt->execute(array($id, $id));
		$result = $stmt->fetchAll();
		} catch(Exception $e) {
		return $e->getMessage();
		}

		return $result;
	}

	function getTokenInfo($token){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT *
									FROM UserToken
									WHERE tokenName = ?");
			$stmt->execute(array($token));
			$result = $stmt->fetch();
		} catch(Exception $e) {
			return $e->getMessage();
		}

		return $result['userid'];
	}

	function getRequestInvite($userID, $projID) {
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT userStatusProject
									FROM ProjectUsers
									WHERE userid = ?
									AND projectid = ?");
			$stmt->execute(array($userID, $projID));
			$result = $stmt->fetch();
			if( $result && $result[userStatusProject] == 'requested' )
				return true;
		} catch(Exception $e) {
			return $e->getMessage();
		}

		return false;
	}
?>