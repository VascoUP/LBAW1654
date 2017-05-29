<?php
    session_set_cookie_params(3600, '/~lbaw1654');
    session_start();

    error_reporting(E_ERROR | E_WARNING); // E_NOTICE by default

    $BASE_DIR = '/opt/lbaw/lbaw1654/public_html/final/';
    $BASE_URL = '/~lbaw1654/final/';

    $conn = new PDO('pgsql:host=dbm;dbname=lbaw1654', 'lbaw1654', 'bq13if52');
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conn->exec('SET SCHEMA \'final\''); 

    include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');
    
    $smarty = new Smarty;
    $smarty->template_dir = $BASE_DIR . 'templates/';
    $smarty->compile_dir = $BASE_DIR . 'templates_c/';
    $smarty->assign('BASE_URL', $BASE_URL);
    $smarty->assign('BASE_DIR', $BASE_DIR);
    
    $smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);  
    $smarty->assign('FIELD_ERRORS', $_SESSION['field_errors']);
    $smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
    $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
    $smarty->assign('USERNAME', $_SESSION['username']);
    
    unset($_SESSION['success_messages']);
    unset($_SESSION['error_messages']);  
    unset($_SESSION['field_errors']);
    unset($_SESSION['form_values']);

    include_once($BASE_DIR .'database/Users/users.php');
    if( $_SESSION['username'] && !usernameExists($_SESSION['username'])) {
        session_destroy();
        unset($_COOKIE['remember_username']);
        setcookie('remember_username', '', time() - 3600, '/');
        header('Location: https://gnomo.fe.up.pt' .$BASE_URL .'pages/general/mainPage.php');
        die();
    }

?>
