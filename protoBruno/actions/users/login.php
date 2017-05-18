<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/Users/users.php');
  include_once($BASE_DIR .'database/Users/userInformation.php');  
  
  if (!$_POST['username'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'Invalid login';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $username = $_POST['username'];
  $password = $_POST['password'];
  $userInfo = getUserInformation($username);
		
  if(empty($_SESSION['username'])){
	  if($userInfo['0']['userstatus'] != 'inactive'){
		  if (isLoginCorrect($username, $password)) {
			$_SESSION['username'] = $username;
			$_SESSION['success_messages'][] = 'Login successful'; 
			if($_POST["remember"]) {
				$year = time() + (365 * 24 * 60 * 60); //365 days * 24 hours * 60 minutes * 60 seconds
				
				$tokenName = hash_hmac('sha256', $username . $_SERVER['REMOTE_ADDR'], 'true');
				setcookie('remember_username', $tokenName, $year);
				
				addUserToken($tokenName, $username);
			}
			
			if($userInfo['0']['type'] == 'administrator')
				header('Location: ' .$BASE_URL.'pages/admin/profileAdminOverview.php'); 
			else
				header('Location: ' .$BASE_URL.'pages/profile/profileUserOverview.php'); 
		  } 
		  else {
			$_SESSION['field_errors'][login] = 'Invalid Login';
			header("Location: $BASE_URL" . "pages/users/login.php");
		  }
	  }
	  else
    {  	
      $_SESSION['field_errors'][inactive] = 'Inactive User Account';
		  header("Location: $BASE_URL" . "pages/users/login.php");
    }

  }
  else
	header('Location: ' .$BASE_URL.'pages/profile/profileUserOverview.php'); 
  
?>
