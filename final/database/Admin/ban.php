<?php
  	function banUser($userID){
		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE UserSite
										SET userStatus = ?
										WHERE userID = ?");	
												
			$status = 'banned';
			$stmt->execute(array($status, $userID));
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}
	
	function banProject($projID){
		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Project
										SET projectStatus = ?
										WHERE projectID = ?");	
												
			$status = 'banned';
			$stmt->execute(array($status, $projID));
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}
?>