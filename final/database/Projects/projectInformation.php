<?php
  include_once($BASE_DIR .'database/Users/userInformation.php');
  
  function getProjectInformation($ID) {
    try {
      global $conn;
      $stmt = $conn->prepare(
                "SELECT Project.name AS name, 
                        Project.description AS description, 
						            Project.access AS access,
                        COUNT(distinct ProjectCoordinator.projectID) AS countCoord,
                        COUNT(distinct ProjectUsers.projectID) AS countUsers
                FROM Project
                INNER JOIN ProjectCoordinator ON (ProjectCoordinator.projectID = Project.projectID)
                LEFT JOIN (
                    SELECT * 
                    FROM ProjectUsers
                    WHERE ProjectUsers.projectID = ?
                    AND ProjectUsers.userStatusProject = 'active') 
                  ProjectUsers 
                  ON ProjectUsers.projectID = Project.projectID
                WHERE Project.projectID = ?
                GROUP BY Project.projectID");
      $stmt->execute(array($ID, $ID));
      $result = $stmt->fetchAll();
    } catch(Exception $e) {
      return $e->getMessage();
    }

    return $result;
  }
  
  function getCoordinator($ID){
    try {
      global $conn;
      $stmt = $conn->prepare("SELECT username
                                FROM UserSite, ProjectCoordinator
                                WHERE ProjectCoordinator.projectID = ?
								AND UserSite.userID = ProjectCoordinator.userID
								ORDER BY ProjectCoordinator.projectID
								LIMIT 1");		
      $stmt->execute(array($ID));
      $resultCoord = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}

    return $resultCoord['0']['username'];
  }
  
  function getProjectTags($id){
	  try {
      global $conn;
      $stmt = $conn->prepare("SELECT Tag.name AS name
                              FROM Tag, TagProject
                              WHERE TagProject.projectID = ?
							  AND Tag.tagID = TagProject.tagID");		
      $stmt->execute(array($id));
      $result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}

    return $result; 
  }
?>