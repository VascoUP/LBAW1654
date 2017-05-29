<?
	include_once('../config/init.php');
	include_once($BASE_DIR .'database/Admin/getInformationSite.php'); 

	$data = json_decode(file_get_contents('php://input'), true);
	
    $key = $data['search'];
	$value = $data['value'];
	
	if($value === 'ASC'){
		$array = searchUserASC($key);
		$arrayProj = searchProjASC($key);
	}
	else{
		$array = searchUserDESC($key);
		$arrayProj = searchProjDESC($key);
	}
	
    echo json_encode(array("users" => $array, "projects" => $arrayProj));
?>