<?

function getUserStatistics(){
	$array = array();
	try {
		global $conn;
		$stmt = $conn->prepare("SELECT COUNT(*) AS users FROM UserSite");	
		$stmt->execute();
		$users = $stmt->fetchAll();
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS countCoord FROM UserSite WHERE type = 'coordinator'");	
		$stmt->execute();
		$countCoord = $stmt->fetchAll();
		
		$array['coord'] = $countCoord['0']['countcoord'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS countUser FROM UserSite WHERE type = 'user'");	
		$stmt->execute();
		$countUser = $stmt->fetchAll();
		
		$array['userCount'] = $countUser['0']['countuser'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS countAdmin FROM UserSite WHERE type = 'administrator'");	
		$stmt->execute();
		$countAdmin = $stmt->fetchAll();
		
		$array['admin'] = $countAdmin['0']['countadmin'];

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
		
		$array['reports'] = $reports['reports'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS userReport FROM Report WHERE userID IS NOT NULL");	
		$stmt->execute();
		$userReport = $stmt->fetchAll();
		
		$array['userCount'] = $userReport['0']['userReport'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS taskReport FROM Report WHERE taskID IS NOT NULL");	
		$stmt->execute();
		$taskReport = $stmt->fetchAll();
		
		$array['taskCount'] = $taskReport['0']['taskReport'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS threadReport FROM Report WHERE threadID IS NOT NULL");	
		$stmt->execute();
		$threadReport = $stmt->fetchAll();
		
		$array['threadCount'] = $threadReport['0']['threadReport'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS projReport FROM Report WHERE projectID IS NOT NULL");	
		$stmt->execute();
		$threadReport = $stmt->fetchAll();
		
		$array['projCount'] = $threadReport['0']['projReport'];
	
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
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS projectsActive FROM Project WHERE projectStatus = 'active'");	
		$stmt->execute();
		$projectsActive = $stmt->fetchAll();
		
		$array['active'] = $projectsActive['0']['projectsActive'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS projectReported FROM Project WHERE projectStatus = 'reported'");	
		$stmt->execute();
		$projectReported = $stmt->fetchAll();
		
		$array['reported'] = $projectReported['0']['projectReported'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS projectBanned FROM Project WHERE projectStatus = 'banned'");	
		$stmt->execute();
		$projectBanned = $stmt->fetchAll();
		
		$array['banned'] = $projectBanned['0']['projectBanned'];
		
		$array['total'] = $projects['0']['projects'];
	
	} catch(Exception $e) {
		return $e->getMessage();
	}
	
	return $array;
}
?>