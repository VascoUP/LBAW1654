<?php
  include_once('../../../config/init.php');
 
  $smarty->display($BASE_DIR .'templates/common/header.tpl');
  $smarty->display($BASE_DIR .'templates/projects/projectCreate.tpl');
  $smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>