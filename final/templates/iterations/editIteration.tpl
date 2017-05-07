<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">

<div class="container">
    <div class="card card-container">
        <form class="form-horizontal" action="{$BASE_URL}actions/projects/editIteration.php?itID={$smartyItID}" method="post">
        <fieldset>
        <!-- Form Name -->
            <legend>Edit Iteration</legend>

        <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="ItName">Iteration Name</label>  
            <div class="col-md-4">
                <input id="ItName" name="ItName" type="text" placeholder="Name" class="form-control form-style input-md">
            </div>
            </div>
            
            <div class="form-group">
            <label class="col-md-4 control-label" for="maximum">Maximum Effort</label>  
                <div class="col-md-4">
                    <input id="maximum" name="maximum" type="text" placeholder="Maximum effort" class="form-control form-style input-md">
                </div>
            </div>

            <div class="form-group">
            <label class="col-md-4 control-label" for="StartDate">Start Date</label>  
            <div class="col-md-4">
                <input type="date" value="2017-03-07" id="StartDate" name="StartDate" class="form-control form-style input-md">
            </div>
            </div>
            
            <div class="form-group">
            <label class="col-md-4 control-label" for="DueDate">Due Date</label>  
            <div class="col-md-4">
                <input type="date" value="2017-03-07" id="DueDate" name="DueDate" class="form-control form-style input-md">
            </div>
            </div>
            
            <div class="form-group">
            <label class="col-md-4 control-label" for="Description">Description (max 100 words)</label>
            <div class="col-md-4">                    
                <textarea class="form-control form-style" rows="5" cols="30"  id="Description" name="Description">Description</textarea>
            </div>
            </div>
                
            <div class="form-group">
                <label class="col-md-4 control-label" ></label>  
                <div class="col-md-4">
                    <button id="addTask" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Edit Iteration</button>
                </div>
            </div>

        </fieldset>
        </form>
    </div>
</div>
</div>