<?
  function updateProjName($name, $id){
	echo "<script>console.log( '2' );</script>";
	global $conn;
	$stmt = $conn->prepare("UPDATE Project
							SET name = ?
							WHERE projectID = ?");
							
    $stmt->execute(array($name, $id));
	echo "<script>console.log( '3' );</script>";
  }
  
  function updateOverview($overview, $id){
	global $conn;
	$stmt = $conn->prepare("UPDATE Project
							SET description = ?
							WHERE projectID = ?");
							
    $stmt->execute(array($overview, $id));
  }
  
  function updateOverview($id){
	global $conn;
	$stmt = $conn->prepare("SELECT access
							FROM Project
							WHERE projectID = ?");
							
    $stmt->execute(array($id));
	$result = $stmt->fetchAll();
	$access = $result['0']['access'];
	
	if($access == 'true')
		$newAccess = 'false';
	else
		$newAccess = 'true';
	
	$stmt = $conn->prepare("UPDATE Project
							SET access = ?
							WHERE projectID = ?");
							
    $stmt->execute(array($newAccess, $id));
  }
  
  function deleteProject($id){
	global $conn;
	$stmt = $conn->prepare("DELETE
							FROM Project
							WHERE projectID = ?");
							
    $stmt->execute(array($id));
  }
?>