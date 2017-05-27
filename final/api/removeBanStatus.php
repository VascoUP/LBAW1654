<?
	include_once('../config/init.php');
	include_once($BASE_DIR .'database/Admin/ban.php'); 
	
	$data = json_decode(file_get_contents('php://input'), true);
	if($data['userID'])
		removeBanStatusUser($data['userID']);
	else if($data['proj'])
		removeBanStatusProj($data['proj']);
	
	echo json_encode($data);
?>