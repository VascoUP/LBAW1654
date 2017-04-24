<?php
include_once('../config/init.php');
include($BASE_DIR .'database/Projects/editProject.php')

$id = $_GET['projID'];

try{
    deleteProject($id);
    echo json_encode(array("result"=>"deleted"));
	header('Location: ' .$BASE_URL.'pages/project/projectPage.php?projID='.$id);
}
catch(PDOException $e){
    echo json_encode(array("result"=>"error"));
	header('Location: ' .$BASE_URL.'pages/project/general/projectEdit.php?projID='.$id);
}
?>