<?php
  include($BASE_DIR .'database/Users/userInformation.php');
  
  function getProjectInformation($ID) {
		try {
      global $conn;
      $stmt = $conn->prepare("SELECT * 
                              FROM Project
                              WHERE projectID = ?");		
      $stmt->execute(array($ID));
      $result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}

    return $result;
  }
  
  function getNumberUsers($ID){
    try {
      global $conn;
      $stmt = $conn->prepare("SELECT count(*) AS counter 
                                FROM ProjectCoordinator
                                WHERE ProjectCoordinator.projectID = ?");		
      $stmt->execute(array($ID));
      $result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}

    return $result['0']['counter'];
  }
?>