<?

function getUsers(){
	try {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM UserSite WHERE UserSite.type != 'administrator' LIMIT 10");	
		
		$stmt->execute();
	} catch(Exception $e) {
		return $e->getMessage();
	}
}

function getProjects(){
	try {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM Project LIMIT 10");	
		
		$stmt->execute();
	} catch(Exception $e) {
		return $e->getMessage();
	}
}

function searchUsers($name){
	try {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM UserSite WHERE UserSite.type != 'administrator' AND (UserSite.username LIKE '%?%' OR UserSite.email LIKE '%?%')");	
		
		$stmt->execute(array($name, $name));
	} catch(Exception $e) {
		return $e->getMessage();
	}
}

function searchProjects($name){
	try {
		global $conn;
		$stmt = $conn->prepare("SELECT Project.name AS name, Project.description AS description
								FROM Project, Tag, TagProject
								WHERE Project.name LIKE '%?%' 
								OR (Tag.name '%?%'
								AND TagProject.tagID = Tag.tagID
								AND Project.projectID = TagProject.projectID)");	
		
		$stmt->execute(array($name, $name));
	} catch(Exception $e) {
		return $e->getMessage();
	}
}

?>