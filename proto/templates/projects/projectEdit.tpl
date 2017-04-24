<link href="../../../css/pages/forms.css" rel="stylesheet">
<link href="../../../css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script src="../../../javascript/confirmDelete.js"></script>
<script src='../../../javascript/projects/projectEdit.js'></script>

<div class="container">
    <div class="card card-container">
        <form class="form-horizontal" action="../../../actions/projects/projectEdit.php?projID={$smartyProjID}" method="post">
            <!-- Form Name -->
            <h2>Edit Project</h2>

            <fieldset>
            <!-- Form Name -->
            <legend class="tab">Project Name</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Name</label>  
                    <div class="col-md-4">
                        <input type='text' name='name' id='name' class="form-control form-style input-md" placeholder='ex: PIU'>
                        <button id="update" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Update Name</button>
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
                        <button id="update" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Update Description</button>
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
			<form action="../../../api/deleteProject.php?projID={$smartyProjID}" method="post">
            <div class="form-group">
                <label class="col-md-4 control-label" for="deleteProj">Delete Project</label>
                    <div class="col-md-4">   
                        <button id="deleteProj" name='deleteProj' class='btn btn-secondary style-button col-xs-offset-2' type='submit'>Delete</button>
                    </div>
            </div>
			</form>
			</fieldset>
			
            <fieldset>
            <!-- Form Name -->
            <legend class="tab">Invite Users</legend>
            <div class="form-group">
                <label for="joinUser" class="col-md-4 control-label">Invite to join</label>
                    <div class="col-md-4">
                        <input name='joinUser' id='joinUser' type='text' class="form-control form-style input-md" placeholder='ex: aed1123'>
						<button id="update" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Add User</button>
                    </div>
            </div>
			</fieldset>
        </form>
    </div>

</div>