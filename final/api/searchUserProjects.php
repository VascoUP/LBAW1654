<?php
	include_once('../config/init.php');
	include_once($BASE_DIR .'database/Users/userInformation.php'); 
	
	$data = json_decode(file_get_contents('php://input'), true);
	
    $key = $data['text'];
	$user = $data['userID'];
	
    $array = searchUserProjects($key, $user);
    echo json_encode($array);
?>