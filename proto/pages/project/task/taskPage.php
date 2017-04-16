<?php 
	include_once('../../../config/init.php');
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl'); 
?>

		<link href="../../../css/pages/forms.css" rel="stylesheet">
		<link href="../../../css/pages/taskList.css" rel="stylesheet">
		<link href="../../../css/pages/search.css" rel="stylesheet">
		<link href="../../../css/templates/projectsUsers.css" rel="stylesheet">
			<div class="container">
				<div class="card card-container">
					<div class="table-container">
						<div class="info-box">
							<div class="info-box">
							<p class="text-style-3">Add search bar</p>
							<p class="text-style-5">Searches only users for now.</p>
							<hr class="featurette-divider">
							<div class="table-responsive">
								<table class="task table">
									<thead>
										<tr>
											<th class="column state">State</th>
											<th class="column priority">Priority</th>
											<th class="column effort">Effort</th>
											<th class="column dueDate">Due Date</th>
											<th class="column workers">Workers</th>
											<th class="column join button"></th>

										</tr>
									</thead>
									<tbody>
										<!-- Tasks -->
										<tr>
											<td class="task-info state">Unassigned</td>
											<td class="task-info priority">High</td>
											<td class="task-info effort">10</td>
											<td class="task-info dueDate">23-04-2017</td>
											<td class="task-info workers">0/2</td>
										</tr>


									</tbody>
								</table>
							</div>
							<div class="task-userbuttons">
								<button type="button" class="btn btn-success btn-sm">Request to join task</button>
								<button type="button" class="btn btn-warning btn-sm">Edit Task</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<!-- FOOTER -->
		<?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>