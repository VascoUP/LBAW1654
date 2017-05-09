<?php	
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/Threads/threads.php');

	$id = $_GET['forumID'];
	
	if($_POST['ThreadName'])
		editThread($id, $_POST['ThreadName']);
	
	$projID = getProject($id);
 
  $_SESSION['success_messages'][] = 'Thread updated successfully';  
  header('Location: ' .$BASE_URL.'pages/project/forum/projectForum.php?projID='.$projID);
 ?>