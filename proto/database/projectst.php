<?php
  function createProject($projName, $description, $tags, $access) {
    global $conn;

	$stmt = $conn->prepare("INSERT INTO Project(name, description, access)
								VALUES (:name, :description, :access)");						
	$stmt->bindParam(':name', $projName);
	$stmt->bindParam(':description', $description);
	$stmt->bindParam(':access', $access);
	$stmt->execute();
	
	
  }
?>