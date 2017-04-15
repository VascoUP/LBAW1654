<?php 
	include_once('../../../config/init.php');
	$smarty->assign('style','css/pages/project.css');
	$smarty->assign('style','css/pages/forum.css');
	$smarty->assign('style','css/pages/taskList.css');
	$smarty->assign('style','css/templates/navtable.css');
	
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
							<td><a class="text-style-6" href="#overview">Overview</a></td>
							<td><a class="text-style-6" href="#tasks">Iterations</a></td>
							<td><a class="text-style-6" href="#stats">Statistics</a></td>
							<td class="active"><a class="text-style-6" href="#forum">Forum</a></td>
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
							<p class="text-style-2">Forum</p>
							<p class="text-style-5">This is the right place to discuss any ideas, critics, feature requests and all the ideas regarding the project. Please follow the forum rules and always check FAQ before posting to prevent duplicate posts.</p>
							<hr class="featurette-divider">

							<div class="table-responsive">
								<table class="table forum table-striped">
									<thead>
										<tr>
											<th class="hidden-xs cell-stat"></th>
											<th>
												<h3>Important</h3>
											</th>
											<th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
											<th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
											<th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
											<th class="column join button"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="hidden-xs text-center"><i class="fa fa-question fa-2x text-primary"></i></td>
											<td>
												<h4><a href="#">Frequently Asked Questions</a><br><small>Some description</small></h4>
											</td>
											<td class="text-center hidden-xs hidden-sm"><a href="#">9 542</a></td>
											<td class="text-center hidden-xs hidden-sm"><a href="#">89 897</a></td>
											<td class="posted by">by <a href="#">John Doe</a><br><small><i class="fa fa-clock-o"></i> 3 months ago</small></td>
											<td> <button class="join button">Edit Forum</button> </td>
										</tr>
										<tr>
											<td class="hidden-xs text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
											<td>
												<h4><a href="#">Important changes</a><br><small>Category description</small></h4>
											</td>
											<td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
											<td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
											<td class="posted by">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 1 years ago</small></td>
											<td> <button class="join button">Edit Forum</button> </td>
										</tr>
									</tbody>
								</table>
								<br>
									<button class="join button">Add Forum</button>
								<br>
							</div>
							<div class="table-responsive">
								<table class="table forum table-striped">
									<thead>
										<tr>
											<th class="hidden-xs cell-stat"></th>
											<th>
												<h3>Suggestions</h3>
											</th>
											<th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
											<th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
											<th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
											<th class="column join button"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="hidden-xs text-center"><i class="fa fa-heart fa-2x text-primary"></i></td>
											<td>
												<h4><a href="#">More more more</a><br><small>Category description</small></h4>
											</td>
											<td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
											<td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
											<td class="posted by">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 3 months ago</small></td>
											<td> <button class="join button">Edit Forum</button> </td>
										</tr>
										<tr>
											<td class="hidden-xs text-center"><i class="fa fa-magic fa-2x text-primary"></i></td>
											<td>
												<h4><a href="#">Haha</a><br><small>Category description</small></h4>
											</td>
											<td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
											<td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
											<td class="posted by">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 1 years ago</small></td>
											<td> <button class="join button">Edit Forum</button> </td>
										</tr>
									</tbody>
								</table>
								<br>
									<button class="join button">Add Forum</button>
								<br>
							</div>
							<div class="table-responsive">
								<table class="table forum table-striped">
									<thead>
										<tr>
											<th class="hidden-xs cell-stat"></th>
											<th>
												<h3>Open discussion</h3>
											</th>
											<th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
											<th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
											<th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
											<th class="column join button"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td></td>
											<td colspan="4" class="center">No topics have been added yet.</td>
											<td> <button class="join button">Edit Forum</button> </td>
										</tr>
									</tbody>
								</table>
								<br>
									<button class="join button">Add Forum</button>
								<br>
								<br>
							</div>
								<button class="addCategory">Add Category</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- FOOTER -->
		<?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>
