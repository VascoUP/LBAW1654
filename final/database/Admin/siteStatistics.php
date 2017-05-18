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
		
		$array['coordinator'] = ($countCoord['0']['countcoord'])/($users['0']['users']);
		$array['coord'] = $countCoord['0']['countcoord'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS countUser FROM UserSite WHERE type = 'user'");	
		$stmt->execute();
		$countUser = $stmt->fetchAll();
		
		$array['user'] = ($countUser['0']['countuser'])/($users['0']['users']);
		$array['userCount'] = $countUser['0']['countuser'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS countAdmin FROM UserSite WHERE type = 'administrator'");	
		$stmt->execute();
		$countAdmin = $stmt->fetchAll();
		
		$array['administrator'] = ($countAdmin['0']['countadmin'])/($users['0']['users']);
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
		$stmt = $conn->prepare("SELECT COUNT(*) AS users FROM UserSite");	
		$stmt->execute();
		$users = $stmt->fetchAll();
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS active FROM UserSite WHERE userStatus = 'active'");	
		$stmt->execute();
		$active = $stmt->fetchAll();
		
		$array['active'] = ($active['0']['active'])/($users['0']['users']);
		$array['activeCount'] = $active['0']['active']; 
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS banned FROM UserSite WHERE userStatus = 'banned'");	
		$stmt->execute();
		$banned = $stmt->fetchAll();
		
		$array['banned'] = ($banned['0']['banned'])/($users['0']['users']);
		$array['bannedCount'] = $banned['0']['banned']; 
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS inactive FROM UserSite WHERE userStatus = 'inactive'");	
		$stmt->execute();
		$inactive = $stmt->fetchAll();
		
		$array['inactive'] = ($inactive['0']['inactive'])/($users['0']['users']);
		$array['inactiveCount'] = $inactive['0']['inactive']; 
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS inactive FROM UserSite WHERE userStatus = 'reported'");	
		$stmt->execute();
		$reported = $stmt->fetchAll();
		
		$array['reported'] = ($reported['0']['reported'])/($users['0']['users']);
		$array['reportedCount'] = $reported['0']['reported']; 
		
		$array['total'] = $users['0']['users'];
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
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS userReport FROM Report WHERE userID IS NOT NULL");	
		$stmt->execute();
		$userReport = $stmt->fetchAll();
		
		$array['user'] = ($userReport['0']['userreport'])/($reports['0']['reports']);
		$array['userCount'] = $userReport['0']['userreport'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS taskReport FROM UserSite WHERE taskID IS NOT NULL");	
		$stmt->execute();
		$taskReport = $stmt->fetchAll();
		
		$array['taskReport'] = ($taskReport['0']['taskreport'])/($reports['0']['reports']);
		$array['taskCount'] = $taskReport['0']['taskreport'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS threadReport FROM UserSite WHERE threadID IS NOT NULL");	
		$stmt->execute();
		$threadReport = $stmt->fetchAll();
		
		$array['threadReport'] = ($threadReport['0']['threadreport'])/($reports['0']['reports']);
		$array['threadCount'] = $threadReport['0']['threadreport'];
		
		$array['total'] = $reports['0']['reports'];
	
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
		
		$array['projectsActive'] = ($projectsActive['0']['projectsactive'])/($projects['0']['projects']);
		$array['active'] = $projectsActive['0']['projectsactive'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS projectReported FROM Project WHERE projectStatus = 'reported'");	
		$stmt->execute();
		$projectReported = $stmt->fetchAll();
		
		$array['projectReported'] = ($projectReported['0']['projectreported'])/($projects['0']['projects']);
		$array['reported'] = $projectReported['0']['projectreported'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS projectBanned FROM Project WHERE projectStatus = 'banned'");	
		$stmt->execute();
		$projectBanned = $stmt->fetchAll();
		
		$array['projectBanned'] = ($projectBanned['0']['projectbanned'])/($projects['0']['projects']);
		$array['banned'] = $projectBanned['0']['projectbanned'];
		
		$array['total'] = $projects['0']['projects'];
	
	} catch(Exception $e) {
		return $e->getMessage();
	}
	
	return $array;
}
?>