<?php
  include_once('userInformation.php');
  
  function getProjID($username){
	global $conn;
	$userID = getUserID($username);
    $stmt = $conn->prepare("SELECT projectID 
                            FROM ProjectCoordinator
                            WHERE userID = ?");
    $stmt->execute(array($userID));
	$result = $stmt->fetchAll();
    return $result['0']['projectid'];
  }
  
  function getProjectInformation($username) {
	global $conn;
	$ID = getProjID($_SESSION['username']);
	
    $stmt = $conn->prepare("SELECT * 
                            FROM Project
                            WHERE projectID = ?");		
    $stmt->execute(array($ID));
    return $stmt->fetchAll();
  }
?>