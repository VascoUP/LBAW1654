<?

function getUsers(){
	try {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM UserSite WHERE UserSite.type != 'administrator'");	
		
		$stmt->execute();
	} catch(Exception $e) {
		return $e->getMessage();
	}
}

function getProjects(){
	try {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM Project");	
		
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
		$stmt = $conn->prepare("SELECT * FROM Project WHERE name LIKE '%?%'");	
		
		$stmt->execute(array($name, $name));
	} catch(Exception $e) {
		return $e->getMessage();
	}
}

?>