<?
	include_once('../config/init.php');
	include_once($BASE_DIR .'database/Admin/ban.php'); 
	
	$data = json_decode(file_get_contents('php://input'), true);
	handlerReport($data['content']);
	
	echo json_encode("result" => true);
?>