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
		$stmt = $conn->prepare("SELECT UserSite.username AS username, UserSite.email AS email, 
									UserSite.description AS description, ts_rank_cd(textsearch, query) AS rank
								FROM UserSite, to_tsvector(username || ' ' || email) textsearch, to_tsquery('english', ?) query
								WHERE UserSite.type != 'administrator'
								AND textsearch @@ query
								OR username ILIKE '%?%'
								OR email ILIKE '%?%'
								ORDER BY rank DESC LIMIT 10");	
		
		$stmt->execute(array($name, $name, $name));
	} catch(Exception $e) {
		return $e->getMessage();
	}
}

function searchProjects($name){
	try {
		global $conn;
		$stmt = $conn->prepare("SELECT Project.name AS name, Project.description AS description
								FROM Project, Tag, TagProject 
								WHERE to_tsvector('english', Project.name) @@ to_tsquery('english', ?)
								OR Project.name ILIKE '%?%'
								OR (to_tsvector('english', Tag.name) @@ to_tsquery('english', ?)
								OR Tag.name ILIKE '%?%'
								AND TagProject.tagID = Tag.tagID
								AND Project.projectID = TagProject.projectID)
								AND Project.access = 'public'");
		$stmt->execute(array($name, $name, $name, $name));
	} catch(Exception $e) {
		return $e->getMessage();
	}
}

?>