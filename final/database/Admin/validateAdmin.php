<?php
	include_once($BASE_DIR .'database/Admin/getInformationSite.php');

    $user = $_SESSION['username'];
    $reuslt = isUserAdmin($user);
    if( $reuslt === true ) {

    } else if( $reuslt === false ) {

    } else echo "error";
?>