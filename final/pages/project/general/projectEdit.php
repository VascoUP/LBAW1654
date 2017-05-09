<?php
  include_once('../../../config/init.php');
  include_once($BASE_DIR .'database/Projects/projectInformation.php');
	include_once($BASE_DIR .'database/Users/userInformation.php');
	include_once($BASE_DIR .'database/invites.php');
	
	$userInfo = getUserInformation($_SESSION['username']);
	$smarty->assign('smartyUsrInfo', $userInfo);

	$projectInvites = invitedProjects($userInfo[0][userid]);
	$smarty->assign('smartyProjInvites', $projectInvites);
  
  $projID = $_GET['projID'];
  $projTags = getProjectTags($projID);
  $tags = "";
  
  for ($i = 0; $i < count($projTags); $i++) {
	 if($i == count($projTags)-1)
		$tags .= $projTags[$i]['name'];
	 else {
		$aux = $projTags[$i]['name'] . " ; ";
		$tags .= $aux;
	 }
  }
 
  $smarty->assign('smartyProjID', $projID);
  $smarty->assign('smartyProjTags', $tags);

  $smarty->display($BASE_DIR .'templates/common/header.tpl'); 
  $smarty->display($BASE_DIR .'templates/projects/projectEdit.tpl');
  
  $smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>