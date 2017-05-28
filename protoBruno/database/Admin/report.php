<?
function getReported($status){
	try {
		global $conn;
	
		$stmt = $conn->prepare("SELECT * FROM Report WHERE reportStatus = ?");						
		$stmt->execute(array($status));
		$result = $stmt->fetchAll();
	} catch(Exception $e) {
		return $e->getMessage();
	}
	
	return $result;
}

function getUsersReported(){
	try {
		global $conn;
	
		$stmt = $conn->prepare("SELECT * FROM Report WHERE userID IS NOT NULL");
		$stmt->execute();		
		$result = $stmt->fetchAll();
	} catch(Exception $e) {
		echo $e->getMessage();
	}
	
	return $result;
}

function getTaskReported(){
	try {
		global $conn;
	
		$stmt = $conn->prepare("SELECT * FROM Report WHERE taskID IS NOT NULL");
		$stmt->execute();		
		$result = $stmt->fetchAll();
	} catch(Exception $e) {
		return $e->getMessage();
	}
	
	return $result;
}

function getThreadReported(){
	try {
		global $conn;
	
		$stmt = $conn->prepare("SELECT * FROM Report WHERE threadID IS NOT NULL");
		$stmt->execute();
		$result = $stmt->fetchAll();
	} catch(Exception $e) {
		return $e->getMessage();
	}
	
	return $result;
}

function getProjectReported(){
	try {
		global $conn;
	
		$stmt = $conn->prepare("SELECT * FROM Report WHERE projectID IS NOT NULL");
		$stmt->execute();
		$result = $stmt->fetchAll();
	} catch(Exception $e) {
		return $e->getMessage();
	}
	
	return $result;
}

function handlerReport($id){
	try {
		global $conn;
	
		$stmt = $conn->prepare("UPDATE Report SET reportStatus = 'handled' WHERE reportid = ?");
		$stmt->execute(array($id));
	} catch(Exception $e) {
		return $e->getMessage();
	}
	
}
?>