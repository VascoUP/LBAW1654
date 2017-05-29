<?php
	include_once('../config/init.php');
	include_once($BASE_DIR .'database/invites.php'); 

	$data = json_decode(file_get_contents('php://input'), true);
	
	$userID = getUserID($_SESSION['username']);
	$projID = $data['projid'];
	
    $result = requestParticipation($userID, $projID);
	
	echo json_encode("$userID $projID");
?>