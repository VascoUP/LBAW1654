<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">

<div class="container">
    <div class="card card-container">
        <form action="{$BASE_URL}actions/projects/createIteration.php?projID={$smartyProjID}" method="post" class="form-horizontal">
        <fieldset>
        <!-- Form Name -->
            <legend>Add Iteration</legend>

        <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="IterationName">Identification</label>  
            <div class="col-md-4">
                <div class="col-md-4">
                    <input id="IterationName" name="IterationName" type="text" placeholder="Iteration name" class="form-control form-style input-md">
                </div>
            </div>
            </div>
            
            <div class="form-group">
            <label class="col-md-4 control-label" for="maximum">Maximum Effort</label>  
            <div class="col-md-4">
                <div class="col-md-4">
                    <input id="maximum" name="maximum" type="text" placeholder="Maximum effort" class="form-control form-style input-md">
                </div>
            </div>
            </div>

            <div class="form-group">
            <label class="col-md-4 control-label" for="StartDate">Start Date</label>  
            <div class="col-md-4">
                <div class="col-md-4">
                    <input type="date" value="2017-05-16" id="StartDate" name="StartDate" class="form-control form-style input-md">
                </div>
            </div>
            </div>
            
            <div class="form-group">
            <label class="col-md-4 control-label" for="DueDate">Due Date</label>  
            <div class="col-md-4">
                <div class="col-md-4">
                    <input type="date" value="2017-05-16" id="DueDate" name="DueDate" class="form-control form-style input-md">
                </div>
            </div>
            </div>

        <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="Description">Description (max 100 words)</label>
            <div class="col-md-4">   
                <div class="col-md-4">                     
                    <textarea class="form-control form-style" rows="5" cols="30" placeholder="Description" id="Description" name="Description"></textarea>
                </div>
            </div>
            </div>

            <div class="form-group">
            <label class="col-md-4 control-label" ></label>  
            <div class="col-md-4">
                <button type=submit" id="addTask" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Add Task</button>
            </div>
            </div>

        </fieldset>
        </form>
    </div>
</div>
</div>