<?php
    include_once('../../../config/init.php');
    
    if( !$_SESSION['username'] ) {
        header('Location: https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php');
        die();
    }
    
    include_once($BASE_DIR .'database/Users/userInformation.php');
    include_once($BASE_DIR .'database/invites.php');
    include_once($BASE_DIR .'database/Threads/threads.php');
    include_once($BASE_DIR .'database/Projects/validateUser.php');
    include_once($BASE_DIR .'database/prepareNotifications.php');
    include_once($BASE_DIR .'database/projectInfo.php');
    
    $threads = getThreads($projID);
    $numberComments = array();
    $usernames = array();
    $lastCommentUser = array();
    $lastCommentDate = array();

    foreach($threads as $thread) {
        $numberComments[] = numberOfComments($thread['threadid']);
        $user = getUserInformationByID($thread['userid']);
        $usernames[] = $user['0']['username'];
        $lastComment = lastComment($thread['threadid']);
        $lastCommentInfo = getUserInformationByID($lastComment['0']['userid']);
        if(count($lastCommentInfo) != 0) {
            $lastCommentUser[] = $lastCommentInfo['0']['username'];
            $lastCommentDate[] = $lastComment['0']['date'];
        }
    }

    $smarty->assign('smartyUsrInfo', $userInfo);
    $smarty->assign('smartyProjID', $projID);
    $smarty->assign('smartyThreads', $threads);
    $smarty->assign('numberComments', $numberComments);
    $smarty->assign('usernames', $usernames);
    $smarty->assign('lastCommentUser', $lastCommentUser);
    $smarty->assign('lastCommentDate', $lastCommentDate);
	
	$smarty->assign('varSideBar', 4);
	$smarty->assign('collaborator', $isCollaborator);
	$smarty->assign('userIsCoord', $userIsCoord);
	
	$smarty->assign('type', $userType);
    $smarty->assign('PAGE_TEMPLATE', $BASE_DIR .'templates/projects/projectForum.tpl');
    $smarty->assign('SIDEBAR_TEMPLATE', $BASE_DIR .'templates/projects/projectSideBar.tpl');
  
    $smarty->display($BASE_DIR .'templates/common/header.tpl'); 
  	$smarty->display($BASE_DIR .'templates/page.tpl');
    $smarty->display($BASE_DIR .'templates/common/footer.tpl');
?>