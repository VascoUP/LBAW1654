<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">

<div class="container">
    <div class='row profile'>
        {include file="{$BASE_DIR}/templates/projects/projectSideBar.tpl"}
        <div class='col-md-9'>
            <div class="card card-container">
                <form class="form-horizontal" action="{$BASE_URL}actions/projects/createForumTask.php?projID={$smartyProjID}&taskID={$smartyTaskID}" method="post">
                    <fieldset>
                        <!-- Form Name -->
                        <legend>Create {$smartyTaskName} Forum</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" id="addTask" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Create Forum</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>