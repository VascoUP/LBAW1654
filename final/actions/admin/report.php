<?
include_once('../../config/init.php');
  include_once($BASE_DIR .'database/Admin/ban.php');
 include_once($BASE_DIR .'database/Users/report.php');  
  
  
  $content = $_POST['content'];
  $user = $_GET['userID'];
  $threadID = $_GET['thread'];
  $taskID = $_GET['taskID'];
  
  if(isset($user))
	  reportUser($user, $content);
  else if(isset($taskID))
	  reportTask($taskID, $content);
  else if(isset($threadID))
	  reportThread($threadID, $content);
  
 header("Location: $BASE_URL" . "pages/profile/profileUserOverview.php");
?>