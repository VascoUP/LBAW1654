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

    function requestParticipation($userID, $projectID) {
        $invitedate = date("Y-m-d");
		try{
			global $conn;

			$invitedate = date("Y-m-d");
			$userStatusProject = 'requested';
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
		
		return "Success " . $user . " - " . $project;
    }
	
	function removeInvitedStatus($userID, $projID){
        echo "remove invite $userID -  $projID\n";
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
        echo "accept invite $userID -  $projID\n";
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