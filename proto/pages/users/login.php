<?php 
	include_once('../../config/init.php');
	$smarty->assign('style', 'css/pages/login.css');
	
	$smarty->display($BASE_DIR .'templates/common/headerLoginRegister.tpl'); 
?>
	
		<script src="../../javascript/recovery.js"></script>

			<div class="container">
				<div class="card card-container">
				<div id="form-login">
					<img id="profile-img" class="profile-img-card" src="../../images/assets/loginImage.png" />
					<p id="profile-name" class="profile-name-card"></p>
					<form class="form-signin">
						<span id="reauth-email" class="reauth-email"></span>
						<input type="email" id="inputEmail" class="form-control form-style" placeholder="Email address" required autofocus>
						<input type="password" id="inputPassword" class="form-control form-style" placeholder="Password" required>
						<div id="remember" class="checkbox">
							<label>
								<input type="checkbox" value="remember-me"> Remember me
							</label>
						</div>
						<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
						<a class="btn btn-block btn-social btn-linkedin">
							<i class="fa fa-linkedin"></i> Sign in with LinkedIn
						</a>
					</form>
					<a href="#" class="forgot-password">
						Forgot the password?
					</a>
					</div>
					<div id="form-olvidado">
						<h4 class="">
						  Forgot the password?
						</h4>
						<form accept-charset="UTF-8" role="form" id="login-recordar" method="post">
						  <fieldset>
							<span class="help-block">
							  <p>Email address you use to log in to your account</p>
							  <p>We'll send you an email with instructions to choose a new password.</p>
							</span>
							<div class="form-group input-group">
							  <span class="input-group-addon">
								@
							  </span>
							  <input class="form-control" placeholder="Email" name="email" type="email" required="">
							</div>
							<button type="submit" class="btn btn-primary btn-block" id="btn-olvidado">
							  Continue
							</button>
							<p class="help-block">
							  <a class="text-muted" href="#" id="acceso"><small>Account Access</small></a>
							</p>
						  </fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- FOOTER -->
		<?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>