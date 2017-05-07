<?
    function invitedProjects($userID){
        try {
            global $conn;
            $stmt = $conn->prepare("SELECT *
                                    FROM ProjectUsers
                                    WHERE userid = ?;");
            $stmt->execute(array($userID));
            $result = $stmt->fetchAll();
        } catch(Exception $e) {
            return $e->getMessage();
        }

        return $result;		
    }
?>