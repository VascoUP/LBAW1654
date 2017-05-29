<?
	function sendNotification($reportID, $content){
		try {
			global $conn;
			$date = date('Y-m-d');
			$status = 'waiting';
			$stmt = $conn->prepare("INSERT INTO Notification(reportID, notificationDate, content, notificationStatus) 
									VALUES (:reportID, :date, :content, :status)");
								
			$stmt->bindParam(':reportID', $reportID);
			$stmt->bindParam(':date', $date);
			$stmt->bindParam(':content', $content);
			$stmt->bindParam(':status', $status);
			$stmt->execute();
		} catch(Exception $e) {
			return $e->getMessage();
		}		
	}
?>