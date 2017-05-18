<?
include_once('../../config/init.php');
  include_once($BASE_DIR .'database/Admin/ban.php');
 include_once($BASE_DIR .'database/Users/report.php');  
  
  $user = $_GET['userID'];
  $content = $_POST['content'];
  
  echo $user;
  echo $content;
  
  reportUser($user, $content);
  
 header("Location: $BASE_URL" . "pages/admin/profileAdminOverview.php");
?>