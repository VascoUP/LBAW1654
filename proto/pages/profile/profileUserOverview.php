<?php 
	include_once('../../config/init.php');
	$smarty->assign('style','css/pages/profile.css');
	
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
									aeFi321
								</div>
								<div class="profile-usertitle-email">
									aeFi321@gmail.com
								</div>
							</div>

							<!-- END SIDEBAR BUTTONS -->
							<!-- SIDEBAR MENU -->
							<div class="profile-usermenu">
								<ul class="nav">
									<li class="active">
										<a href="#">
										<i class="glyphicon glyphicon-home"></i>
										Overview </a>
									</li>
									<li>
										<a href="#">
										<i class="glyphicon glyphicon-user"></i>
										Account Settings </a>
									</li>
									<li>
										<a href="#" target="_blank">
										<i class="glyphicon glyphicon-ok"></i>
										Projects I contributed to</a>
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
						   <h2>
								Biography
							</h2>
							<p class="summary">
							My name is Andrew, I'm 20 years old and I live in Barcelona. <br>
							I have a degree in Computer Engineering and I like to listen to music.
							</p>
							<br>
							<h3>
								Curriculum Vitae
							</h3>
							<a href="#"> aeFi321CV </a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- FOOTER -->
		<?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>