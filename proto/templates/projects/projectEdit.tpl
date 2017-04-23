<<<<<<< HEAD
<link href="../../css/pages/forms.css" rel="stylesheet">
<link href="../../css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script src="../../javascript/confirmDelete.js"></script>
<script src='../../javascript/projects/projectEdit.js'></script>

<div class="container">
    <div class="card card-container">
        <form class="form-horizontal" action="../../actions/projects/projectEdit.phpprojID='{$smartyProjID} method="post">
            <!-- Form Name -->
            <h2>Edit Profile</h2>

            <fieldset>
            <!-- Form Name -->
            <legend class="tab">Project name</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Username</label>  
                    <div class="col-md-4">
=======
<div id='editContainer'>
    <link href="{$BASE_URL}css/pages/forms.css" rel='stylesheet'>
    <link href="{$BASE_URL}css/pages/project.css" rel='stylesheet'>
    <link href="{$BASE_URL}css/pages/editProject.css" rel='stylesheet'>

    <!-- Edit body -->
    <div class='container'>
        <div class='row'>
            <div class='container'>
            <div class='project-info-box'>
            <form action="{$BASE_URL}actions/projects/projectEdit.php?projID={$smartyProjID}" method='post'>
                <p class='text-style-2'>Edit project</p>
                <legend></legend>
                <div class='project-edit-box'>
                <div class='project-edit-box-header'>
                    <p class='text-style-5'>Rename project</p>
                </div>
                <div class='text-edit-box-body'>
                    <p class='text-style-6'>Change the name of the project to a new one</p>
                    <div class='col-md-6 col-sm-6 input-group'>
>>>>>>> origin/master
                        <input type='text' name='name' id='name' class='form-control' placeholder='ex: PIU'>
                        <button id="update" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Update Username</button>
                    </div>
            </div>
            </fieldset>

            <fieldset>
            <!-- Form Name -->
            <legend class="tab">Description</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="description">Description</label>  
                    <div class="col-md-4">
                        <input id="description" name="description" type="text" placeholder="Description" class="form-control form-style input-md">
                        <button id="update" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Update Email</button>
                    </div>
            </div>
            </fieldset>

            <fieldset>
            <!-- Form Name -->
            <legend class="tab">Main Settings</legend>
            <!-- File Button --> 
            <div class="form-group">
                <label class="col-md-4 control-label" for="public">Change Access</label>
                    <div class="col-md-4">
                        <button id="public" name='public' class='btn btn-secondary style-button col-xs-offset-2' type='submit'>Change</button>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="delete">Delete Project</label>
                    <div class="col-md-4">   
                        <button id="delete" name='delete' class='btn btn-secondary style-button col-xs-offset-2' type='submit'>Delete</button>
                    </div>
            </div>

<<<<<<< HEAD
            <fieldset>
            <!-- Form Name -->
            <legend class="tab">Invite Users</legend>
            <div class="form-group">
                <label for="joinUser" class="col-md-4 control-label">Invite to join</label>
                    <div class="col-md-4">
                        <input name='joinUser' id='joinUser' type='text' class='form-control' placeholder='ex: aed1123'>
                    </div>
            </div>
        </form>
    </div>
=======
    <script src="{$BASE_URL}javascript/projects/projectEdit.js"></script>
>>>>>>> origin/master
</div>