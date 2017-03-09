<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="pageIcon.jpg">

		<title>YM</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="css/pages/forms.css" rel="stylesheet">
		<link href="css/templates/navbar.css" rel="stylesheet">
		<link href="css/templates/style.css" rel="stylesheet">
		<link href="css/bootstrap/bootstrap-social.css" rel="stylesheet">
	</head>

	<body>
		<div class="navbar-wrapper">
			<div class="container">
				<nav class="navbar navbar-inverse navbar-static-top">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">YM</a>
						</div>
						<div id="navbar" class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">Home</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#contact">Contact</a></li>
								<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li class="dropdown-header">Nav header</li>
									<li><a href="#">Separated link</a></li>
									<li><a href="#">One more separated link</a></li>
								</ul>
								</li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li>
									<form class="form-inline navbar-form">								
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search...">
											<span class="input-group-addon btn btn-primary">Go!</span>
										</div>
									</form>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#">Profile</a></li>
										<li><a href="#">Projects</a></li>
										<li><a href="#">Edit Profile</a></li>
										<li><a href="#">Logout</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
		
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
	</body>
	
	<!-- FOOTER -->
	<?php include 'templates/default/footer.php';?>
	
</html>
