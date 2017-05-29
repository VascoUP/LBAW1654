<?
	function getUserStatistics(){
		$array = array();
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT COUNT(*) AS users FROM UserSite");	
			$stmt->execute();
			$users = $stmt->fetchAll();
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS count FROM UserSite WHERE type = 'coordinator'");	
			$stmt->execute();
			$countCoord = $stmt->fetchAll();
			
			$array['coord'] = $countCoord['0']['count'];
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS count FROM UserSite WHERE type = 'user'");	
			$stmt->execute();
			$countUser = $stmt->fetchAll();
			
			$array['user'] = $countUser['0']['count'];
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS count FROM UserSite WHERE type = 'administrator'");	
			$stmt->execute();
			$countAdmin = $stmt->fetchAll();
			
			$array['admin'] = $countAdmin['0']['count'];

			$array['total'] = $users['0']['users'];
		} catch(Exception $e) {
			return $e->getMessage();
		}
		
		return $array;
	}

	function getUserStatusStatistics(){
		$array = array();
		try {	
			global $conn;	
			$stmt = $conn->prepare("SELECT COUNT(*) AS active FROM UserSite WHERE userStatus = 'active'");	
			$stmt->execute();
			$active = $stmt->fetchAll();
			
			$array['activeCount'] = $active['0']['active']; 
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS banned FROM UserSite WHERE userStatus = 'banned'");	
			$stmt->execute();
			$banned = $stmt->fetchAll();
			
			$array['bannedCount'] = $banned['0']['banned']; 
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS inactive FROM UserSite WHERE userStatus = 'inactive'");	
			$stmt->execute();
			$inactive = $stmt->fetchAll();
			
			$array['inactiveCount'] = $inactive['0']['inactive']; 
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS inactive FROM UserSite WHERE userStatus = 'reported'");	
			$stmt->execute();
			$reported = $stmt->fetchAll();
			
			$array['reportedCount'] = $reported['0']['reported']; 
		} catch(Exception $e) {
			return $e->getMessage();
		}
		
		return $array;
	}

	function getReportsStatistics(){
		$array = array();
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT COUNT(*) AS reports FROM Report");	
			$stmt->execute();
			$reports = $stmt->fetchAll();
			
			$array['reports'] = $reports['0']['reports'];
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS report FROM Report WHERE userID IS NOT NULL");	
			$stmt->execute();
			$userReport = $stmt->fetchAll();
			
			$array['user'] = $userReport['0']['report'];
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS report FROM Report WHERE taskID IS NOT NULL");	
			$stmt->execute();
			$taskReport = $stmt->fetchAll();
			
			$array['task'] = $taskReport['0']['report'];
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS report FROM Report WHERE threadID IS NOT NULL");	
			$stmt->execute();
			$threadReport = $stmt->fetchAll();
			
			$array['thread'] = $threadReport['0']['report'];
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS report FROM Report WHERE projectID IS NOT NULL");	
			$stmt->execute();
			$projReport = $stmt->fetchAll();
			
			$array['proj'] = $projReport['0']['report'];
		
		} catch(Exception $e) {
			return $e->getMessage();
		}
		
		return $array;
	}

	function getProjectStatistics(){
		$array = array();
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT COUNT(*) AS projects FROM Project");	
			$stmt->execute();
			$projects = $stmt->fetchAll();
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS active FROM Project WHERE projectStatus = 'active'");	
			$stmt->execute();
			$projectsActive = $stmt->fetchAll();
			
			$array['active'] = $projectsActive['0']['active'];
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS reported FROM Project WHERE projectStatus = 'reported'");	
			$stmt->execute();
			$projectReported = $stmt->fetchAll();
			
			$array['reported'] = $projectReported['0']['reported'];
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS banned FROM Project WHERE projectStatus = 'banned'");	
			$stmt->execute();
			$projectBanned = $stmt->fetchAll();
			
			$array['banned'] = $projectBanned['0']['banned'];
			
			$array['total'] = $projects['0']['projects'];
		
		} catch(Exception $e) {
			return $e->getMessage();
		}
		
		return $array;
	}
?>