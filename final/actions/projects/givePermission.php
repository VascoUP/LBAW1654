<?
	include_once('../../config/init.php');
	include($BASE_DIR .'database/Iterations/iterations.php');
	include($BASE_DIR .'database/Users/userInformation.php');
	
	$itID = $_GET['itID'];
	$userID = getUserID($_SESSION['username']);
	
	givePermission($userID, $itID);
	
    header('Location: ' .$BASE_URL.'pages/project/iteration/iterationPage.php?itID='.$itID);
?>