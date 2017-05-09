<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">

<div class="container">
    <div class="card card-container">
        <form class="form-horizontal" action="{$BASE_URL}actions/projects/createTask.php?itID={$smartyItID}" method="post">
            <fieldset>
            <!-- Form Name -->
                <legend>Add Task</legend>

            <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="TaskName">Identification</label>  
                    <div class="col-md-4">
                        <div class="col-md-4">
                            <input id="TaskName" name="TaskName" type="text" placeholder="Task name" class="form-control form-style input-md">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="Priority">Priority</label>  
                    <div class="col-md-4">
                        <div class="col-md-4">
                            <input id="Priority" name="Priority" type="text" placeholder="Priority" class="form-control form-style input-md">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-4 control-label" for="Effort">Effort</label>  
                    <div class="col-md-4">
                        <div class="col-md-4">
                            <input id="Effort" name="Effort" type="text" placeholder="Effort" class="form-control form-style input-md">
                        </div>
                    </div>
                </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Description">Description (max 100 words)</label>
                <div class="col-md-4">   
                    <div class="col-md-4">                     
                        <textarea class="form-control form-style" rows="5" cols="30"  id="Description" name="Description"></textarea>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" ></label>  
                <div class="col-md-4">
                    <button type="submit" id="addTask" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Add Task</button>
                </div>
            </div>

            </fieldset>
        </form>
    </div>
</div>
</div>