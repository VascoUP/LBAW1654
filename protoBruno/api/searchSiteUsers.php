<?php
	include_once('../config/init.php');
	include_once($BASE_DIR .'database/Admin/getInformationSite.php'); 
	
	$data = json_decode(file_get_contents('php://input'), true);
	
    $key = $data['text'];
	
    $array = searchUsers($key);
    echo json_encode($array);
?>