<?php
	function inviteToProject($user, $project){
		try{
			global $conn;

			$invitedate = date('Y-m-d');
			$userStatusProject = 'invited';
			$stmt = $conn->prepare("INSERT INTO ProjectUsers(userID, projectID, inviteDate, userStatus) 
									VALUES(:userID, :projectID, :inviteDate, :userStatus)");
			$stmt->bindParam(':userID', $user);
			$stmt->bindParam(':projectID', $project);
			$stmt->bindParam(':inviteDate', $inviteDate);
			$stmt->bindParam(':userStatus', $userStatusProject);
			$stmt->execute();
			
		}
		 catch(Exception $e) {
			return $e->getMessage();
		}
	}
	
	function editTags($tags, $project){
		foreach($tags as $tag){
			try{
				global $conn;
				
				if(tagExists($tag, $project)
					return;
				
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
	
	function tagExists($tag, $project){
		try{
			global $conn;
			
			$stmt = $conn->prepare("SELECT tagID FROM TagProject, Tag WHERE projectID = ? 
									AND Tag.tagID = ? 
									AND TagProject.tagID = Tag.tagID");
			$stmt->execute(array($project, $tag));
			
			if(count($result = $stmt->fetchAll()) != 0)
				return true;
			else
				return false;
			
		}catch(Exception $e) {
			return $e->getMessage();
		}
	}
?>