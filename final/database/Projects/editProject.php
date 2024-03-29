<?php
  	function updateProjName($name, $id){
		if(!preg_match('/^[a-zA-Z0-9 \-]+$/i', $name))
			return 'Invalid name';
		
		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Project
										SET name = ?
										WHERE projectID = ?");		
			$stmt->execute(array($name, $id));
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}
	
 	function updateOverview($overview, $id) {
		if(!preg_match('/^[a-zA-Z0-9 .\-]+$/i', $overview))
			return 'Invalid overview';

		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Project SET description = ? WHERE projectID = ?");
			$stmt->execute(array($overview, $id));
		} catch(Exception $e) {
			return $e->getMessage();
		}
  	}
	
	function updateAccess($access, $id) {		
		try {
			global $conn;
			if($access === 'public')
				$typeAccess = 1;
			else
				$typeAccess = 0;
		
			$stmt = $conn->prepare("UPDATE Project
									SET access = ?
									WHERE projectID = ?");
			$stmt->execute(array($typeAccess, $id));
		} catch(Exception $e) {
			return $e->getMessage();
		}
  	}
	
	function deleteProject($id){
		try {
			global $conn;
			$stmt = $conn->prepare("DELETE
									FROM Project
									WHERE projectID = ?");
			$stmt->execute(array($id));
		} catch(Exception $e) {
			return $e->getMessage();
		}
  	}
	
?>