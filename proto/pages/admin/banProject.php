<?php 
	include_once('../../config/init.php');
	$smarty->assign('style','css/pages/project.css');
	$smarty->assign('style','css/templates/navtable.css');
	$smarty->assign('style','css/pages/forms.css');
	$smarty->assign('style','css/pages/editProject.css');
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl'); 
?>
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
							<td class="active"><a class="text-style-6" href="#overview">Overview</a></td>
							<td><a class="text-style-6" href="#tasks">Iterations</a></td>
							<td><a class="text-style-6" href="#stats">Statistics</a></td>
							<td><a class="text-style-6" href="#forum">Forum</a></td>
							<td><a class="text-style-6" href="#edit">Edit</a></td>
							<td class="nav-table-fill"></td>
						</tr>
					</table>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="container">
						<div class="project-info-box">
							<p class="text-style-2">Overview</p>
							<p class="text-style-5">Quick and simple overview of the project</p>
							<hr class="featurette-divider">
							<p class="text-style-6">Game developmnent project that focuses on C/C++ and Java implementations.</p>
							<div class="form-group">
								<label class="col-md-4 control-label" ></label>  
								<div class="col-md-4">
									<a href="#" id="update" class="btn btn-danger"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Ban Project</a>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<!-- FOOTER -->
		<?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>
