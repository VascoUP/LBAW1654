<?php
  include_once('userInformation.php');
  
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
    $stmt = $conn->prepare("SELECT COUNT(*) 
                            FROM ProjectCoordinator, ProjectUsers
                            WHERE ProjectCoordinator.projectID = ?
							AND ProjectUsers.projectID = ?");		
    $stmt->execute(array($ID, $ID));
    return $stmt->fetchAll();  
  }
?>