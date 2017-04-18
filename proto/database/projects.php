<?php

	include_once('userInformation.php');
	
  function createProject($projName, $description, $access) {
    global $conn;

	$stmt = $conn->prepare("INSERT INTO Project(name, description, access)
								VALUES (:name, :description, :access)");						
	$stmt->bindParam(':name', $projName);
	$stmt->bindParam(':description', $description);
	$stmt->bindParam(':access', $access);
	$stmt->execute();	
	
	insertProjCoord($projName);
  }
  
  function getProjectID($proj){
	global $conn;
    $stmt = $conn->prepare("SELECT projectID 
                            FROM Project
                            WHERE name = ?");
							
    $stmt->execute(array($proj));
	echo $stmt->fetchAll();
    return $stmt->fetchAll();
  }
  
  function insertProjCoord($proj){
	global $conn;
	$projStatus = "working";
	$startDate = date('Y-m-d');
	$userID = getUserID($_SESSION['username']);
	$projID = getProjectID($proj);
	
    $stmt = $conn->prepare("INSERT INTO ProjectCoordinator(userID, projectID, startDate, projectStatus)
								VALUES (:userID, :projectID, :startDate, :projectStatus)");
	$stmt->bindParam(':userID', $userID);
	$stmt->bindParam(':projectID', $projID);
	$stmt->bindParam(':startDate', $startDate);
	$stmt->bindParam(':projectStatus', $projStatus);
	$stmt->execute();
  }
?>