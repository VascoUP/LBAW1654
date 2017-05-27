<?php
	include_once($BASE_DIR .'database/Admin/getInformationSite.php');
	include_once($BASE_DIR .'database/Users/userInformation.php');
    
    $user = $_SESSION['username'];
    $userInfo = getUserInformation($user);
    $userType = $userInfo[0]['type'];

    if( !($user && $userType == 'administrator') ) {
        header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
        die();
    }

    $reuslt = isUserAdmin($user);
    if( $reuslt === false ) {
        header('Location: https://gnomo.fe.up.pt'. $BASE_URL .'pages/general/mainPage.php');
        die();
    } else if( $reuslt !== true) echo "error";
?>