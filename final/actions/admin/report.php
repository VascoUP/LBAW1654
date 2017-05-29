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
  else if(isset($taskID) && isset($projID))
	  reportTask($taskID, $projID, $content);
  else if(isset($threadID) && isset($projID))
	  reportThread($threadID, $projID, $content);
  else if(isset($projID))
	  reportProject($projID, $content);
  
 header("Location: $BASE_URL" . "pages/profile/profileUserOverview.php");
?>