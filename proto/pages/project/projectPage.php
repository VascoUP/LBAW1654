<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/projectInformation.php'); 
	
$smarty->display($BASE_DIR .'templates/common/header.tpl'); 

$projID = $_GET['projID'];
	
$projInfo = getProjectInformation($projID);
?>

  <link href='../../css/pages/project.css' rel='stylesheet'>
  <link href='../../css/templates/navtable.css' rel='stylesheet'>
  <link href='../../css/bootstrap/bootstrap-social.css' rel='stylesheet'>

  <div class='navbar-spacing'></div>
  <div class='page-spacing'></div>

  <!--	PROJECT NAME AND OTHER IMPORTANT INFOS
======================================================= -->
  <div class='container'>
    <div class='row'>
      <div class='container'>
        <p class='text-style-1 col-md-6 col-xs-6'><?echo $projInfo['0']['name']?></p>
        <div class='col-xs-offset-10'>
          <div class='table-responsive info-responsive'>
            <table class='info col-xs-12' cellspacing='0'>
              <tr>
                <th class='text-style-6 info-type col-xs-8'>Users</th>
                <th class='text-style-6 col-xs-4'>1</th>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class='page-spacing'></div>

  <!--	PROJECT PAGE SELECTOR
============================================ -->
  <div class='container'>
    <div class='table-responsive nav-table-scroll'>
      <table id="projectTabs" class='nav-table'>
        <tr class='col-xs-12'>
          <td id='overviewOpt'>
            <a class='text-style-6' href='#overview'>Overview</a>
          </td>
          <td id='tasksOpt'>
            <a class='text-style-6' href='#tasks'>Iterations</a>
          </td>
          <td id='statsOpt'>
            <a class='text-style-6' href='#stats'>Statistics</a>
          </td>
          <td id='forumOpt'>
            <a class='text-style-6' href='#forum'>Forum</a>
          </td>
          <td id='editOpt'>
            <a class='text-style-6' href='#edit'>Edit</a>
          </td>
          <td class='nav-table-fill'></td>
        </tr>
      </table>
    </div>
  </div>

  <div>
<?php
echo '<div id=\'overviewContainer\'>';
include('general/projectOverview.php');
echo '</div>';
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

  <script src='../../javascript/projects/projectPage.js'></script>

<!-- Page Footer -->
<?php
$smarty->display($BASE_DIR .'templates/common/footer.tpl'); 
?>