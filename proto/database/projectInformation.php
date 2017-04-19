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
?>