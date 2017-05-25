<?php
    include_once($BASE_DIR .'database/Projects/projectInformation.php');
	include_once($BASE_DIR .'database/Users/userInformation.php');

    if( !isset($_GET['projID']) ) {
        header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
        die();
    }

    $userInfo = getUserInformation($_SESSION['username']);
    $projID = $_GET['projID'];

    $projectInformation = getProjectInformation($projID);
    $userProjects = getProjects($userInfo[0]['userid']);
    $isCollaborator = false;
    foreach( $userProjects as $project ) {
        if( $project['projectid'] == $projID ) {
            $isCollaborator = true;
            break;
        }
    }

	$userType = $userInfo[0]['type'];
    $userIsCoord = isCoordinatorInProject($projID,$userInfo[0]['userid']);

    if( $isCollaborator === false ) {
        if( $projectInformation['0']['access'] == 0 ) {
            if (!$userIsCoord && $userType != 'administrator') {
                header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
                die();
            }
        }

        if(!$userIsCoord){
            $smarty->assign('leaveBtnVisibility', 'not_visible');
        }
        if( $isCollaborator === false ) {
            $smarty->assign('joinProjectButton', true);
            if( getRequestInvite($userInfo[0]['userid'], $projID) === true )
                $smarty->assign('joinProjectButtonActive', false);
            else
                $smarty->assign('joinProjectButtonActive', true);
        } else
            $smarty->assign('joinProjectButton', false);
    } else {
        $smarty->assign('joinBtnVisibility', 'not_visible');
                $smarty->assign('joinBtnbility', 'not_visible');
    }



?>
