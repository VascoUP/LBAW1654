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
		<link href="css/pages/profile.css" rel="stylesheet">
		<link href="css/templates/projectsUsers.css" rel="stylesheet">
		<link href="css/templates/navbar.css" rel="stylesheet">
		<link href="css/templates/style.css" rel="stylesheet">
		<link href="css/bootstrap/bootstrap-social.css" rel="stylesheet">
	</head>
<!-- NAVBAR
================================================== -->
  	<body>
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
				<ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
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
							<img src="img/loginImage.png" class="img-responsive" alt="">
						</div>
						<!-- END SIDEBAR USERPIC -->
						<!-- SIDEBAR USER TITLE -->
						<div class="profile-usertitle">
							<div class="profile-usertitle-name">
								Marcus Doe
							</div>
							<div class="profile-usertitle-email">
								marcusDoe@gmail.com
							</div>
						</div>

						<!-- END SIDEBAR BUTTONS -->
						<!-- SIDEBAR MENU -->
						<div class="profile-usermenu">
							<ul class="nav">
								<li>
									<a href="#">
									<i class="glyphicon glyphicon-home"></i>
									Overview </a>
								</li>
								<li>
									<a href="#">
									<i class="glyphicon glyphicon-user"></i>
									Account Settings </a>
								</li>
								<li class="active">
									<a href="#" target="_blank">
									<i class="glyphicon glyphicon-ok"></i>
									My Projects </a>
								</li>
								<li>
									<a href="#" target="_blank">
									<i class="glyphicon glyphicon-ok"></i>
									Projects I contributed to </a>
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
						<div class="table-container">
							<table class="table table-filter">
								<tbody>
									<tr>
										<td>
											<div class="media">
												<div class="media-body">
													<h4 class="title">
														Lorem Impsum
													</h4>
													<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
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
	</body>
	
	<footer>
        <div class="container">
            <div class="row">
                <div class="row text-center">
                    <span class="copyright">Copyright &copy; Your Website 2017</span>
                </div>
            </div>
        </div>
    </footer>
	
	<!-- FOOTER -->
	<?php include 'templates/default/footer.php';?>
</html>