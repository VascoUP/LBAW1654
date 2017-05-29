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
										WHERE ProjectUsers.userid = ?)");	
			$stmt->execute(array($userID, $userID));
			$users = $stmt->fetchAll();
			$array['projects'] = $users['0']['projcount'];
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS active
										FROM Project
										WHERE projectid IN (SELECT ProjectUsers.projectid FROM ProjectUsers
										WHERE ProjectUsers.userid = ?
										AND userStatusProject = 'active')");	
			$stmt->execute(array($userID));
			$users = $stmt->fetchAll();
			$array['active'] = $users['0']['active'];
		
			$stmt = $conn->prepare("SELECT COUNT(*) AS inactive
										FROM Project
										WHERE projectid IN (SELECT ProjectUsers.projectid FROM ProjectUsers
										WHERE ProjectUsers.userid = ?
										AND userStatusProject = 'inactive')");	
			$stmt->execute(array($userID));
			$users = $stmt->fetchAll();
			$array['inactive'] = $users['0']['inactive'];
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS invited
										FROM Project
										WHERE projectid IN (SELECT ProjectUsers.projectid FROM ProjectUsers
										WHERE ProjectUsers.userid = ?
										AND userStatusProject = 'invited')");	
			$stmt->execute(array($userID));
			$users = $stmt->fetchAll();
			$array['invited'] = $users['0']['invited'];
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS requested
										FROM Project
										WHERE projectid IN (SELECT ProjectUsers.projectid FROM ProjectUsers
										WHERE ProjectUsers.userid = ?
										AND userStatusProject = 'requested')");	
			$stmt->execute(array($userID));
			$users = $stmt->fetchAll();
			$array['requested'] = $users['0']['requested'];
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS working
										FROM Project, ProjectCoordinator
										WHERE ProjectCoordinator.userid = ?
										AND ProjectCoordinator.projectStatus = 'working'
										AND Project.projectID = projectCoordinator.projectID");	
			$stmt->execute(array($userID));
			$users = $stmt->fetchAll();
			$array['working'] = $users['0']['working'];
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS finished
										FROM Project, ProjectCoordinator
										WHERE ProjectCoordinator.userid = ?
										AND ProjectCoordinator.projectStatus = 'finished'
										AND Project.projectID = projectCoordinator.projectID");	
			$stmt->execute(array($userID));
			$users = $stmt->fetchAll();
			$array['finished'] = $users['0']['finished'];
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS taskCount FROM TaskUser WHERE userID = ?");	
			$stmt->execute(array($userID));
			$users = $stmt->fetchAll();
			
			$array['tasks'] = $users['0']['taskcount'];
			
			$stmt = $conn->prepare("SELECT COUNT(Iteration.iterationID) AS iteration FROM Iteration, TaskUser WHERE userID = ? AND Iteration.iterationID = TaskUser.taskID");	
			$stmt->execute(array($userID));
			$users = $stmt->fetchAll();
			
			$array['iterations'] = $users['0']['iteration'];
			
		} catch(Exception $e) {
			return $e->getMessage();
		}
		
		return $array;
	}
?>