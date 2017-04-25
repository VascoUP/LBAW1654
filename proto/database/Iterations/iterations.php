<?

function getInfoIteration($itID){
	try {
			global $conn;
			$stmt = $conn->prepare("SELECT * FROM Iteration WHERE iterationID = ?");		
			$stmt->execute(array($itID));
		} catch(Exception $e) {
			return $e->getMessage();
		}
}

function updateIteration($description, $startDate, $max, $itID){
	try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Iteration
									SET description = ?, startDate = ?, maximumEffort = ?
									WHERE iterationID = ?");		
			$stmt->execute(array($description, $startDate, $max, $itID));
	
		} catch(Exception $e) {
			return $e->getMessage();
		}
}

function updateDueDate($itID){
	try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Iteration
									SET dueDate = ?
									WHERE iterationID = ?");		
			$stmt->execute(array($itID));
	
		} catch(Exception $e) {
			return $e->getMessage();
		}
}

function updateName($itID){
	try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Iteration
									SET name = ?
									WHERE iterationID = ?");		
			$stmt->execute(array($itID));
	
		} catch(Exception $e) {
			return $e->getMessage();
		}
}

function addIteration($name, $description, $startDate, $max, $dueDate){
	try {
		global $conn;
		
		$stmt = $conn->prepare("INSERT INTO Iteration(name, description, startDate, dueDate, maximumEffort)
								VALUES (:name, :description, :startDate, :dueDate, :max)");						
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

function addIterationWithoutName($description, $startDate, $max, $dueDate){
	try {
		global $conn;
		
		$stmt = $conn->prepare("INSERT INTO Iteration(description, startDate, dueDate, maximumEffort)
								VALUES (:description, :startDate, :dueDate, :max)");						
		$stmt->bindParam(':description', $description);
		$stmt->bindParam(':startDate', $startDate);
		$stmt->bindParam(':dueDate', $dueDate);
		$stmt->bindParam(':max', $max);
		$stmt->execute();
	} catch(Exception $e) {
		return $e->getMessage();
	}
}

function addIterationWithoutDueDate($name, $description, $startDate, $max, $dueDate){
	try {
		global $conn;
		
		$stmt = $conn->prepare("INSERT INTO Iteration(name, description, startDate, maximumEffort)
								VALUES (:name, :description, :startDate, :max)");						
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':description', $description);
		$stmt->bindParam(':startDate', $startDate);
		$stmt->bindParam(':max', $max);
		$stmt->execute();
	} catch(Exception $e) {
		return $e->getMessage();
	}
}

function addIterationWithout($description, $startDate, $max, $dueDate){
	try {
		global $conn;
		
		$stmt = $conn->prepare("INSERT INTO Iteration(description, startDate, maximumEffort)
								VALUES (:description, :startDate, :max)");						
		$stmt->bindParam(':description', $description);
		$stmt->bindParam(':startDate', $startDate);
		$stmt->bindParam(':max', $max);
		$stmt->execute();
	} catch(Exception $e) {
		return $e->getMessage();
	}
}

?>