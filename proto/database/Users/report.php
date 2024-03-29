<?

function reportUser($user, $content){
	try {
			global $conn;
			$date = date('Y-m-d');
			$status = 'waiting';
			$stmt = $conn->prepare("INSERT INTO Report(content, userID, reportDate, reportStatus) 
									VALUES (:content, :user, :reportDate, :reportStatus)");
			$stmt->bindParam(':content', $content);
			$stmt->bindParam(':user', $user);
			$stmt->bindParam(':reportDate', $date);
			$stmt->bindParam(':reportStatus', $status);
		} catch(Exception $e) {
			return $e->getMessage();
		}
}

function reportTask($task, $content){
	try {
			global $conn;
			$date = date('Y-m-d');
			$status = 'waiting';
			$stmt = $conn->prepare("INSERT INTO Report(content, taskID, reportDate, reportStatus) 
									VALUES (:content, :task, :reportDate, :reportStatus)");
			$stmt->bindParam(':content', $content);
			$stmt->bindParam(':task', $task);
			$stmt->bindParam(':reportDate', $date);
			$stmt->bindParam(':reportStatus', $status);
		} catch(Exception $e) {
			return $e->getMessage();
		}
}

function reportThread($thread, $content){
	try {
			global $conn;
			$date = date('Y-m-d');
			$status = 'waiting';
			$stmt = $conn->prepare("INSERT INTO Report(content, threadID, reportDate, reportStatus) 
									VALUES (:content, :thread, :reportDate, :reportStatus)");
			$stmt->bindParam(':content', $content);
			$stmt->bindParam(':thread', $thread);
			$stmt->bindParam(':reportDate', $date);
			$stmt->bindParam(':reportStatus', $status);
		} catch(Exception $e) {
			return $e->getMessage();
		}
}

?>