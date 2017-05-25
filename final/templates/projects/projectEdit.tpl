<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script src="{$BASE_URL}javascript/users/confirmDelete.js"></script>

<div class="container">
    <div class='row profile'>
        {include file="{$BASE_DIR}/templates/projects/projectSideBar.tpl"}
        <div class='col-md-9'>
            <div class="card card-container">
                <form class="form-horizontal" action="{$BASE_URL}actions/projects/projectEdit.php?projID={$smartyProjID}" method="post">
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
                    <legend class="tab">Project Tags</legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="tags">Tags</label>  
                            <div class="col-md-4">
                                <input id="tags" name="tags" type="text" placeholder="Tags" class="form-control form-style input-md">
                                <button id="update" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Add Tags</button>
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
                                <select name="access" class="form-control form-style input-xs">
                                    {if $smartyAccess == 1}
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                    {else}
                                    <option value="private">Private</option>
                                    <option value="public">Public</option>
                                    {/if}
                                </select>
                                
                                <button id="update" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Change Access</button>
                            </div>
                    </div>
                    </form>
                    <br>
                    <br>
                    <form class="form-horizontal" action="{$BASE_URL}actions/projects/deleteProject.php?projID={$smartyProjID}" method="post">
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="deleteProj">Delete Project</label>
                            <div class="col-md-4">   
                                <button id="deleteProj" name='deleteProj' type='submit' class="btn btn-danger"><span class="glyphicon glyphicon-thumbs-down" value=""></span> Delete</button>
                            </div>
                    </div>
                    </fieldset>
                    </form>
                    
                    <form class="form-horizontal" action="{$BASE_URL}actions/projects/projectEdit.php?projID={$smartyProjID}" method="post">
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
    </div>
</div>