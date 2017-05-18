<?
include_once('../../config/init.php');
  include_once($BASE_DIR .'database/Admin/ban.php');
 include_once($BASE_DIR .'database/Users/report.php');  
  
  $userID = $_GET['userID'];
  
  banUser($userID);
  
  header("Location: $BASE_URL" . "pages/admin/profileAdminOverview.php");
?>