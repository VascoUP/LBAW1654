<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../images/assets/pageIcon.jpg">

		<title>YM</title>

		<!-- Bootstrap core CSS -->
		<link href="../../css/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="../../css/pages/profile.css" rel="stylesheet">
		<link href="../../css/templates/navbar.css" rel="stylesheet">
		<link href="../../css/templates/projectsUsers.css" rel="stylesheet">
		<link href="../../css/templates/style.css" rel="stylesheet">
		<link href="../../css/bootstrap/bootstrap-social.css" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

		<script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
		<script type="text/javascript" src="../../javascript/dropdownUser.js"></script>
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
						<ul class="nav navbar-nav navbar-right">
							<li class="hidden">
								<a href="#page-top"></a>
							</li>
							<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a id="drop">Profile</a></li>
									<li><a id="drop">Projects</a></li>
									<li><a id="drop">Edit Profile</a></li>
									<li><a id="drop">Logout</a></li>
								</ul>
							</li>

						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container-fluid -->
			</nav>

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
									<li>
										<a href="#" target="_blank">
										<i class="glyphicon glyphicon-ok"></i>
										Site projects </a>
									</li>
									<li class="active">
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
											<tr data-status="active">
												<td>
													<div class="media">
														<div class="media-body">
															<h4 class="title2">
																aeFi321
																<span class="pull-right active">(Active)</span>
															</h4>
														</div>
														<a href="#" class="pull-left">
															<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
														</a>
													</div>
												</td>
											</tr>
											<tr data-status="active">
												<td>
													<div class="media">
														<div class="media-body">
															<h4 class="title2">
																Marcus Doe
																<span class="pull-right banned">(Banned)</span>
															</h4>
														</div>
														<a href="#" class="pull-left">
															<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
														</a>
														
														<div class="col-md-4">
															<a href="#" id="update" class="btn btn-danger"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Remove the ban status</a>
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
		<?php include ('../../templates_c/default/footer.php'); ?>
	</body>
</html>