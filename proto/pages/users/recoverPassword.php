<?php 
	include_once('../../config/init.php');
	
	$smarty->display($BASE_DIR .'templates/common/headerLoginRegister.tpl'); 
?>
		<link href="../../css/pages/forms.css" rel="stylesheet">
		<link href="../../css/bootstrap/bootstrap-social.css" rel="stylesheet">
		
			<div class="container">
				<div class="card card-container">
					<form class="form-horizontal" action="../../actions/users/recoverPassword.php" method="post">
						<fieldset>
							<!-- Form Name -->
							<legend>Change Password</legend>

							<div class="form-group">
								<label for="password" class="col-md-4 control-label">Password</label>
								<div class="col-md-4">
									<div class="col-md-4">
										<input type="password" class="form-control form-style input-md" name="password" id="password"  placeholder="Enter your Password"/>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="confirm" class="col-md-4 control-label">Confirm Password</label>
								<div class="col-md-4">
									<div class="col-md-4">
										<input type="password" class="form-control form-style input-md" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
									</div>
								</div>
							</div>						
							<div class="form-group">
								<label class="col-md-4 control-label" ></label>  
								<div class="col-md-4">
									<a href="#" id="update" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Update Password</a>
								</div>
							</div>

						</fieldset>
					</form>
				</div>
			</div>

		</div>
		<!-- FOOTER -->
		<?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>
