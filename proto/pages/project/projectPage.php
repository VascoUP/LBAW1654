<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/projectInformation.php'); 

  $projID = $_GET['projID'];
  $smarty->assign('smartyProjID', $projID);
  $smarty->assign('smartyProjInfo', getProjectInformation($projID));
  $smarty->assign('smartyNumUsers', getNumberUsers($projID));
  
  $smarty->display($BASE_DIR .'templates/common/header.tpl'); 
  $smarty->display($BASE_DIR .'templates/projects/projectPage.tpl');
  $smarty->display($BASE_DIR .'templates/projects/projectOverview.tpl');
?>
<?php
echo '<div id=\'tasksContainer\'>';
include_once('iteration/projectIterations.php');
echo '</div>';
echo '<div id=\'statsContainer\'>';
include('general/projectOverview.php');
echo '</div>';
echo '<div id=\'forumContainer\'>';
include_once('forum/projectForum.php');
echo '</div>';
echo '<div id=\'editContainer\'>';
include_once('general/projectEdit.php');
echo '</div>';
?>

<!-- Page Footer -->
<?php
$smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>