<?
    function invitedProjects($userID){
        try {
            global $conn;
            $stmt = $conn->prepare("SELECT *
                                    FROM ProjectUsers
                                    WHERE userStatusProject = 'invited'
                                    AND userID = ?");
            $stmt->execute(array($userID));
            $result = $stmt->fetchAll();
        } catch(Exception $e) {
            return $e->getMessage();
        }

        return $result;		
    }
?>