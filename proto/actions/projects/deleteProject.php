<?php
include_once('../../config/init.php');

$id = $_GET['projID'];

deleteProject($id);
header('Location: ' .$BASE_URL.'pages/profile/userProjects.php');

?>
