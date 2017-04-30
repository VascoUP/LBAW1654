<?

function getInfoTask($taskID){
	try {
			global $conn;
			$stmt = $conn->prepare("SELECT Task.name AS name, Task.priority AS priority, Task.description AS description, Task.effort AS effort, Iteration.name AS iterationName
									FROM Task, Iteration WHERE taskID = ? 
									AND Iteration.iterationID = Task.iterationID");		
			$stmt->execute(array($taskID));
		} catch(Exception $e) {
			return $e->getMessage();
		}
}

function updateTask($name, $priority, $effort, $taskStatus, $id){
	try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Task
									SET name = ?, priority = ?, effort = ?, taskStatus = ?
									WHERE taskID = ?");		
			$stmt->execute(array($name, $priority, $effort, $taskStatus, $id));
	
		} catch(Exception $e) {
			return $e->getMessage();
		}
}

function updateTaskDescription($description, $id){
	try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Task
									SET description = ?
									WHERE taskID = ?");		
			$stmt->execute(array($description, $id));
	
		} catch(Exception $e) {
			return $e->getMessage();
		}
}

function addTask($name, $priority, $description, $effort, $taskStatus, $itID){
	try {
		global $conn;
		
		$stmt = $conn->prepare("INSERT INTO Task(iterationID, priority, description, name, effort, taskStatus)
								VALUES (:iterationID, :priority, :description, :name, :effort, :taskStatus)");						
		$stmt->bindParam(':iterationID', $itID);
		$stmt->bindParam(':priority', $priority);
		$stmt->bindParam(':description', $description);
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':effort', $effort);
		$stmt->bindParam(':taskStatus', $taskStatus);
		$stmt->execute();
	} catch(Exception $e) {
		return $e->getMessage();
	}
}

function deleteTask($idTask){
	try {
		global $conn;
		
		$stmt = $conn->prepare("DELETE FROM Task WHERE taskID = ?");						
		$stmt->execute(array($idTask));
	} catch(Exception $e) {
		return $e->getMessage();
	}
}

function joinTask($userID, $taskID){
	try {
		global $conn;
		
		$stmt = $conn->prepare("INSERT INTO TaskUser(taskID, userID)
								VALUES (:taskID, :userID)");						
		$stmt->bindParam(':taskID', $itID);
		$stmt->bindParam(':userID', $userID);
		$stmt->execute();
	} catch(Exception $e) {
		return $e->getMessage();
	}
}

?>