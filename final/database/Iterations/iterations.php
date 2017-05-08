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

function updateDescription($description, $itID){
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

?>