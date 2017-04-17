<?php 
	include_once('../../../config/init.php');
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl'); 
?>

		<link href="../../css/pages/forms.css" rel="stylesheet">
		<link href="../../css/bootstrap/bootstrap-social.css" rel="stylesheet">
		
			<div class="container">
				<div class="card card-container">
						<form class="form-horizontal">
							<fieldset>
							<!-- Form Name -->
								<legend>Edit Task</legend>

							<!-- Text input-->
								<div class="form-group">
									<label class="col-md-4 control-label" for="TaskName">Identification</label>  
									<div class="col-md-4">
										<input id="TaskName" name="TaskName" type="text" placeholder="TaskName" class="form-control form-style input-md">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label" for="Priority">Priority</label>  
									<div class="col-md-4">
										<input id="Priority" name="Priority" type="text" placeholder="Priority" class="form-control form-style input-md">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label" for="DueDate">Due Date</label>  
									<div class="col-md-4">
										<input type="date" value="2017-03-07" id="DueDate" name="DueDate" class="form-control form-style input-md">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label" for="Status">Status</label> 
									<div class="col-md-4">
										<select name="status" class="form-control form-style input-md" required>
											<option value="active">Active</option>
											<option value="unassgined">Unassigned</option>
											<option value="completed">Completed</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label" for="Collaborators">Add Collaborators</label> 
									<div class="col-md-4">								
										<div id="imaginary_container"> 
												<input type="text" class="form-control form-style input-md"  placeholder="Search" >
										</div>
									</div>
								</div>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="Description">Description (max 100 words)</label>
								<div class="col-md-4">                    
									<textarea class="form-control form-style" rows="5" cols="30"  id="Description" name="Description">Description</textarea>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label" ></label>  
								<div class="col-md-4">
									<a href="#" id="addTask" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Edit Task</a>
									<a href="#" id="deleteTask" class="btn btn-danger"><span class="glyphicon glyphicon-thumbs-up"></span> Delete Task</a>
								</div>
							</div>

							</fieldset>
						</form>

				</div>
			</div>
	
		</div>
		<!-- FOOTER -->
		<?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>
