<?
include_once('../../config/init.php');
  include_once($BASE_DIR .'database/Admin/ban.php');
 include_once($BASE_DIR .'database/Users/report.php');  
  
  
  $content = $_POST['content'];
  $user = $_GET['userID'];
  $threadID = $_GET['threadID'];
  $taskID = $_GET['taskID'];
  $projID = $_GET['projID'];
  
  if(isset($user))
	  reportUser($user, $content);
  else if(isset($taskID))
	  reportTask($taskID, $content);
  else if(isset($threadID))
	  reportThread($threadID, $content);
  else if(isset($projID))
	  reportProject($projID, $content);
  
 header("Location: $BASE_URL" . "pages/profile/profileUserOverview.php");
?>