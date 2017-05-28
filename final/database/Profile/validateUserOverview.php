<?php
	include_once($BASE_DIR .'database/Users/userInformation.php');
    
	if( !$_SESSION['username'] ) {
		header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
		die();
	}
    
	if(!isset($_GET['searchUser'])) {
		$userID = getUserInformation($_SESSION['username'])['0']['userid'];
	} else $userID = $_GET['searchUser'];

	$first = $_GET['user'];
	$userInfoFirst = getUserInformationByID($first);
	$userInfo = getUserInformationByID($userID);

    $userType = $userInfo[0]['type'];
    if( $userType == 'administrator' ) {
		header('Location: https://gnomo.fe.up.pt' . $BASE_URL . 'pages/admin/profileAdminOverview.php');
		die();
	}
?>