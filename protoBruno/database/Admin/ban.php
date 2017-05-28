<?php
  	function banUser($userID){
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
	
	function removeBanStatusUser($user)
	{
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
	
	function removeBanStatusProj($proj)
	{
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