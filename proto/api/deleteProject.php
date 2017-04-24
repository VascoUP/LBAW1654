<?php
include_once('../config/init.php');
include($BASE_DIR .'database/Projects/editProject.php');

$id = $_GET['projID'];

try{
    deleteProject($id);
    echo json_encode(array("result"=>"deleted"));
}
catch(PDOException $e){
    echo json_encode(array("result"=>"error"));
}
?>