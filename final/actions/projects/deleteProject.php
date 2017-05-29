<?php
    include_once('../../config/init.php');
    include_once("{$BASE_DIR}database/Projects/editProject.php");

    $id = $_GET['projID'];
    $result = deleteProject($id);
    if( $result ) {
        $_SESSION['field_errors'][delete] = 'Unable to delete the project';
        header("Location: https://gnomo.fe.up.pt" . $BASE_URL ."pages/project/projectEdit.php?projID=" .$id);
        die();
    }
    $userID = $_GET['userID'];
    header('Location: ' .$BASE_URL.'pages/profile/userProjects.php?userInfo='.$userID);
?>