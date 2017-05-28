<?
	include_once('../config/init.php');
	include_once($BASE_DIR .'database/Admin/report.php'); 
	
	$data = json_decode(file_get_contents('php://input'), true);
	handlerReport($data['id']);
	
	echo json_encode($data);
?>