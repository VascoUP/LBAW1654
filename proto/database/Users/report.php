<?

function reportUser($user){
	try {
			global $conn;
			$date = date('Y-m-d');
			$status = 'waiting';
			$stmt = $conn->prepare("INSERT INTO Report(userID, reportDate, reportStatus) 
									VALUES (:user, :reportDate, :reportStatus)");
			$stmt->bindParam(':user', $user);
			$stmt->bindParam(':reportDate', $date);
			$stmt->bindParam(':reportStatus', $status);
		} catch(Exception $e) {
			return $e->getMessage();
		}
}

function reportTask($task){
	try {
			global $conn;
			$date = date('Y-m-d');
			$status = 'waiting';
			$stmt = $conn->prepare("INSERT INTO Report(taskID, reportDate, reportStatus) 
									VALUES (:task, :reportDate, :reportStatus)");
			$stmt->bindParam(':task', $task);
			$stmt->bindParam(':reportDate', $date);
			$stmt->bindParam(':reportStatus', $status);
		} catch(Exception $e) {
			return $e->getMessage();
		}
}

function reportTask($thread){
	try {
			global $conn;
			$date = date('Y-m-d');
			$status = 'waiting';
			$stmt = $conn->prepare("INSERT INTO Report(threadID, reportDate, reportStatus) 
									VALUES (:thread, :reportDate, :reportStatus)");
			$stmt->bindParam(':thread', $thread);
			$stmt->bindParam(':reportDate', $date);
			$stmt->bindParam(':reportStatus', $status);
		} catch(Exception $e) {
			return $e->getMessage();
		}
}

?>