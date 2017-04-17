<?php
include_once('../../../config/init.php');
$smarty->assign('style','css/pages/forms.css');

$smarty->display($BASE_DIR .'templates/common/header.tpl');
?>
  <script src="javascript/projects/projectCreate.js"></script>
  <div class="container">
    <div class="card card-container">
      <form class="form-horizontal">
        <fieldset>
          <!-- Form Name -->
          <legend>Create new project</legend>

          <!-- Text input-->
          <div action="actions/projects/projectCreate.php" class="form-group">
            <label class="col-md-4 control-label" for="Name (Full name)">Project name</label>
            <div class="col-md-4">
              <div class="col-md-4">
                <input id="ProjectName" name="projName" type="text" 
                        placeholder="ex: PIU" 
                        class="form-control form-style input-xs">
              </div>
            </div>
          </div>
          
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Overview">
              Description
              <span class="underline">(optional)</span>
            </label>
            <div class="col-md-4">
              <div class="col-md-4">
                <input id="Overview" name="overview" type="text" 
                        placeholder="" 
                        class="form-control form-style input-xs">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label" for="Tags">Tags</label>
            <div class="col-md-4">
              <div class="col-md-4">
                <input id="tags" name="Tags" type="text" 
                        placeholder="Project Tags" 
                        class="form-control form-style input-xs">
              </div>
            </div>
          </div>

          <legend></legend>

          <div class="form-group">
            <label class="col-md-4 control-label" for="Access">Control access</label>
            <div class="col-md-4">
              <div class="col-md-4">
                <select name="access" class="form-control form-style input-xs">
                  <option value="public">Public</option>
                  <option value="private">Private</option>
                </select>
              </div>
            </div>
          </div>

          <legend></legend>

          <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
              <a href="#" id="create" class="btn btn-success">
                <span class="glyphicon glyphicon-thumbs-up"></span> 
                Create
              </a>
              <a href="#" id="clear" class="btn btn-danger" value="">
                <span class="glyphicon glyphicon-remove-sign"></span>
                Clear
              </a>
            </div>
          </div>

        </fieldset>
      </form>
    </div>
  </div>
  </div>
  <!-- FOOTER -->
  <?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>