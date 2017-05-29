<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">

<div id='profile-content' class='profile-content'>
    <form id="editing" class="form-horizontal" action="{$BASE_URL}actions/projects/editIteration.php?itID={$smartyItID}" method="post">
        <h2>Edit Iteration</h2>

        <fieldset>
            <legend class="tab">Iteration Name</legend>
        <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="ItName">Name</label>
                <div class="col-md-4">
                    <input id="ItName" name="ItName" type="text" placeholder="Name" class="form-control form-style input-md">
                    <span class="field_error" >{$FIELD_ERRORS.iterations}</span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" ></label>
                <div class="col-md-4">
                    <button id="editName" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Update name</button>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend class="tab">Maximum Effort</legend>
            <div class="form-group">
            <label class="col-md-4 control-label" for="maximum">Maximum Effort</label>
                <div class="col-md-4">
                    <input id="maximum" name="maximum" type="text" placeholder="Maximum effort" class="form-control form-style input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" ></label>
                <div class="col-md-4">
                    <button id="editEffort" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Update effort</button>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend class="tab">Dates</legend>
            <div class="form-group">
                <label class="col-md-4 control-label" for="StartDate">Start Date</label>
                <div class="col-md-4">
                    <input type="date" id="StartDate" name="StartDate" class="form-control form-style input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="DueDate">Due Date</label>
                <div class="col-md-4">
                    <input type="date" id="DueDate" name="DueDate" class="form-control form-style input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" ></label>
                <div class="col-md-4">
                    <button id="editDates" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Edit Dates</button>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend class="tab">Description</legend>
            <div class="form-group">
                <label class="col-md-4 control-label" for="Description">Description (max 100 words)</label>
                <div class="col-md-4">
                    <textarea class="form-control form-style" rows="5" cols="30"  id="Description" name="Description">Description</textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" ></label>
                <div class="col-md-4">
                    <button id="editDescription" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Edit Description</button>
                </div>
            </div>

        </fieldset>
    </form>

    <form class="form-horizontal" action="{$BASE_URL}actions/projects/givePermission.php?itID={$smartyItID}" method="post">
        <fieldset>
            <!-- Form Name -->
            <legend class="tab">Give User Permission</legend>
            <div class="form-group">
                <label for="permission" class="col-md-4 control-label">Give Permission</label>
                <div class="col-md-4">
                    <input name='permission' id='permission' type='text' class="form-control form-style input-md" placeholder='ex: aed1123'>
                    <button id="givePermission" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Add User</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
