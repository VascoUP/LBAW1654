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
  function getThreadInformation($thread) {
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT * 
									FROM Thread
									WHERE threadID = ?");
								
			$stmt->execute(array($thread));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
    return $result;
  }
  
  function editThread($id, $name, $description){
	  try {
			global $conn;
			$stmt = $conn->prepare("UPDATE
									SET name = ?, description = ?
									WHERE threadID = ?");
								
			$stmt->execute(array($name, $description, $id));
		} catch(Exception $e) {
			return $e->getMessage();
		}
  }

  function addForum($projID){
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
?>