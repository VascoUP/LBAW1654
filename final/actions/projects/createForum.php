<?php	
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/Threads/threads.php'); 
    include_once($BASE_DIR .'database/Users/userInformation.php'); 	

	$id = $_GET['projID'];
	$projID = $_GET['projID'];
	
	if (!$_POST['categoryName']){
		$_SESSION['error_messages'][] = 'All fields are mandatory';
		$_SESSION['form_values'] = $_POST;
		header("Location: $BASE_URL" . 'pages/project/thread/createForum.php?projID='.$id);
		exit;
	}
	
	$name = strip_tags($_POST['categoryName']);
	$date = date('Y-m-d');
	$userID = getUserID($_SESSION['username']);
	addForum($id, $userID, $name, $date);
	
	$forumID = getThreads($id)['0']['threadid'];

  	$_SESSION['success_messages'][] = 'Thread created successfully';  
 	header('Location: ' .$BASE_URL.'pages/project/forum/forum.php?projID=' . $projID . '&forumID='.$forumID);
?>