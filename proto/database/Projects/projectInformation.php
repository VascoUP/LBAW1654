<?php
  include('../../database/Users/userInformation.php');
  
  function getProjectInformation($ID) {
	  global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM Project
                            WHERE projectID = ?");		
    $stmt->execute(array($ID));
    return $stmt->fetchAll();
  }
  
  function getNumberUsers($ID){
	global $conn;
    $stmt = $conn->prepare("SELECT count(*) AS counter 
                            FROM ProjectCoordinator
                            WHERE ProjectCoordinator.projectID = ?");		
    $stmt->execute(array($ID));
    $result = $stmt->fetchAll();
    return $result['0']['counter'];
  }
?>