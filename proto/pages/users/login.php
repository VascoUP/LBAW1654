<?php 
	include_once('../../config/init.php');
	
	$smarty->display($BASE_DIR .'templates/common/headerLoginRegister.tpl'); 
?>
		<link href="../../css/pages/login.css" rel="stylesheet">
		<script src="../../javascript/recovery.js"></script>

			<div class="container">
				<div class="card card-container">
				<div id="form-login">
					<img id="profile-img" class="profile-img-card" src="../../images/assets/loginImage.png" />
					<p id="profile-name" class="profile-name-card"></p>
					<form class="form-signin" action="../../actions/users/login.php" method="post">
						<input type="text" id="username" name="username" class="form-control form-style" placeholder="Username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" required autofocus>
						<input type="password" id="password" name="password" class="form-control form-style" placeholder="Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" required autofocus>
						<div id="remember" class="checkbox">
							<label>
								<input id="remember" type="checkbox" value="remember" name="remember" <?php if(isset($_COOKIE["username"])) { ?> checked <?php } ?>> Remember me
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
						<form accept-charset="UTF-8" role="form" id="login-recordar" action="../../actions/users/recoverPassword.php" method="post">
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