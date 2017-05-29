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
			$stmt->execute();
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}

	function reportTask($task, $projID, $content){
		try {
			global $conn;
			$date = date('Y-m-d');
			$status = 'waiting';
			$stmt = $conn->prepare("INSERT INTO Report(content, taskID, projID, reportDate, reportStatus) 
									VALUES (:content, :task, :proj, :reportDate, :reportStatus)");
			$stmt->bindParam(':content', $content);
			$stmt->bindParam(':task', $task);
			$stmt->bindParam(':proj', $projID);
			$stmt->bindParam(':reportDate', $date);
			$stmt->bindParam(':reportStatus', $status);
			$stmt->execute();
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}

	function reportThread($thread, $projID, $content){
		try {
			global $conn;
			$date = date('Y-m-d');
			$status = 'waiting';
			$stmt = $conn->prepare("INSERT INTO Report(content, threadID, projID, reportDate, reportStatus) 
									VALUES (:content, :thread, :proj, :reportDate, :reportStatus)");
			$stmt->bindParam(':content', $content);
			$stmt->bindParam(':thread', $thread);
			$stmt->bindParam(':proj', $projID);
			$stmt->bindParam(':reportDate', $date);
			$stmt->bindParam(':reportStatus', $status);
			$stmt->execute();
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}

	function reportProject($projID, $content){
		try {
			global $conn;
			$date = date('Y-m-d');
			$status = 'waiting';
			$stmt = $conn->prepare("INSERT INTO Report(content,  projectID, reportDate, reportStatus) 
									VALUES (:content,  :project, :reportDate, :reportStatus)");
			$stmt->bindParam(':content', $content);
			$stmt->bindParam(':project', $projID);
			$stmt->bindParam(':reportDate', $date);
			$stmt->bindParam(':reportStatus', $status);
			$stmt->execute();
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}
?>