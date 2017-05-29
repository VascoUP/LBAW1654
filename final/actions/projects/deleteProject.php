<?php
include_once('../../config/init.php');
include_once("{$BASE_DIR}database/Projects/editProject.php");

$id = $_GET['projID'];

deleteProject($id);
$userID = $_GET['userID'];
header('Location: ' .$BASE_URL.'pages/profile/userProjects.php?userInfo='.$userID);

?>