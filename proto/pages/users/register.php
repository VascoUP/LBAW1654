<?php 
	include_once('../../config/init.php');
	$smarty->assign('style', 'css/pages/forms.css');
	
	$smarty->display($BASE_DIR .'templates/common/headerLoginRegister.tpl'); 
?>

			<div class="container">
				<div class="card card-container">
						<form class="form-horizontal">
							<fieldset>
							<!-- Form Name -->
								<legend>Register</legend>

								<div class="form-group">
									<label class="col-md-4 control-label" ></label>  
									<div class="col-md-4">
										<a class="btn btn-block btn-social btn-linkedin">
											<i class="fa fa-linkedin"></i> Use LinkedIn credentials
										</a>
									</div>
								</div>

							<!-- Text input-->
								<div class="form-group">
									<label class="col-md-4 control-label" for="Username">Username</label>  
									<div class="col-md-4">
										<div class="col-md-4">
											<input id="Username" name="Username" type="text" placeholder="Username" class="form-control form-style input-md">
										</div>
									</div>
								</div>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="Email Address">Email Address</label>  
								<div class="col-md-4">
									<div class="col-md-4">
										<input id="Email Address" name="Email Address" type="text" placeholder="Email Address" class="form-control form-style input-md">
									</div>
								</div>
							</div>

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
									<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Register</a>
									<a href="#" class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Clear</a>
								</div>
							</div>

							</fieldset>
						</form>
				</div>
			</div>
		</div>
		<!-- FOOTER -->
		<?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>
