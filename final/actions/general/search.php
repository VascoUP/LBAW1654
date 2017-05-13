<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/Admin/getInformationSite.php');  

$name = $_POST['search'];

$users = searchUsers($name);
$projects = searchProjects($name);

$_SESSION['success_messages'][] = 'Search done successfully';  
header('Location: ' .$BASE_URL.'pages/general/searchResults.php?users='.$users.'&proj='.$projects);

?>