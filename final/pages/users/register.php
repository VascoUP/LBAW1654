<?php 
	include_once('../../config/init.php');
	
	$smarty->display($BASE_DIR .'templates/common/headerLoginRegister.tpl');
	$smarty->display($BASE_DIR .'templates/users/register.tpl');
	$smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>
