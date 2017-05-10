<?php
	function inviteToProject($user, $project){
		if( checkWorkingOnProject($user, $project) == true )
			return ;
			
		$invitedate = date("Y-m-d");
		try{
			global $conn;

			$invitedate = date("Y-m-d");
			$userStatusProject = 'invited';
			$stmt = $conn->prepare("INSERT INTO ProjectUsers(userID, projectID, inviteDate, userStatusProject) 
									VALUES(:userID, :projectID, :inviteDate, :userStatusProject)");
			$stmt->bindParam(':userID', $user);
			$stmt->bindParam(':projectID', $project);
			$stmt->bindParam(':inviteDate', $invitedate);
			$stmt->bindParam(':userStatusProject', $userStatusProject);
			$stmt->execute();
			
		}
		 catch(Exception $e) {
			return $e->getMessage() . " - " . $invitedate;
		}
	}

	function checkWorkingOnProject($user, $project) {
		try{
			global $conn;

			$stmt = $conn->prepare("SELECT UserSite.userID 
									FROM ProjectCoordinator, ProjectUser, UserSite 
									WHERE (ProjectCoordinator.projectID = ? 
											AND ProjectCoordinator.userID = UserSite.userID)  
									OR (ProjectUsers.projectID = ? 
											AND ProjectUsers.userID = UserSite.userID)" );
      		$stmt->execute(array($project, $project));
      		$result = $stmt->fetchAll();

			foreach ($result as &$value)
				if( $value['userid'] == $user )
					return true;
			return false;
	
		}
		 catch(Exception $e) {
			return $e->getMessage();
		}
	}
?>