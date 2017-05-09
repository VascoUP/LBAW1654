<?

function getInfoTask($taskID){
	try {
			global $conn;
			$stmt = $conn->prepare("SELECT Task.name AS name, Task.priority AS priority, Task.description AS description, Task.effort AS effort, Task.taskStatus AS status, Iteration.name AS iterationName, Task.iterationID AS iterationID
									FROM Task, Iteration WHERE taskID = ? 
									AND Iteration.iterationID = Task.iterationID");		
			$stmt->execute(array($taskID));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
		
		return $result;
}

function getNumberUsers($taskID){
	try {
			global $conn;
			$stmt = $conn->prepare("SELECT COUNT(*) AS counter
									FROM TaskUser
									WHERE taskID = ?");		
			$stmt->execute(array($taskID));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
		
		return $result['0']['counter'];
}

function updateTaskName($name, $id){
	try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Task
									SET name = ?
									WHERE taskID = ?");		
			$stmt->execute(array($name, $id));
	
		} catch(Exception $e) {
			return $e->getMessage();
		}
}

function updatePriority($priority, $id){
	try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Task
									SET priority = ?
									WHERE taskID = ?");		
			$stmt->execute(array($priority, $id));
	
		} catch(Exception $e) {
			return $e->getMessage();
		}
}

function updateEffort($effort, $id){
	try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Task
									SET effort = ?
									WHERE taskID = ?");		
			$stmt->execute(array($effort, $id));
	
		} catch(Exception $e) {
			return $e->getMessage();
		}
}

function updateTaskStatus($id){
	try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Task
									SET taskStatus = 'completed'
									WHERE taskID = ?");		
			$stmt->execute(array($id));
	
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

function addTask($name, $priority, $description, $effort, $itID){
	try {
		global $conn;
		
		$taskStatus = 'unassigned';
		
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
		$stmt->bindParam(':taskID', $taskID);
		$stmt->bindParam(':userID', $userID);
		$stmt->execute();
	} catch(Exception $e) {
		return $e->getMessage();
	}
}

?>