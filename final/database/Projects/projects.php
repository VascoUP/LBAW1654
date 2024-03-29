<?php
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/Projects/projectInformation.php');

	function createProject($projName, $description, $access, $tags) {
		if(	!preg_match('/^[a-zA-Z0-9 .\-]+$/i', $projName) || 
			!preg_match('/^[a-zA-Z0-9 .\-]+$/i', $description))
			return 'Invalid project information';

		try {
			global $conn;
			$conn->beginTransaction();
			
			if($access === 'public') 
				$typeAccess = 1;
			else $typeAccess = 0;
			
			$status = 'active';

			$stmt = $conn->prepare("INSERT INTO Project(name, description, access, projectStatus)
									VALUES (:name, :description, :access, :status)");						
			$stmt->bindParam(':name', $projName);
			$stmt->bindParam(':description', $description);
			$stmt->bindParam(':access', $typeAccess);
			$stmt->bindParam(':status', $status);
			$stmt->execute();
			
			$id = getProjectID($projName);
			
			foreach($tags as $tag) {
				$tag = trim($tag);
				if(	!preg_match('/^[a-zA-Z0-9 .\-]+$/i', $tag) )
					return 'Invalid tag';

				$stmt = $conn->prepare("SELECT *
										FROM Tag
										WHERE name = ?");
				$stmt->execute(array($tag));
				$result = $stmt->fetchAll();
				
				if(count($result) == 0){
					$stmt = $conn->prepare("INSERT INTO Tag(name) VALUES(:name)");
					$stmt->bindParam(':name', $tag);
					$stmt->execute();
				}
				
				$stmt = $conn->prepare("SELECT tagID FROM Tag WHERE name = ?");
				$stmt->execute(array($tag));
				
				$result = $stmt->fetchAll();
				$tagID = $result['0']['tagid'];
				
				$stmt = $conn->prepare("INSERT INTO TagProject(tagID, projectID) VALUES(:tagID, :projID)");
				$stmt->bindParam(':tagID', $tagID);
				$stmt->bindParam(':projID', $id);
				$stmt->execute();
			}
			
			$conn->commit();
		} catch(Exception $e) {
			$conn->rollBack();
			return $e->getMessage();
		}

		$id = getProjectID($projName);
		insertProjCoord($id);

		return $id;
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

		} catch(Exception $e) {
			return $e->getMessage();
		}
	}

	function addTags($tags, $id){
		foreach($tags as $tag){
			$tag = trim($tag);
			if(	!preg_match('/^[a-zA-Z0-9 .\-]+$/i', $tag) )
				continue;
			try{
				global $conn;
				
				$stmt = $conn->prepare("SELECT *
										FROM Tag
										WHERE name = ?");
				$stmt->execute(array($tag));
				$result = $stmt->fetchAll();
				
				if(count($result) == 0){
					$stmt = $conn->prepare("INSERT INTO Tag(name) VALUES(:name)");
					$stmt->bindParam(':name', $tag);
					$stmt->execute();
				}
				
				$stmt = $conn->prepare("SELECT tagID FROM Tag WHERE name = ?");
				$stmt->execute(array($tag));
				
				$result = $stmt->fetchAll();
				$tagID = $result['0']['tagid'];
				
				$stmt = $conn->prepare("INSERT INTO TagProject(tagID, projectID) VALUES(:tagID, :projID)");
				$stmt->bindParam(':tagID', $tagID);
				$stmt->bindParam(':projID', $id);
				$stmt->execute();
				
			}
				catch(Exception $e) {
				return $e->getMessage();
			}
		}
	}

	function leaveProject($userID, $projID) {
		try{
			global $conn;
			if(isCoordinatorInProject($projID, $userID) == 1) {
				if(count(getCoordinator($projID)) !== 1) { 
					$stmt = $conn->prepare("DELETE FROM ProjectCoordinator WHERE userID = ? AND projectID = ?");
					$stmt->execute(array($userID, $projID));
				} else
					return 'Unable to delete a coordinator from this project';
			} else {
				$stmt = $conn->prepare("DELETE FROM ProjectUsers WHERE userID = ? AND projectID = ?");
				$stmt->execute(array($userID, $projID));
			}
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}

?>