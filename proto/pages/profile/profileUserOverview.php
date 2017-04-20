<?php 
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/userInformation.php'); 
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl'); 
	
	$userInfo = getUserInformation($_SESSION['username']);
?>
		<link href="../../css/pages/profile.css" rel="stylesheet">
		<link href="../../css/pages/login.css" rel="stylesheet">
		<link href="../../css/bootstrap/bootstrap-social.css" rel="stylesheet">
		
			<div class="container">
			<? if(!$userInfo['0']['description'] && !$userInfo['0']['curriculumVitae']) : ?>
				<div class="card card-container">
					<div id="form-login">
			<? else : ?>	
				<div class="row profile">
					<div class="col-md-3">
			<? endif; ?>
						<div class="profile-sidebar">
							<!-- SIDEBAR USERPIC -->
							<div class="profile-userpic">
								<? if($userInfo['0']['photo']) : ?>
								<img src="../../images/assets/<?echo $userInfo['0']['photo']?> " class="img-responsive" alt="">
								<? else : ?>
								<img src="../../images/assets/loginImage.png" class="img-responsive" alt="">
								<? endif; ?>
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
										My Projects</a>
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
					<? if(!empty($userInfo['0']['description']) || !empty($userInfo['0']['curriculumVitae'])) : ?>
					<div class="col-md-9">
						<div id="profile-content" class="profile-content">
						<? if(!empty($userInfo['0']['description'])) : ?>
						   <h2>
								Biography
							</h2>
							<p class="summary">
							<? echo $userInfo['0']['description'] ?>
							</p>
						<? endif; ?>
							<br>
						<? if(!empty($userInfo['0']['curriculumVitae'])) : ?>
							<h3>
								Curriculum Vitae
							</h3>
							<a href="#"><? echo $userInfo['0']['curriculumVitae'] ?></a>
						<? endif; ?>
						</div>
					</div>
					<? endif; ?>
			</div>
		</div>
		<!-- FOOTER -->
		<?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>