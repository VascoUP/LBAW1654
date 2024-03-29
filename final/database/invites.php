<?
    function invitedProjects($userID){
        try {
            global $conn;
            $stmt = $conn->prepare("SELECT Project.projectID AS projectID, ProjectUsers.userID AS userID, Project.name AS name
                                    FROM Project, ProjectUsers
                                    WHERE Project.projectID = ProjectUsers.projectID
                                    AND ProjectUsers.userStatusProject = 'invited'
                                    AND ProjectUsers.userID = ?");
            $stmt->execute(array($userID));
            $result = $stmt->fetchAll();
        } catch(Exception $e) {
            return $e->getMessage();
        }

        return $result;		
    }

    function getRequestedParticition($userID) {
        try {
            global $conn;
            $stmt = $conn->prepare("SELECT UserSite.userID AS userID, UserSite.username AS username, 
                                            Project.projectID AS projectID, Project.name AS projectName
                                    FROM ProjectUsers, UserSite, Project, ProjectCoordinator
                                    WHERE ProjectCoordinator.userID = ?
									AND Project.projectID = ProjectCoordinator.projectID
									AND ProjectUsers.projectID = Project.projectID
									AND ProjectUsers.userStatusProject = 'requested'
									AND UserSite.userID = ProjectUsers.userID");
            $stmt->execute(array($userID));
            $result = $stmt->fetchAll();
        } catch(Exception $e) {
            return $e->getMessage();
        }
        return $result;
    }

    function requestParticipation($userID, $projectID) {
        $invitedate = date("Y-m-d");
		try{
			global $conn;

			$invitedate = date("Y-m-d");
			$userStatusProject = 'requested';
			$stmt = $conn->prepare("INSERT INTO ProjectUsers(userID, projectID, inviteDate, userStatusProject) 
									VALUES(:userID, :projectID, :inviteDate, :userStatusProject)");
			$stmt->bindParam(':userID', $userID);
			$stmt->bindParam(':projectID', $projectID);
			$stmt->bindParam(':inviteDate', $invitedate);
			$stmt->bindParam(':userStatusProject', $userStatusProject);
			$stmt->execute();
		} catch(Exception $e) {
			return $e->getMessage() . " - " . $invitedate;
		}
    }
	
	function removeInvitedStatus($userID, $projID){
		try {
            global $conn;
            $stmt = $conn->prepare("DELETE FROM ProjectUsers WHERE projectID = ? AND userID = ?");
            $stmt->execute(array($projID, $userID));
        } catch(Exception $e) {
            echo $e->getMessage();
            return $e->getMessage();
        }
	}
	
	function acceptInvite($userID, $projID){
		try {
            global $conn;
            $stmt = $conn->prepare("UPDATE ProjectUsers 
									SET userStatusProject = 'active' 
									WHERE projectID = ? AND userID = ?");
            $stmt->execute(array($projID, $userID));
        } catch(Exception $e) {
            echo $e->getMessage();
            return $e->getMessage();
        }
	}
?>