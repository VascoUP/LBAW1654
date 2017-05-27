<?
	include_once('../config/init.php');
	include_once($BASE_DIR .'database/Admin/ban.php'); 
	
	$data = json_decode(file_get_contents('php://input'), true);
	echo $data['username'];
	if($data['username'])
		removeBanStatusUser($data['username']);
	else($data['proj'])
		removeBanStatusProj($data['proj']);
	
	echo json_encode("result" => true);
?>