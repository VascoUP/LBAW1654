<?php
	function isUserAdmin($user) {
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT username FROM UserSite WHERE username = ? AND type = 'administrator'");

			$stmt->execute(array($user));
			$result = $stmt->fetchAll();
			if(count($result) <= 0)
				return false;
			return true;
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}

	function getSiteUsers($status){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT * FROM UserSite WHERE userStatus = ? AND type != 'administrator");	
			
			$stmt->execute(array($status));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
		return $result;
	}

	function getSiteProjects($status){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT * FROM Project WHERE projectStatus = ?");	
			
			$stmt->execute(array($status));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
		
		return $result;
	}

	function getSiteProjectsAll(){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT * FROM Project");	
			
			$stmt->execute();
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
		
		return $result;
	}

	function getSiteUsersAll(){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT * FROM UserSite");	
			
			$stmt->execute();
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			return $e->getMessage();
		}
		
		return $result;
	}

	function searchUsers($name){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT DISTINCT UserSite.username AS username, UserSite.email AS email, UserSite.userID AS userID, UserSite.description AS description, UserSite.userStatus AS userStatus, UserSite.type AS type, ts_rank_cd(textsearch, query) AS rank
									FROM UserSite, to_tsvector(username || ' ' || email || ' ' || description) textsearch, to_tsquery('english', ?) query
									WHERE UserSite.type != 'administrator'
									AND (textsearch @@ query
									OR username ILIKE '%' || ? || '%'
									OR email ILIKE '%' || ? || '%')
									ORDER BY rank DESC LIMIT 10");	
			
			$stmt->execute(array($name, $name, $name));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			echo $e->getMessage();
		}
		
		return $result;
	}

	function searchProjects($name){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT DISTINCT Project.name AS name, Project.description AS description, Project.projectID AS projectID, Project.projectStatus AS projectStatus
									FROM Project, Tag, TagProject
									WHERE Project.access = '1'
									AND (to_tsvector('english', Project.name) @@ to_tsquery('english', ?)
									OR Project.name ILIKE '%' || ? || '%'
									AND Project.access = '1'
									OR (to_tsvector('english', Tag.name) @@ to_tsquery('english', ?)
									OR Tag.name ILIKE '%' || ? || '%'
									AND TagProject.tagID = Tag.tagID
									AND Project.projectID = TagProject.projectID))");
			$stmt->execute(array($name, $name, $name, $name));
			
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			echo $e->getMessage();
		}
		
		return $result;
	}

	function searchAdminProjects($name){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT DISTINCT Project.name AS name, Project.description AS description, Project.projectID AS projectID, Project.projectStatus AS projectStatus
									FROM Project, Tag, TagProject
									WHERE to_tsvector('english', Project.name) @@ to_tsquery('english', ?)
									OR Project.name ILIKE '%' || ? || '%'
									OR (to_tsvector('english', Tag.name) @@ to_tsquery('english', ?)
									OR Tag.name ILIKE '%' || ? || '%'
									AND TagProject.tagID = Tag.tagID
									AND Project.projectID = TagProject.projectID)");
			$stmt->execute(array($name, $name, $name, $name));
			
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			echo $e->getMessage();
		}
		
		return $result;
	}

	function searchUserASC($name){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT DISTINCT UserSite.username AS username, UserSite.email AS email, UserSite.userID AS userID, UserSite.description AS description, UserSite.userStatus AS userStatus, UserSite.type AS type, ts_rank_cd(textsearch, query) AS rank
									FROM UserSite, to_tsvector(username || ' ' || email || ' ' || description) textsearch, to_tsquery('english', ?) query
									WHERE UserSite.type != 'administrator'
									AND (textsearch @@ query
									OR username ILIKE '%' || ? || '%'
									OR email ILIKE '%' || ? || '%')
									ORDER BY UserSite.username
									LIMIT 10");	
			
			$stmt->execute(array($name, $name, $name));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			echo $e->getMessage();
		}
		
		return $result;
	}

	function searchUserDESC($name){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT DISTINCT UserSite.username AS username, UserSite.email AS email, UserSite.userID AS userID, UserSite.description AS description, UserSite.userStatus AS userStatus, UserSite.type AS type, ts_rank_cd(textsearch, query) AS rank
									FROM UserSite, to_tsvector(username || ' ' || email || ' ' || description) textsearch, to_tsquery('english', ?) query
									WHERE UserSite.type != 'administrator'
									AND (textsearch @@ query
									OR username ILIKE '%' || ? || '%'
									OR email ILIKE '%' || ? || '%')
									ORDER BY UserSite.username DESC
									LIMIT 10");	
			
			$stmt->execute(array($name, $name, $name));
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			echo $e->getMessage();
		}
		
		return $result;
	}

	function searchProjASC($name){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT DISTINCT Project.name AS name, Project.description AS description, Project.projectID AS projectID, Project.projectStatus AS projectStatus
									FROM Project, Tag, TagProject
									WHERE Project.access = '1'
									AND (to_tsvector('english', Project.name) @@ to_tsquery('english', ?)
									OR Project.name ILIKE '%' || ? || '%'
									AND Project.access = '1'
									OR (to_tsvector('english', Tag.name) @@ to_tsquery('english', ?)
									OR Tag.name ILIKE '%' || ? || '%'
									AND TagProject.tagID = Tag.tagID
									AND Project.projectID = TagProject.projectID))
									ORDER BY Project.name
									LIMIT 10");
			$stmt->execute(array($name, $name, $name, $name));
			
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			echo $e->getMessage();
		}
		
		return $result;
	}

	function searchProjDESC($name){
		try {
			global $conn;
			$stmt = $conn->prepare("SELECT DISTINCT Project.name AS name, Project.description AS description, Project.projectID AS projectID, Project.projectStatus AS projectStatus
									FROM Project, Tag, TagProject
									WHERE Project.access = '1'
									AND (to_tsvector('english', Project.name) @@ to_tsquery('english', ?)
									OR Project.name ILIKE '%' || ? || '%'
									AND Project.access = '1'
									OR (to_tsvector('english', Tag.name) @@ to_tsquery('english', ?)
									OR Tag.name ILIKE '%' || ? || '%'
									AND TagProject.tagID = Tag.tagID
									AND Project.projectID = TagProject.projectID))
									ORDER BY Project.name DESC
									LIMIT 10");
			$stmt->execute(array($name, $name, $name, $name));
			
			$result = $stmt->fetchAll();
		} catch(Exception $e) {
			echo $e->getMessage();
		}
		
		return $result;
	}
?>