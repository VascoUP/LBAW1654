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
		if(	!preg_match('/^[a-z0-9]+$/i', $username) )
			return 'Invalid input';

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
  
  	function updateEmail($email) {
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			return 'Invalid input';
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
		if(	!preg_match('/^[a-zA-Z0-9 .\-]+$/i', $overview) )
			return 'Invalid input';
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
									ORDER BY name");
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
								ORDER BY inviteDate DESC
								LIMIT 5)
								LIMIT 5");
		$stmt->execute(array($userID, $userID));
		$result = $stmt->fetchAll();
		} catch(Exception $e) {
		return $e->getMessage();
		}

		return $result;
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
	
	function searchUserProjects($name, $userID){
	try {
		global $conn;
		$stmt = $conn->prepare("SELECT DISTINCT Project.name AS name, Project.description AS description, Project.projectID as projectID
								FROM Project
								WHERE (Project.projectID IN (SELECT ProjectCoordinator.projectID FROM ProjectCoordinator WHERE ProjectCoordinator.userID = ?
								AND Project.projectID = ProjectCoordinator.projectID)
								OR Project.projectID IN (SELECT ProjectUsers.projectID FROM ProjectUsers WHERE ProjectUsers.userID = ?))
								AND (to_tsvector('english', Project.name) @@ to_tsquery('english', ?)
								OR Project.name ILIKE '%' || ? || '%')");
		$stmt->execute(array($userID, $userID, $name, $name));
		
		$result = $stmt->fetchAll();
	} catch(Exception $e) {
		echo $e->getMessage();
	}
	
	return $result;
}

	function getAdmin(){
		try{
			global $conn;
			$stmt = $conn->prepare("SELECT email FROM UserSite WHERE type = 'administrator'");
		$stmt->execute();
		
		$result = $stmt->fetchAll();
		
		}catch(Exception $e) {
		echo $e->getMessage();
	}
	
	return $result['0']['email'];
	}
?>