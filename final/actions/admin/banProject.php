<?
include_once('../../config/init.php');
  include_once($BASE_DIR .'database/Admin/ban.php');
 include_once($BASE_DIR .'database/Users/userInformation.php');  
  
  $projID = $_GET['projID'];
  
  banProject($projID);
  
?>
