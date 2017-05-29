<?
	function numberOf($proj){
		$array = array();
		try {
			global $conn;
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS tasks
									FROM Task, Project, Iteration
									WHERE Project.projectID = ?
									AND Iteration.projectID = Project.projectID
									AND Task.iterationID = Iteration.iterationID");						
			$stmt->execute(array($proj));
			$result = $stmt->fetchAll();
			$array['tasks'] = $result['0']['tasks'];
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS iterations
									FROM Project, Iteration
									WHERE Project.projectID = ?
									AND Iteration.projectID = Project.projectID");						
			$stmt->execute(array($proj));
			$result = $stmt->fetchAll();
			$array['iterations'] = $result['0']['iterations'];
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS threads
									FROM Project, Thread
									WHERE Project.projectID = ?
									AND Thread.projectID = Project.projectID");						
			$stmt->execute(array($proj));
			$result = $stmt->fetchAll();
			$array['threads'] = $result['0']['threads'];
		} catch(Exception $e) {
			return $e->getMessage();
		}
		
		return $array;
	}

	function taskCompletedPerIteration($proj){
		try {
			global $conn;
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS counter
									FROM Task, Iteration
									WHERE Iteration.projectID = ?
									AND Task.iterationID = Iteration.iterationID
									AND Task.taskStatus = 'completed'");						
			$stmt->execute(array($proj));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
		return $result['0']['counter'];
	}
	
	function reports($proj){
		$array = array();
		try{
		global $conn;
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS task FROM Report, Task, Iteration WHERE Report.taskID IS NOT NULL AND Task.taskID = Report.taskID AND Task.iterationID = Iteration.iterationID AND Iteration.projectID = ? ");	
			$stmt->execute(array($proj));
			$report = $stmt->fetchAll();
			
			$array['task'] = $report['0']['task'];
			
			$stmt = $conn->prepare("SELECT COUNT(*) AS thread FROM Report, Thread WHERE Report.threadID IS NOT NULL AND Thread.threadID = Report.reportID AND Thread.projectID = ? ");	
			$stmt->execute(array($proj));
			$report = $stmt->fetchAll();
			
			$array['thread'] = $report['0']['thread'];
		
		} catch(Exception $e) {
			echo $e->getMessage();
		}
		
		return $array;
	}
?>