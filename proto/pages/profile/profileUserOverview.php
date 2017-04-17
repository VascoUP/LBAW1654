<?php 
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/userInformation.php'); 
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl'); 
	
	$userInfo = getUserInformation($_SESSION['username']);
?>
		<link href="../../css/pages/profile.css" rel="stylesheet">
		<link href="../../css/bootstrap/bootstrap-social.css" rel="stylesheet">
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
									<?echo $userInfo['0']['username']?>
								</div>
								<div class="profile-usertitle-email">
									<?echo $userInfo['0']['email']?>
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
										<a href="https://gnomo.fe.up.pt/~lbaw1654/proto/pages/profile/editProfile.php">
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
								<a href="https://gnomo.fe.up.pt/~lbaw1654/proto/pages/project/general/projectCreate.php" type="button" class="btn btn-success btn-sm">Add project</a>
								<a type="button" class="btn btn-success btn-sm">Contact</a>
							</div>
					</div>
					<? if(isset($userInfo['overview']) || isset($userInfo['curriculumVitae'])) : ?>
					<div class="col-md-9">
						<div class="profile-content">
						<? if(isset($userInfo['overview'])) : ?>
						   <h2>
								Biography
							</h2>
							<p class="summary">
							<? echo $userInfo['overview'] ?>
							</p>
							<br>
							<h3>
								Curriculum Vitae
							</h3>
							<a href="#"> </a>
						<? endif; ?>
						</div>
					</div>
					<? endif; ?>
				</div>
			</div>
		</div>
		<!-- FOOTER -->
		<?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>