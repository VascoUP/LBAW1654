<?
    function invitedProjects($userID){
        try {
            global $conn;
            $stmt = $conn->prepare("SELECT Project.projectID, ProjectUsers.userID, Project.name
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
	
	function removeInvitedStatus($userID, $projID){
		try {
            global $conn;
            $stmt = $conn->prepare("DELETE FROM ProjectUsers WHERE projectID = ? AND userID = ?");
            $stmt->execute(array($projID, $userID));
            $result = $stmt->fetchAll();
        } catch(Exception $e) {
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
            return $e->getMessage();
        }
	}
?>