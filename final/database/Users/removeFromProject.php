<?
	function removeUserProject($user, $proj){
		try {
			global $conn;
			$stmt = $conn->prepare("DELETE 
									FROM ProjectUsers 
									WHERE userID = ? 
									AND projectID = ?");
								
			$stmt->execute(array($user, $proj));
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}

	function removeCoordProject($user, $proj){
		try {
			global $conn;
			$stmt = $conn->prepare("DELETE 
									FROM ProjectCoordinator
									WHERE userID = ? 
									AND projectID = ?");
								
			$stmt->execute(array($user, $proj));
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}
?>