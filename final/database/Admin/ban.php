<?php
	include_once($BASE_DIR .'database/Users/userInformation.php');

	function userIsAdmin() {
		$user = $_SESSION['username'];
		$userInfo = getUserInformation($user);
		$userType = $userInfo[0]['type'];
		if( !($user && $userType == 'administrator') )
			return false;
		return true;
	}

  	function banUser($userID){
		if( userIsAdmin() === false )
			return 'You don\'t have the required premissions to access this functionality';

		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE UserSite
										SET userStatus = 'banned'
										WHERE userID = ?");	
												
			$stmt->execute(array($userID));
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}
	
	function banProject($projID){
		if( userIsAdmin() === false )
			return 'You don\'t have the required premissions to access this functionality';

		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Project
										SET projectStatus = 'banned'
										WHERE projectID = ?");	

			$stmt->execute(array($projID));
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}
	
	function removeBanStatusUser($user) {
		if( userIsAdmin() === false )
			return 'You don\'t have the required premissions to access this functionality';

		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE UserSite
										SET userStatus = 'active'
										WHERE userid = ?");	
												
			$stmt->execute(array($user));
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}
	
	function removeBanStatusProj($proj) {
		if( userIsAdmin() === false )
			return 'You don\'t have the required premissions to access this functionality';
			
		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Project
										SET projectStatus = 'active'
										WHERE projectID = ?");	

			$stmt->execute(array($proj));
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}
?>