<?php 
	include_once('../../../config/init.php');
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl'); 
?>
		<link href="../../../css/pages/forms.css" rel="stylesheet">
		<link href="../../../css/pages/taskList.css" rel="stylesheet">
		<link href="../../../css/pages/search.css" rel="stylesheet">
		<link href="../../../css/templates/projectsUsers.css" rel="stylesheet">
			<div class="container">
				<div class="card card-container-it">
					<div class="table-container">
						<div class="project-info-box">
							<p class="text-style-2">Iteration 1</p>
							<p class="text-style-5">This is where you'll find the project tasks for iteration 1</p>
							<hr class="featurette-divider">
							<div class="table-responsive">
								<table class="task table">
									<thead>
										<tr>
											<th class="task meta line"></th>
											<th>
											<h3>Tasks</h3>
											</th>
											<th class="column state">State</th>
											<th class="column priority">Priority</th>
											<th class="column due date">Due date</th>
											<th class="column workers">Workers</th>
											<th class="column join button"></th>

										</tr>
									</thead>
									<tbody>
										<!-- Tasks -->
										<tr>
											<td class="task entry"><i class="fa fa-question fa-2x text-primary"></i></td>
											<td>
												<h4><a href="#">Add search bar</a><br><small>Searches only users for now</small></h4>
											</td>
											<td class="task-info state">Unassigned</td>
											<td class="task-info priority">High</td>
											<td class="task-info due date">1/5/2017<br><small><i class="fa fa-clock-o"></i> (2 months left) </small></td>
											<td class="task-info workers">0/2</td>
											<td> <button class="join button">Request to join task</button> </td>
										</tr>

										<tr>
											<td class="task entry"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
											<td>
												<h4><a href="#">Set up color schemes</a><br><small></small></h4>
											</td>
											<td class="task-info state">Active</td>
											<td class="task-info priority">Medium</td>
											<td class="task-info due date">28/3/2017<br><small><i class="fa fa-clock-o"></i> (25 days left) </small></td>
											<td class="task-info workers">1/2</td>
											<td> <button class="join button">Request to join task</button> </td>
										</tr>

									</tbody>
								</table>
							</div>
							<button class="addTask">Add Task</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- FOOTER -->
		<?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>