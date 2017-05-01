<?

function taskCompletedPerProject($projID){
	try {
		global $conn;
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS counterTask
								FROM Task, Project, Iteration
								WHERE Project.projectID = ?
								AND Iteration.projectID = Project.projectID
								AND Task.iterationID = Iteration.iterationID
								AND Task.taskStatus = 'completed'");						
		$stmt->execute(array($projID));
		$result = $stmt->fetchAll();
	} catch(Exception $e) {
		return $e->getMessage();
	}
	return $result;
  }
}

function taskCompletedPerIteration($iteration){
	try {
		global $conn;
		
		$stmt = $conn->prepare("SELECT COUNT(*) AS counterTask
								FROM Task, Iteration
								WHERE Iteration.iteartionID = ?
								AND Task.iterationID = Iteration.iterationID
								AND Task.taskStatus = 'completed'");						
		$stmt->execute(array($iteration));
		$result = $stmt->fetchAll();
	} catch(Exception $e) {
		return $e->getMessage();
	}
	return $result;
  }
}

function taskCompletedPerUser($proj){
	try {
		global $conn;
		
		$stmt = $conn->prepare("SELECT AVG(TaskUser.taskID) AS counterTask
								FROM Task, TaskUser, Project, Iteration
								WHERE Project.projectID = ?
								AND Iteration.projectID = Project.projectID
								AND Task.iterationID = Iteration.iterationID
								AND Task.taskStatus = 'completed'
								AND TaskUser.taskID = Task.taskID");						
		$stmt->execute(array($iteration));
		$result = $stmt->fetchAll();
	} catch(Exception $e) {
		return $e->getMessage();
	}
	return $result;
  }

?>