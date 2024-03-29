<?
	function getProjectIterations($projID){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT * FROM Iteration WHERE projectID = ?");		
			$stmt->execute(array($projID));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
		
		return $result;
	}

	function getInfoIteration($itID){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT * FROM Iteration WHERE iterationID = ?");		
			$stmt->execute(array($itID));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
			
		return $result;
	}

	function updateIterationDescription($description, $itID){
		if(	!preg_match('/^[a-zA-Z0-9 .\-]+$/i', $description) )
			return 'Invalid input';

		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Iteration
									SET description = ?
									WHERE iterationID = ?");		
			$stmt->execute(array($description, $itID));
	
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}

	function updateMaximum($max, $itID){
		if(	!filter_var($max, FILTER_SANITIZE_NUMBER_INT) )
			return 'Invalid input';
		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Iteration
									SET maximumEffort = ?
									WHERE iterationID = ?");		
			$stmt->execute(array($max, $itID));
	
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}

	function updateStartDate($start, $itID){
		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Iteration
									SET startDate = ?
									WHERE iterationID = ?");		
			$stmt->execute(array($start, $itID));
	
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}

	function updateDueDate($dueDate, $itID){
		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Iteration
									SET dueDate = ?
									WHERE iterationID = ?");		
			$stmt->execute(array($dueDate, $itID));
	
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}

	function updateDates($startDate, $dueDate, $itID){
		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Iteration
									SET startDate = ?, dueDate = ?
									WHERE iterationID = ?");		
			$stmt->execute(array($startDate, $dueDate, $itID));
	
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}

	function updateName($name, $itID){
		if(	!preg_match('/^[a-zA-Z0-9 .\-]+$/i', $name) )
			return 'Invalid input';
		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Iteration
									SET name = ?
									WHERE iterationID = ?");		
			$stmt->execute(array($name, $itID));
	
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}

	function addIteration($ID, $name, $description, $startDate, $max, $dueDate){
		if(	!preg_match('/^[a-zA-Z0-9 .\-]+$/i', $name) || 
			!filter_var($max, FILTER_SANITIZE_NUMBER_INT) ||
			!preg_match('/^[a-zA-Z0-9 .\-]+$/i', $description) )
			return 'Invalid input';

		try {
			global $conn;
			$stmt = $conn->prepare("INSERT INTO Iteration(projectID, name, description, startDate, dueDate, maximumEffort)
									VALUES (:projID, :name, :description, :startDate, :dueDate, :max)");						
			$stmt->bindParam(':projID', $ID);
			$stmt->bindParam(':name', $name);
			$stmt->bindParam(':description', $description);
			$stmt->bindParam(':startDate', $startDate);
			$stmt->bindParam(':dueDate', $dueDate);
			$stmt->bindParam(':max', $max);
			$stmt->execute();
			
			$stmt = $conn->prepare("SELECT iterationID FROM Iteration WHERE name = ?");
			$stmt->execute(array($name));
			$result = $stmt->fetchAll()['0']['iterationid'];

			return $result;
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}

	function numberTasks($idIt){
		try {
			global $conn;
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS counter FROM Task WHERE Task.iterationID = ?");						
			$stmt->execute(array($idIt));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
		
		return $result['0']['counter'];
	}

	function getTasks($idIt){
		try {
			global $conn;
			
			$stmt = $conn->prepare("SELECT * FROM Task WHERE iterationID = ?");						
			$stmt->execute(array($idIt));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
		
		return $result;
	}

	function numberTasksCompleted($idIt){
		try {
			global $conn;
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS counter FROM Task 
									WHERE iterationID = ? AND taskStatus = 'completed'");						
			$stmt->execute(array($idIt));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
		
		return $result['0']['counter'];
	}

	function givePermission($userID, $itID){
		try {
			global $conn;
			
			$stmt = $conn->prepare("SELECT COUNT(TaskUser.userID) AS counter
									FROM TaskUser, Task
									WHERE Task.iterationID = ? 
									AND Task.taskID = TaskUser.taskID
									AND TaskUser.userID = ?");						
			$stmt->execute(array($itID, $userID));
			$result = $stmt->fetchAll();

			if($result['0']['counter'] == 0)
				return "This user can't add or edit a task in this iteration";
			else
				insertPermission($itID, $userID);
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}

	function insertPermission($itID, $userID){
		try {
			global $conn;
		
			$stmt = $conn->prepare("INSERT INTO IterationsPermissions(iterationID, userID)
									VALUES (?,?)");										
			$stmt->execute(array($itID, $userID));
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}

	function userWithPermission($itID, $userID){
		try {
			global $conn;
			
			$stmt = $conn->prepare("SELECT userID
									FROM IterationsPermissions
									WHERE iterationID = ?
									AND userID = ?");						
			$stmt->execute(array($itID, $userID));
			$result = $stmt->fetchAll();
			
			if(count($result) != 0)
				return true;
			return false;
			
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}
?>