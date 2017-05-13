<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/Admin/getInformationSite.php');  

$name = $_POST['search'];

$users = searchUsers($name);
$projects = searchProjects($name);


?>