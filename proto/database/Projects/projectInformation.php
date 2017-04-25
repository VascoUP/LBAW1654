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
      $resultCoord = $stmt->fetchAll();
	  
	  $stmt = $conn->prepare("SELECT count(*) AS counter 
                                FROM ProjectUsers
                                WHERE ProjectUsers.projectID = ?");		
      $stmt->execute(array($ID));
      $resultUsers = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}

    return $resultCoord['0']['counter'] + $resultUsers['0']['counter'];
  }
?>