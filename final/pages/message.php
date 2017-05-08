<?php
  include_once('../config/init.php');
 
  $smarty->display($BASE_DIR .'templates/common/header.tpl');
?>
    <p><?php echo $_GET["result"]; ?></p>
<?php
  $smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>