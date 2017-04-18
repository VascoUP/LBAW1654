  <link href="../../css/pages/forms.css" rel="stylesheet">
  <link href="../../css/pages/editProject.css" rel="stylesheet">

  <div class="container">
    <div class="row">
      <div class="container">
        <div class="project-info-box">
          <p class="text-style-2">Edit project</p>
          <legend></legend>

          <div class="project-edit-box">
            <div class="project-edit-box-header">
              <p class="text-style-5">Rename project</p>
            </div>
            <div class="text-edit-box-body">
              <p class="text-style-6">Change the name of the project to a new one</p>
              <div class="col-md-6 col-sm-6 input-group">
                <input type="text" class="form-control" placeholder="ex: PIU">
                <span class="input-group-addon btn btn-primary">Submit</span>
              </div>
            </div>
          </div>

          <legend></legend>

          <div class="project-edit-box">
            <div class="project-edit-box-header">
              <p class="text-style-5">Edit overview</p>
            </div>
            <div class="text-edit-box-body">
              <p class="text-style-6">Redo the overview project for either a quick fix or an overall update</p>
              <div class="col-md-7 col-sm-7 input-group">
                <textarea rows="4" cols="50" class="form-control" placeholder="ex: PIU"></textarea>
                <span class="input-group-addon btn btn-primary">Submit</span>
              </div>
            </div>
          </div>

          <legend></legend>

          <div class="project-edit-box">
            <div class="project-edit-box-header">
              <p class="text-style-5">Main settings</p>
            </div>
            <div class="buttons-edit-box-body">
              <p class="text-style-6 col-xs-6">Make project public</p>
              <button class="btn btn-secondary style-button col-xs-offset-2" type="button">Go Public</button>
            </div>
            <div class="buttons-edit-box-body">
              <p class="text-style-6 col-xs-6">Delete project</p>
              <button class="btn btn-secondary style-button col-xs-offset-2" type="button">Delete</button>
            </div>
          </div>

          <div class="project-edit-box">
            <div class="project-edit-box-header">
              <p class="text-style-5">Invite Users</p>
            </div>
            <div class="text-edit-box-body">
              <p class="text-style-6">Invite a user to join project</p>
              <div class="col-md-6 col-sm-6 input-group">
                <input type="text" class="form-control" placeholder="ex: aed1123">
                <span class="input-group-addon btn btn-primary">Invite</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>