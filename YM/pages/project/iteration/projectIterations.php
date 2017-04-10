<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../../images/pageIcon.jpg">

		<title>YM</title>

			<!-- Bootstrap core CSS -->
		<link href="../../../css/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="../../../css/pages/project.css" rel="stylesheet">
		<link href="../../../css/pages/taskList.css" rel="stylesheet">
		<link href="../../../css/templates/navbar.css" rel="stylesheet">
		<link href="../../../css/templates/navtable.css" rel="stylesheet">
		<link href="../../../css/templates/style.css" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
		<script type="text/javascript" src="../../../javascript/dropdownUser.js"></script>
	</head>

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
			<div class="navbar-spacing"></div>
			<div class="page-spacing"></div>

			<!--	PROJECT NAME AND OTHER IMPORTANT INFOS
			======================================================= -->
			<div class="container">
				<div class="row">
					<div class="container">
						<p class="text-style-1 col-md-6 col-xs-6">Project Name</p>
						<div class="col-xs-offset-10">
							<div class="table-responsive info-responsive">
								<table class="info col-xs-12" cellspacing="0">
									<tr>
										<th class="text-style-6 info-type col-xs-8">Users</th>
										<th class="text-style-6 col-xs-4">1</th>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="page-spacing"></div>

			<!--	PROJECT PAGE SELECTOR
			============================================ -->
			<div class="container">
				<div class="table-responsive nav-table-scroll">
					<table class="nav-table">
						<tr class="col-xs-12">
							<td><a class="text-style-6" href="#overview">Overview</a></td>
							<td class="active"><a class="text-style-6" href="#tasks">Iterations</a></td>
							<td><a class="text-style-6" href="#stats">Statistics</a></td>
							<td><a class="text-style-6" href="#forum">Forum</a></td>
							<td><a class="text-style-6" href="#edit">Edit</a></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="container">
						<div class="project-info-box">
							<p class="text-style-2">Iterations</p>
							<p class="text-style-5">This is where you'll find the project iterations</p>
							<hr class="featurette-divider">

							<div class="table-responsive">
								<table class="table iteration table-striped">
									<thead>
										<tr>
											<th class="hidden-xs cell-stat"></th>
											<th>
												<h3>Iterations</h3>
											</th>
											<th class="cell-stat text-center hidden-xs hidden-sm">Number of tasks</th>
											<th class="cell-stat text-center hidden-xs hidden-sm">Start date</th>
											<th class="cell-stat text-center hidden-xs hidden-sm">Due date</th>
											<th class="column join button"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="hidden-xs text-center"><i class="fa fa-question fa-2x text-primary"></i></td>
											<td>
												<h4><a href="#">Iteration 1</a></h4>
											</td>
											<td class="text-center hidden-xs hidden-sm"><a href="#">2</a></td>
											<td class="text-center hidden-xs hidden-sm"><a href="#">03-04-2017</a></td>
											<td class="text-center hidden-xs hidden-sm"><a href="#">10-04-2017</a></td>
											<td> <button class="join button">Edit Iteration</button> </td>
										</tr>
										<tr>
											<td class="hidden-xs text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
											<td>
												<h4><a href="#">Iteration 2</a></h4>
											</td>
											<td class="text-center hidden-xs hidden-sm"><a href="#">1</a></td>
											<td class="text-center hidden-xs hidden-sm"><a href="#">11-04-2017</a></td>
											<td class="text-center hidden-xs hidden-sm"><a href="#">18-04-2017</a></td>
											<td> <button class="join button">Edit Iteration</button> </td>
										</tr>
									</tbody>
								</table>
							</div>
								<button class="addIteration">Add Iteration</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- FOOTER -->
		<?php include ('../../../templates_c/default/footer.php'); ?>
    </body>
</html>
