<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		
		<link rel="icon" href="img/pageIcon.jpg">

		<title>YM</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="css/pages/login.css" rel="stylesheet">
		<link href="css/templates/navbar.css" rel="stylesheet">
		<link href="css/templates/style.css" rel="stylesheet">
		<link href="css/bootstrap/bootstrap-social.css" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

		<script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/recovery.js"></script>
	</head>
	<!-- NAVBAR
	================================================== -->
	<body>
		<div class="wrapper">
			<!-- Navigation -->
			<nav id="mainNav" class="navbar navbar-default navbar-custom n">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
						</button>
						<a class="navbar-brand page-scroll" href="#page-top">YM</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-left">
							<li class="hidden">
								<a href="#page-top"></a>
							</li>
							<li>
								<a class="page-scroll" href="#home">Home</a>
							</li>
							<li>
								<a class="page-scroll" href="#about">About</a>
							</li>
							<li>
								<a class="page-scroll" href="#contact">Contact</a>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-center">
							<li class="hidden">
								<a href="#page-top"></a>
							</li>
							<li>
								<form class="form-inline navbar-form">								
									<div class="input-group">
										<input type="text" class="form-control search" placeholder="Search...">
									</div>
								</form>
							</li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container-fluid -->
			</nav>

			<div class="container">
				<div class="card card-container">
				<div id="form-login">
					<img id="profile-img" class="profile-img-card" src="img/loginImage.png" />
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
		<?php include ('templates/default/footer.php'); ?>
		
		<script src="js/recovery.js"></script>
	</body>
</html>