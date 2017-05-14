<?
	include_once('../config/init.php');
	include_once($BASE_DIR .'database/invites.php'); 

	$data = json_decode(file_get_contents('php://input'), true);
	
	$userID = $data['userid'];
	$projID = $data['projid'];
	
	if($data['accepted'] == true) {
		$result = acceptInvite($userID, $projID);
		echo "Accepted\n";
	}
	else {
		$result = removeInvitedStatus($userID, $projID);
		echo "Refused\n";
	}
	
	echo $data['accepted'];
?>