<?
    function invitedProjects($userID){
        try {
            global $conn;
            $stmt = $conn->prepare("SELECT Project.projectID, Project.name
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
?>