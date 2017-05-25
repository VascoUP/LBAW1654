<?

function getUserStatistics($userID){
	$array = array();
	try {
		global $conn;
		$stmt = $conn->prepare("SELECT COUNT(*) AS projCount
									FROM Project
									WHERE projectid IN (SELECT ProjectCoordinator.projectid
														FROM ProjectCoordinator
														WHERE ProjectCoordinator.userid = ?)
									OR projectid IN (SELECT ProjectUsers.projectid FROM ProjectUsers
									WHERE ProjectUsers.userid = ?)
									ORDER BY name");	
		$stmt->execute(array($userID));
		$users = $stmt->fetchAll();
		$array['projects'] = $users['0']['projCount'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS active
									FROM Project
									WHERE projectid IN (SELECT ProjectUsers.projectid FROM ProjectUsers
									WHERE ProjectUsers.userid = ?
									AND userStatusProject = 'active')
									ORDER BY name");	
		$stmt->execute(array($userID));
		$users = $stmt->fetchAll();
		$array['active'] = $users['0']['active'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS inactive
									FROM Project
									WHERE projectid IN (SELECT ProjectUsers.projectid FROM ProjectUsers
									WHERE ProjectUsers.userid = ?
									AND userStatusProject = 'inactive')
									ORDER BY name");	
		$stmt->execute(array($userID));
		$users = $stmt->fetchAll();
		$array['inactive'] = $users['0']['inactive'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS invited
									FROM Project
									WHERE projectid IN (SELECT ProjectUsers.projectid FROM ProjectUsers
									WHERE ProjectUsers.userid = ?
									AND userStatusProject = 'invited')
									ORDER BY name");	
		$stmt->execute(array($userID));
		$users = $stmt->fetchAll();
		$array['invited'] = $users['0']['invited'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS requested
									FROM Project
									WHERE projectid IN (SELECT ProjectUsers.projectid FROM ProjectUsers
									WHERE ProjectUsers.userid = ?
									AND userStatusProject = 'requested')
									ORDER BY name");	
		$stmt->execute(array($userID));
		$users = $stmt->fetchAll();
		$array['requested'] = $users['0']['requested'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS working
									FROM Project
									WHERE projectid IN (SELECT ProjectCoordinator.projectid
														FROM ProjectCoordinator
														WHERE ProjectCoordinator.userid = ?
														AND projectStatus = 'working')
									ORDER BY name");	
		$stmt->execute(array($userID));
		$users = $stmt->fetchAll();
		$array['working'] = $users['0']['working'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS finished
									FROM Project
									WHERE projectid IN (SELECT ProjectCoordinator.projectid
														FROM ProjectCoordinator
														WHERE ProjectCoordinator.userid = ?
														AND projectStatus = 'finished')
									ORDER BY name");	
		$stmt->execute(array($userID));
		$users = $stmt->fetchAll();
		$array['finished'] = $users['0']['finished'];
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS taskCount FROM TaskUser WHERE userID = ?");	
		$stmt->execute(array($userID));
		$users = $stmt->fetchAll();
		
		$array['tasks'] = $users['0']['taskCount'];
		
		$stmt = $conn->prepare("SELECT COUNT(Iteration.iterationID) AS iteration FROM Iteration, TaskUser WHERE userID = ? AND Iteration.iterationID = TaskUser.taskID");	
		$stmt->execute();
		$users = $stmt->fetchAll();
		
		$array['iterations'] = $users['0']['iteration'];
		
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
		$projReport = $stmt->fetchAll();
		
		$array['projCount'] = $projReport['0']['projReport'];
	
	} catch(Exception $e) {
		return $e->getMessage();
	}
	
	return $array;
}
?>