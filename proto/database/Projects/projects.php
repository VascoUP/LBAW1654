<?php
	include($BASE_DIR .'database/Users/userInformation.php');
	
  function createProject($projName, $description, $access, $tags) {
	try {
		global $conn;
		
		if($access === 'public')
			$typeAccess = 1;
		else
		$typeAccess = 0;
	
		$stmt = $conn->prepare("INSERT INTO Project(name, description, access)
								VALUES (:name, :description, :access)");						
		$stmt->bindParam(':name', $projName);
		$stmt->bindParam(':description', $description);
		$stmt->bindParam(':access', $typeAccess);
		$stmt->execute();

	} catch(Exception $e) {
		return $e->getMessage();
	}
	
	$id = getProjectID($projName);
	insertProjCoord($id);
	addTags($tags, $id);
  }
  
  function getProjectID($proj){
	try {
		global $conn;
		$stmt = $conn->prepare("SELECT projectID 
								FROM Project
								WHERE name = ?");
		$stmt->execute(array($proj));
		$result = $stmt->fetchAll();
	} catch(Exception $e) {
		return $e->getMessage();
	}

	return $result['0']['projectid'];
  }

  function insertProjCoord($projID){
	try {
		global $conn;
		$projStatus = "working";
		$startDate = date('Y-m-d');
		$userID = getUserID($_SESSION['username']);

		$stmt = $conn->prepare("INSERT INTO ProjectCoordinator(userID, projectID, startDate, projectStatus)
															VALUES (:userID, :projectID, :startDate, :projectStatus)");
		$stmt->bindParam(':userID', $userID);
		$stmt->bindParam(':projectID', $projID);
		$stmt->bindParam(':startDate', $startDate);
		$stmt->bindParam(':projectStatus', $projStatus);
		$stmt->execute();

		$stmt = $conn->prepare("UPDATE UserSite 
								SET type='coordinator' 
								WHERE userID = ?");
		$stmt->execute(array($userID));
	} catch(Exception $e) {
		return $e->getMessage();
	}
  }
  
  function addTags($tags, $id){
	
	foreach($tags as $tag){
		try{
			global $conn;
			
			$stmt = $conn->prepare("SELECT *
									FROM Tag
									WHERE name = ?");
			$stmt->execute(array($tag));
			$result = $stmt->fetchAll();
			
			if(!empty($result)){
				$stmt = $conn->prepare("INSERT INTO Tag(name) VALUES(:name)");
				$stmt->bindParam(':name', $tag);
				$stmt->execute();
				
				$stmt = $conn->prepare("SELECT tagID FROM Tag WHERE name = ?");
				$stmt->execute(array($tag));
				
				$result = $stmt->fetchAll();
				$tagID = $result['0']['tagid'];
				
				$stmt = $conn->prepare("INSERT INTO TagProject(tagID, projectID) VALUES(:tagID, :projID)");
				$stmt->bindParam(':tagID', $tagID);
				$stmt->bindParam(':projID', $id);
				$stmt->execute();
			}
		}
		 catch(Exception $e) {
			return $e->getMessage();
		}
	}
	
  }

?>