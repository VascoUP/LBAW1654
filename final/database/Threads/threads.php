<?php
  function getThreads($projID){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT * 
									FROM Thread
									WHERE projectID = ?");
								
			$stmt->execute(array($projID));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
    return $result;
  }
  
  function getThreadCreated($projID){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT * 
									FROM Thread
									WHERE projectID = ?
									ORDER BY threadID DESC
									LIMIT 1");
								
			$stmt->execute(array($projID));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
    return $result;
  }
  
  function getThreadInformation($thread, $projID) {
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT title, date, username 
									FROM Thread, UserSite
									WHERE threadID = ?
									AND projectID = ?
									AND UserSite.userID = Thread.userSite");
								
			$stmt->execute(array($thread));
			$stmt->execute(array($projID));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
	}
    return $result;
  }
  
  function getThreadInfo($thread){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT title, date 
									FROM Thread
									WHERE threadID = ?");
								
			$stmt->execute(array($thread));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
    return $result;
  }
  
  function getProject($threadID){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT projectID
									FROM Thread
									WHERE threadID = ?");
								
			$stmt->execute(array($threadID));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
    return $result['0']['projectid'];
  }
  
  function editThread($id, $name){
		if(	!preg_match('/^[a-zA-Z0-9 \-]+$/i', $name) )
			return 'Invalid input';
		try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Thread
									SET title = ?
									WHERE threadID = ?");
								
			$stmt->execute(array($name, $id));
		} catch(Exception $e) {
			return $e->getMessage();
		}
  }

  function addForum($projID, $userID, $title, $date){
		if(	!preg_match('/^[a-zA-Z0-9 \-]+$/i', $title) )
			return 'Invalid input';
		try {
			global $conn;
			$stmt = $conn->prepare("INSERT INTO Thread(projectID, userID, title, date)
									VALUES(:projID, :userID, :title, :date)");
								
			$stmt->bindParam(':projID', $projID);
			$stmt->bindParam(':userID', $userID);
			$stmt->bindParam(':title', $title);
			$stmt->bindParam(':date', $date);
			$stmt->execute();
		} catch(Exception $e) {
			return $e->getMessage();
		}
  }
  
  function getComments($thread){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT * 
									FROM Comment
									WHERE threadID = ?");
								
			$stmt->execute(array($thread));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
    return $result;
  }
  
  function addComment($thread, $user, $content, $date) {
		if(	!preg_match('/^[a-zA-Z0-9 .\-]+$/i', $content) )
			return 'Invalid input';
		try {
			global $conn;
			$stmt = $conn->prepare("INSERT INTO Comment(threadID, userID, content, date) 
									VALUES (:threadID, :userID, :content, :date)");
								
			$stmt->bindParam(':threadID', $thread);
			$stmt->bindParam(':userID', $user);
			$stmt->bindParam(':content', $content);
			$stmt->bindParam(':date', $date);
			$stmt->execute();
		} catch(Exception $e) {
			echo $e->getMessage();
		}
  }
  
  function addTaskComment($thread, $user, $content, $date, $taskID){
		if(	!preg_match('/^[a-zA-Z0-9 .\-]+$/i', $content) )
			return 'Invalid input';
		try {
			global $conn;
			$date = date('Y-m-d');
			$stmt = $conn->prepare("INSERT INTO Comment(taskID, threadID, userID, content, date) 
									VALUES (:taskID, :threadID, :userID, :content, :date)");
			$stmt->bindParam(':taskID', $taskID);			
			$stmt->bindParam(':threadID', $thread);
			$stmt->bindParam(':userID', $user);
			$stmt->bindParam(':content', $content);
			$stmt->bindParam(':date', $date);
			$stmt->execute();
		} catch(Exception $e) {
			echo $e->getMessage();
		}
  }
  
  function numberOfComments($thread){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT COUNT(*) AS counter
									FROM Comment
									WHERE threadID = ?");
								
			$stmt->execute(array($thread));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
		return $result['0']['counter'];
  }
  
  function lastComment($thread){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT * 
									FROM Comment
									WHERE threadID = ?
									ORDER BY Comment.commentID DESC
									LIMIT 1");
								
			$stmt->execute(array($thread));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
		return $result;
  }
?>