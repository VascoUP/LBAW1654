<div id='editContainer'>
    <link href='../../css/pages/forms.css' rel='stylesheet'>
    <link href='../../css/pages/project.css' rel='stylesheet'>
    <link href='../../css/pages/editProject.css' rel='stylesheet'>

    <!-- Edit body -->
    <div class='container'>
        <div class='row'>
            <div class='container'>
            <div class='project-info-box'>
            <form action='../../actions/projects/projectEdit.php?projID='{$smartyProjID} method='post'>
                <p class='text-style-2'>Edit project</p>
                <legend></legend>
                <div class='project-edit-box'>
                <div class='project-edit-box-header'>
                    <p class='text-style-5'>Rename project</p>
                </div>
                <div class='text-edit-box-body'>
                    <p class='text-style-6'>Change the name of the project to a new one</p>
                    <div class='col-md-6 col-sm-6 input-group'>
                        <input type='text' name='name' id='name' class='form-control' placeholder='ex: PIU'>
                        <span class='input-group-addon btn btn-primary'>Submit</span>
                    </div>
                </div>
                </div>

                <legend></legend>

                <div class='project-edit-box'>
                <div class='project-edit-box-header'>
                    <p class='text-style-5'>Edit overview</p>
                </div>
                <div class='text-edit-box-body'>
                    <p class='text-style-6'>Redo the overview project for either a quick fix or an overall update</p>
                    <div class='col-md-7 col-sm-7 input-group'>
                    <textarea name='overview' id='overview' rows='4' cols='50' class='form-control' placeholder='ex: PIU'></textarea>
                    <span class='input-group-addon btn btn-primary'>Submit</span>
                    </div>
                </div>
                </div>

                <legend></legend>
            
                <div class='project-edit-box'>
                <div class='project-edit-box-header'>
                    <p class='text-style-5'>Main settings</p>
                </div>
                <div class='buttons-edit-box-body'>
                    <p class='text-style-6 col-xs-6'>Change Access</p>
                    <button name='public' class='btn btn-secondary style-button col-xs-offset-2' type='submit'>Change</button>
                </div>
                <div class='buttons-edit-box-body'>
                    <p class='text-style-6 col-xs-6'>Delete project</p>
                    <button name='delete' class='btn btn-secondary style-button col-xs-offset-2' type='submit'>Delete</button>
                </div>
                </div>
            

                <div class='project-edit-box'>
                <div class='project-edit-box-header'>
                    <p class='text-style-5'>Invite Users</p>
                </div>
                <div class='text-edit-box-body'>
                    <p class='text-style-6'>Invite a user to join project</p>
                    <div class='col-md-6 col-sm-6 input-group'>
                    <input name='joinUser' id='joinUser' type='text' class='form-control' placeholder='ex: aed1123'>
                    <span class='input-group-addon btn btn-primary'>Invite</span>
                    </div>
                </div>
                </div>
            </form>
            </div>
            </div>
        </div>
    </div>
    </div>

    <script src='../../javascript/projects/projectEdit.js'></script>
</div>