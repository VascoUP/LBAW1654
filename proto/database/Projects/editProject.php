<?php
  	function updateProjName($name, $id){
		echo 'updateProjName: start';
		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Project
										SET name = ?
										WHERE projectID = ?");		
			$stmt->execute(array($name, $id));
		} catch(Exception $e) {
			echo 'updateProjName: exception';
			return $e->getMessage();
		}
		echo 'updateProjName: end';
	}
	
 	function updateOverview($overview, $id){		
		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Project
										SET description = ?
										WHERE projectID = ?");
			$stmt->execute(array($overview, $id));
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