<?
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/Iterations/iterations.php');
	include_once($BASE_DIR .'database/Users/userInformation.php');
	
	$itID = $_GET['itID'];
	$projID = $_GET['projID'];
	$userID = getUserID($_SESSION['username']);
	
	givePermission($userID, $itID);
	
    header('Location: ' .$BASE_URL.'pages/project/iteration/iterationPage.php?projID=' . $projID . '&itID='.$itID);
?>