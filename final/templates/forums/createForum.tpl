<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">

<div id='profile-content' class='profile-content'>
    <form class="form-horizontal" action="{$BASE_URL}actions/projects/createForum.php?projID={$smartyProjID}" method="post">
        <fieldset>
            <!-- Form Name -->
            <legend>Create Forum</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="categoryName">Forum name</label>
                <div class="col-md-4">
                    <div class="col-md-4">
                        <input id="categoryName" name="categoryName" type="text" placeholder="Forum name" class="form-control form-style input-md">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" id="addTask" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Create Forum</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>