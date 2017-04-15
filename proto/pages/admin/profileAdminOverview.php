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
								<img src="../../images/assets/loginImage.png" class="img-responsive" alt="">
							</div>
							<!-- END SIDEBAR USERPIC -->
							<!-- SIDEBAR USER TITLE -->
							<div class="profile-usertitle">
								<div class="profile-usertitle-name">
									Ava Stuart
								</div>
								<div class="profile-usertitle-email">
									avieSS@hotmail.com
								</div>
							</div>

							<!-- END SIDEBAR BUTTONS -->
							<!-- SIDEBAR MENU -->
							<div class="profile-usermenu">
								<ul class="nav">
									<li class="active">
										<a href="#" target="_blank">
										<i class="glyphicon glyphicon-ok"></i>
										Site projects </a>
									</li>
									<li>
										<a href="#" target="_blank">
										<i class="glyphicon glyphicon-ok"></i>
										Site users </a>
									</li>
									<li>
										<a href="#">
										<i class="glyphicon glyphicon-user"></i>
										Account Settings </a>
									</li>
								</ul>
							</div>
							<!-- END MENU -->
						</div>
					</div>
					<div class="col-md-9">
						<div class="profile-content">
							<div class="pull-right">
								<div class="btn-group">
									<button type="button" class="btn btn-success btn-filter" data-target="accepted">Accepted</button>
									<button type="button" class="btn btn-warning btn-filter" data-target="reported">Reported</button>
									<button type="button" class="btn btn-danger btn-filter" data-target="reported">Banned</button>
									<button type="button" class="btn btn-default btn-filter" data-target="all">All</button>
								</div>
							</div>
							<div class="pull-left">
								<input type="text" class="form-control search" placeholder="Search...">
							</div>
							<div class="table-container">
								<table class="table table-filter">
									<tbody>
										<tr data-status="accepetd">
											<td>
												<div class="media">
													<div class="media-body">
														<h4 class="title">
															Lorem Impsum
															<span class="pull-right accepted">(Accepted)</span>
														</h4>
														<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
													</div>
												</div>
											</td>
										</tr>
										<tr data-status="banned">

										<td>
											<div class="media">
												<div class="media-body">
													<h4 class="title">
														Lorem
														<span class="pull-right banned">(Banned)</span>
													</h4>
													<p class="summary">Ut enim ad minim veniam</p>
													<div class="col-md-4">
														<a href="#" id="update" class="btn btn-danger"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Remove the ban status</a>
													</div>
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