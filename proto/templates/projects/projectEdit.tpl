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
			</fieldset>
			
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

</div>