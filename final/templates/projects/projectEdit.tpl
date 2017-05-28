<div id='profile-content' class='profile-content'>
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
                    <button type="submit" class="btn btn-success update"><span class="glyphicon glyphicon-thumbs-up"></span> Update Name</button>
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
                    <button type="submit" class="btn btn-success update"><span class="glyphicon glyphicon-thumbs-up"></span> Update Description</button>
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
                    <button type="submit" class="btn btn-success update"><span class="glyphicon glyphicon-thumbs-up"></span> Add Tags</button>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <!-- Form Name -->
            <legend class="tab">Main Settings</legend>
            <!-- File Button --> 
            <div class="form-group">
                <label class="col-md-4 control-label" for="access">Change Access</label>
                <div class="col-md-4">
                    <select id="access" name="access" class="form-control form-style input-xs">
                    {if $smartyAccess == 1}
                        <option value="public">Public</option>
                        <option value="private">Private</option>
                    {else}
                        <option value="private">Private</option>
                        <option value="public">Public</option>
                    {/if}
                    </select>
                    <button type="submit" class="btn btn-success update"><span class="glyphicon glyphicon-thumbs-up"></span> Change Access</button>
                </div>
            </div>
        </fieldset>
    </form>
    <br>
    <br>
    <form class="form-horizontal" action="{$BASE_URL}actions/projects/deleteProject.php?projID={$smartyProjID}" method="post">
        <fieldset>
            <div class="form-group">
                <label class="col-md-4 control-label" for="deleteProj">Delete Project</label>
                <div class="col-md-4">   
                    <button id="deleteProj" name='deleteProj' type='submit' class="btn btn-danger"><span class="glyphicon glyphicon-thumbs-down"></span> Delete</button>
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
                    <button type="submit" class="btn btn-success update"><span class="glyphicon glyphicon-thumbs-up"></span> Add User</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>