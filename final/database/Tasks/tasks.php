<?
	include_once($BASE_DIR .'database/Iterations/iterations.php');
	include_once($BASE_DIR .'database/Users/userInformation.php');

	function userHasPremission($itID, $userID) {
		return userWithPermission($itID, $userID);
	}

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
		if(	!preg_match('/^[a-zA-Z0-9 \-]+$/i', $name) )
			return 'Invalid input';
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
		if(	!filter_var($priority, FILTER_SANITIZE_NUMBER_INT) )
			return 'Invalid input';
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

	function completeTask($id){
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

	function updateStatus($status, $id){
		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Task
									SET taskStatus = ?
									WHERE taskID = ?");		
			$stmt->execute(array($status, $id));

		} catch(Exception $e) {
			return $e->getMessage();
		}
	}

	function updateTaskDescription($description, $id){
		if(	!preg_match('/^[a-zA-Z0-9 .\-]+$/i', $description) )
			return 'Invalid input';
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

	function addTask($name, $priority, $description, $effort, $itID, $userID){
		if(	userHasPremission($itID, $userID) !== true || 
			!preg_match('/^[a-zA-Z0-9 \-]+$/i', $name) ||
			!filter_var($effort, FILTER_SANITIZE_NUMBER_INT) ||
			!preg_match('/^[a-zA-Z0-9 .\-]+$/i', $description) )
			echo 'Invalid input';

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
			
			$stmt = $conn->prepare("UPDATE Task SET taskStatus='active' WHERE taskID = ?");
			$stmt->execute(array($taskID));
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}

	function leaveTask($userID, $taskID){
		try {
			global $conn;
			
			$stmt = $conn->prepare("DELETE FROM TaskUser WHERE taskID = ? AND userID = ?");					
			$stmt->execute(array($taskID, $userID));
			
			echo getNumberUsers($taskID);
			if(getNumberUsers($taskID) == 0){
				$stmt = $conn->prepare("UPDATE Task SET taskStatus='unassigned' WHERE taskID = ?");
				$stmt->execute(array($taskID));
			}
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}
	
	function getUserTask($userID, $taskID){
		try {
			global $conn;
			
			$stmt = $conn->prepare("SELECT * FROM TaskUser WHERE TaskUser.userID = ? AND TaskUser.taskID = ?");					
			$stmt->execute(array($userID, $taskID));
			$result = $stmt->fetchAll();
			
			if(count($result) == 0)
				return 0;
			return 1;
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}
?>