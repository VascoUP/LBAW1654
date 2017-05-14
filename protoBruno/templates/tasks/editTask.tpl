<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script src="{$BASE_URL}javascript/users/confirmDelete.js"></script>

<div class="container">
    <div class="card card-container">
        <form class="form-horizontal" action="{$BASE_URL}actions/projects/editTask.php?taskID={$smartyTaskID}" method="post">
        <h2>Edit Task</h2>

		<fieldset>
		<legend class="tab">Task name</legend>
        <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="TaskName">Identification</label>  
            <div class="col-md-4">
                <input id="TaskName" name="TaskName" type="text" placeholder="TaskName" class="form-control form-style input-md">
            </div>
            </div>
			
			<div class="form-group">
            <label class="col-md-4 control-label" ></label>  
            <div class="col-md-4">
                <button type="submit" id="addTask" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Edit Name</button>
            </div>
            </div>
		</fieldset>

		<fieldset>
		<legend class="tab">Priority</legend>
            <div class="form-group">
            <label class="col-md-4 control-label" for="Priority">Priority</label>  
            <div class="col-md-4">
                <input id="Priority" name="Priority" type="text" placeholder="Priority" class="form-control form-style input-md">
            </div>
            </div>
			
			<div class="form-group">
            <label class="col-md-4 control-label" ></label>  
            <div class="col-md-4">
                <button type="submit" id="addTask" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Edit Priority</button>
            </div>
            </div>
		</fieldset>
		
		<fieldset>
		<legend class="tab">Effort</legend>
            <div class="form-group">
            <label class="col-md-4 control-label" for="Effort">Effort</label>  
            <div class="col-md-4">
                <input id="Effort" name="Effort" type="text" placeholder="Effort" class="form-control form-style input-md">
            </div>
            </div>
			
			<div class="form-group">
            <label class="col-md-4 control-label" ></label>  
            <div class="col-md-4">
                <button type="submit" id="addTask" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Edit Effort</button>
            </div>
            </div>
		</fieldset>
		
		<fieldset>
		<legend class="tab">New collaborators</legend>
            <div class="form-group">
            <label class="col-md-4 control-label" for="Collaborators">Add Collaborator</label> 
            <div class="col-md-4">								
                <div id="imaginary_container"> 
                        <input type="text" class="form-control form-style input-md"  id = "Collaborators" name="Collaborators" placeholder="Search" >
                </div>
            </div>
            </div>
			<div class="form-group">
            <label class="col-md-4 control-label" ></label>  
            <div class="col-md-4">
                <button type="submit" id="addTask" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Add collaborator</button>
            </div>
            </div>
		</fieldset>

		<fieldset>
		<legend class="tab">Description</legend>
        <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="Description">Description (max 100 words)</label>
            <div class="col-md-4">                    
                <textarea class="form-control form-style" rows="5" cols="30"  id="Description" name="Description"></textarea>
            </div>
            </div>
			
			<div class="form-group">
            <label class="col-md-4 control-label" ></label>  
            <div class="col-md-4">
                <button type="submit" id="addTask" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Edit Description</button>
            </div>
            </div>
		</fieldset>
		
		<fieldset>
		<legend class="tab">Status</legend>
		<div class="form-group">
                <label class="col-md-4 control-label" for="status">Change Status</label>
                    <div class="col-md-4">
                        <select name="status" class="form-control form-style input-xs">
							{if $smartyTaskStatus == 'completed'}
							<option value="completed">Completed</option>
							<option value="active">Active</option>
							{else}
							<option value="active">Active</option>
							<option value="completed">Completed</option>
							{/if}
						</select>
						
						<div class="form-group">
            <label class="col-md-4 control-label" ></label>  
            <div class="col-md-4">
                <button type="submit" id="addTask" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Change Status</button>
            </div>
            </div>
                    </div>
            </div>
		</fieldset>

            <div class="form-group">
            <label class="col-md-4 control-label" ></label>  
            <div class="col-md-4">
                <a href="{$BASE_URL}actions/projects/deleteTask.php?taskID={$smartyTaskID}" id="deleteTask" class="btn btn-danger"><span class="glyphicon glyphicon-thumbs-up"></span> Delete Task</a>
            </div>
            </div>

        </fieldset>
        </form>
    </div>
</div>
</div>