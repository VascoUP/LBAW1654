<?php 
	include_once('../../config/init.php');
	$smarty->assign('style','css/pages/profile.css');
	$smarty->assign('style','css/templates/projectsUsers.css');
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl'); 
?>
			<div class="container">
				<div class="row profile">
					<div class="col-md-3">
						<div class="profile-sidebar">
							<!-- SIDEBAR USERPIC -->
							<div class="profile-userpic">
								<img src="img/loginImage.png" class="img-responsive" alt="">
							</div>
							<!-- END SIDEBAR USERPIC -->
							<!-- SIDEBAR USER TITLE -->
							<div class="profile-usertitle">
								<div class="profile-usertitle-name">
									Marcus Doe
								</div>
								<div class="profile-usertitle-email">
									marcusDoe@gmail.com
								</div>
							</div>

							<!-- END SIDEBAR BUTTONS -->
							<!-- SIDEBAR MENU -->
							<div class="profile-usermenu">
								<ul class="nav">
									<li>
										<a href="#">
										<i class="glyphicon glyphicon-home"></i>
										Overview </a>
									</li>
									<li>
										<a href="#">
										<i class="glyphicon glyphicon-user"></i>
										Account Settings </a>
									</li>
									<li class="active">
										<a href="#" target="_blank">
										<i class="glyphicon glyphicon-ok"></i>
										My Projects </a>
									</li>
								</ul>
							</div>
							<!-- END MENU -->
						</div>

						<!-- END SIDEBAR USER TITLE -->
							<!-- SIDEBAR BUTTONS -->
							<div class="profile-userbuttons">
								<button type="button" class="btn btn-success btn-sm">Add project</button>
								<button type="button" class="btn btn-success btn-sm">Contact</button>
							</div>
					</div>
					<div class="col-md-9">
						<div class="profile-content">
						<div class="pull-left">
								<input type="text" class="form-control search" placeholder="Search...">
							</div>
							<div class="table-container">
								<table class="table table-filter">
									<tbody>
										<tr>
											<td>
												<div class="media">
													<div class="media-body">
														<h4 class="title">
															Lorem Impsum
														</h4>
														<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
													</div>
													
													<div class="profile-userbuttons">
														<button type="button" class="btn btn-danger btn-sm">Delete Project</button>
													</div>
													
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- FOOTER -->
		<?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>