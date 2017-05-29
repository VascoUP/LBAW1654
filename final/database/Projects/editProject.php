<?php
  	function updateProjName($name, $id){
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
			
			$stmt = $conn->prepare("DELETE
									FROM ProjectCoordinator
									WHERE projectID = ?");
			$stmt->execute(array($id));
			
			$stmt = $conn->prepare("DELETE
									FROM TagProject
									WHERE projectID = ?");
			$stmt->execute(array($id));
		} catch(Exception $e) {
			echo $e->getMessage();
		}
  	}
	
?>