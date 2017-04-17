<?php 
	include_once('../../../config/init.php');
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl'); 
?>
		<link href="../../../css/pages/project.css" rel="stylesheet">
		<link href="../../../css/pages/forms.css" rel="stylesheet">
		<link href="../../../css/pages/editProject.css" rel="stylesheet">
		<link href="../../../css/templates/navtable.css" rel="stylesheet">
		<link href="../../../css/bootstrap/bootstrap-social.css" rel="stylesheet">
		
			<div class="navbar-spacing"></div>
			<div class="page-spacing"></div>
			<!--	PROJECT NAME AND OTHER IMPORTANT INFOS
			======================================================= -->
			<div class="container">
				<div class="row">
					<div class="container">
						<p class="text-style-1 col-md-6 col-xs-6">Project Name</p>
						<div class="col-xs-offset-10">
							<div class="table-responsive info-responsive">
								<table class="info col-xs-12" cellspacing="0">
									<tr>
										<th class="text-style-6 info-type col-xs-8">Users</th>
										<th class="text-style-6 col-xs-4">1</th>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="page-spacing"></div>

			<!--	PROJECT PAGE SELECTOR
			============================================ -->
			<div class="container">
				<div class="table-responsive nav-table-scroll">
					<table class="nav-table">
						<tr class="col-xs-12">
							<td><a class="text-style-6" href="#overview">Overview</a></td>
							<td><a class="text-style-6" href="#tasks">Iterations</a></td>
							<td><a class="text-style-6" href="#stats">Statistics</a></td>
							<td><a class="text-style-6" href="#forum">Forum</a></td>
							<td class="active"><a class="text-style-6" href="#edit">Edit</a></td>
							<td class="nav-table-fill"></td>
						</tr>
					</table>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="container">
						<div class="project-info-box">
							<p class="text-style-2">Edit project</p>
							<legend></legend>

							<div class="project-edit-box">
								<div class="project-edit-box-header">
									<p class="text-style-5">Rename project</p>
								</div>
								<div class="text-edit-box-body">
									<p class="text-style-6">Change the name of the project to a new one</p>
									<div class="col-md-6 col-sm-6 input-group">
										<input type="text" class="form-control" placeholder="ex: PIU">
										<span class="input-group-addon btn btn-primary">Submit</span>
									</div>
								</div> 
							</div>

							<legend></legend>

							<div class="project-edit-box">
								<div class="project-edit-box-header">
									<p class="text-style-5">Edit overview</p>
								</div>
								<div class="text-edit-box-body">
									<p class="text-style-6">Redo the overview project for either a quick fix or an overall update</p>
									<div class="col-md-7 col-sm-7 input-group">
										<textarea rows="4" cols="50" class="form-control" placeholder="ex: PIU"></textarea>
										<span class="input-group-addon btn btn-primary">Submit</span>
									</div>
								</div> 
							</div>

							<legend></legend>

							<div class="project-edit-box">
								<div class="project-edit-box-header">
									<p class="text-style-5">Main settings</p>
								</div>
								<div class="buttons-edit-box-body">
									<p class="text-style-6 col-xs-6">Make project public</p>
									<button class="btn btn-secondary style-button col-xs-offset-2" type="button">Go Public</button>
								</div>
								<div class="buttons-edit-box-body">
									<p class="text-style-6 col-xs-6">Delete project</p>
									<button class="btn btn-secondary style-button col-xs-offset-2" type="button">Delete</button>
								</div>
							</div>
							
							<div class="project-edit-box">
								<div class="project-edit-box-header">
									<p class="text-style-5">Invite Users</p>
								</div>
								<div class="text-edit-box-body">
									<p class="text-style-6">Invite a user to join project</p>
									<div class="col-md-6 col-sm-6 input-group">
										<input type="text" class="form-control" placeholder="ex: aed1123">
										<span class="input-group-addon btn btn-primary">Invite</span>
									</div>
								</div> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- FOOTER -->
		<?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>