<?
	include_once('../config/init.php');
	include_once($BASE_DIR .'database/invites.php'); 
	
	$userID = $_GET['userID'];
	$projID = $_GET['projID'];
	
	if($_POST['accepted'] == true)
		acceptInvite($userID, $projID);
	else
		removeInvitedStatus($userID, $projID);

?>