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
	  try {
			global $conn;
			$stmt = $conn->prepare("UPDATE Thread
									SET name = ?
									WHERE threadID = ?");
								
			$stmt->execute(array($name,$id));
		} catch(Exception $e) {
			return $e->getMessage();
		}
  }

  function addForum($projID, $title, $date){
	  try {
			global $conn;
			$stmt = $conn->prepare("INSERT INTO Thread(projectID, title, date)
									VALUES(:projID, :title, :date");
								
			$stmt->bindParam(':projectID', $projID);
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
  
  function addComment($thread, $user){
	  try {
			global $conn;
			$stmt = $conn->prepare("INSERT INTO Comment(threadID, userID, content, date) 
									VALUES (:thread, :user, :content, :date)");
								
			$stmt->bindParam(':threadID', $thread);
			$stmt->bindParam(':user', $user);
			$stmt->bindParam(':content', $title);
			$stmt->bindParam(':date', $date);
		} catch(Exception $e) {
			return $e->getMessage();
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