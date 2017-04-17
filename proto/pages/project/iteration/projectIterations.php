<?php 
	include_once('../../../config/init.php');
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl'); 
?>

		<link href="../../../css/pages/project.css" rel="stylesheet">
		<link href="../../../css/pages/taskList.css" rel="stylesheet">
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
							<td class="active"><a class="text-style-6" href="#tasks">Iterations</a></td>
							<td><a class="text-style-6" href="#stats">Statistics</a></td>
							<td><a class="text-style-6" href="#forum">Forum</a></td>
							<td><a class="text-style-6" href="#edit">Edit</a></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="container">
						<div class="project-info-box">
							<p class="text-style-2">Iterations</p>
							<p class="text-style-5">This is where you'll find the project iterations</p>
							<hr class="featurette-divider">

							<div class="table-responsive">
								<table class="table iteration table-striped">
									<thead>
										<tr>
											<th class="hidden-xs cell-stat"></th>
											<th>
												<h3>Iterations</h3>
											</th>
											<th class="cell-stat text-center hidden-xs hidden-sm">Number of tasks</th>
											<th class="cell-stat text-center hidden-xs hidden-sm">Start date</th>
											<th class="cell-stat text-center hidden-xs hidden-sm">Due date</th>
											<th class="column join button"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="hidden-xs text-center"><i class="fa fa-question fa-2x text-primary"></i></td>
											<td>
												<h4><a href="#">Iteration 1</a></h4>
											</td>
											<td class="text-center hidden-xs hidden-sm"><a href="#">2</a></td>
											<td class="text-center hidden-xs hidden-sm"><a href="#">03-04-2017</a></td>
											<td class="text-center hidden-xs hidden-sm"><a href="#">10-04-2017</a></td>
											<td> <button class="join button">Edit Iteration</button> </td>
										</tr>
										<tr>
											<td class="hidden-xs text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
											<td>
												<h4><a href="#">Iteration 2</a></h4>
											</td>
											<td class="text-center hidden-xs hidden-sm"><a href="#">1</a></td>
											<td class="text-center hidden-xs hidden-sm"><a href="#">11-04-2017</a></td>
											<td class="text-center hidden-xs hidden-sm"><a href="#">18-04-2017</a></td>
											<td> <button class="join button">Edit Iteration</button> </td>
										</tr>
									</tbody>
								</table>
							</div>
								<button class="addIteration">Add Iteration</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- FOOTER -->
		<?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>
