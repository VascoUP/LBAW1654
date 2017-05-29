<?php	
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/Projects/projects.php');  

    if (!$_POST['projName'] || !$_POST['overview'] || !$_POST['access']) {
        $_SESSION['error_messages'][] = 'All fields are mandatory';
        $_SESSION['form_values'] = $_POST;
        header("Location: $BASE_URL" . 'pages/project/projectCreate.php');
        die();
    }

    $name = strip_tags($_POST['projName']);
    $overview = strip_tags($_POST['overview']);
    $access = strip_tags($_POST['access']);
    $tags = explode(';', $_POST['tags']);

    $id = createProject($name, $overview, $access, $tags);
    if(!$id || !ctype_digit($id)){
        $_SESSION['field_errors'][projCreate] = 'Invalid parameters. Make sure only Letters, numbers, \'.\' and \'-\' are used';
        header("Location: $BASE_URL" . 'pages/project/projectCreate.php');
    }
    else{
        $_SESSION['success_messages'][] = 'Project created successfully';
        header('Location: ' .$BASE_URL.'pages/project/projectPage.php?projID='.$id);
    }
?>