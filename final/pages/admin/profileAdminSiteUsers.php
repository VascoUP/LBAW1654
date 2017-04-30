<?php 
	include_once('../../config/init.php');
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl'); 
	$smarty->display($BASE_DIR .'templates/admin/profileAdminSiteUsers.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl');	
?>