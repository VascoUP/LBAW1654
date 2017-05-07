<?php
  include_once('../../../config/init.php');
  include($BASE_DIR .'database/Projects/projectInformation.php');
  
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