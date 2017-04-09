<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../images/assets/pageIcon.jpg">

		<title>YM</title>

		<!-- Bootstrap Core CSS -->
		<link href="../../css/bootstrap/bootstrap.min.css" rel="stylesheet">

		<!-- Theme CSS -->
		<link href="../../css/pages/forms.css" rel="stylesheet">
		<link href="../../css/pages/taskList.css" rel="stylesheet">
		<link href="../../css/pages/search.css" rel="stylesheet">
		<link href="../../css/templates/navbar.css" rel="stylesheet">
		<link href="../../css/templates/style.css" rel="stylesheet">
		<link href="../../css/templates/projectsUsers.css" rel="stylesheet">
		<link href="../../css/bootstrap/bootstrap-social.css" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

		<script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
		<script type="text/javascript" src="../../javascript/dropdownUser.js"></script>
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

			<div class="container">
				<div class="card card-container">
					<div class="table-container">
						<div class="info-box">
							<div class="info-box">
							<p class="text-style-3">Add search bar</p>
							<p class="text-style-5">Searches only users for now.</p>
							<hr class="featurette-divider">
							<div class="table-responsive">
								<table class="task table">
									<thead>
										<tr>
											<th class="column state">State</th>
											<th class="column priority">Priority</th>
											<th class="column effort">Effort</th>
											<th class="column dueDate">Due Date</th>
											<th class="column workers">Workers</th>
											<th class="column join button"></th>

										</tr>
									</thead>
									<tbody>
										<!-- Tasks -->
										<tr>
											<td class="task-info state">Unassigned</td>
											<td class="task-info priority">High</td>
											<td class="task-info effort">10</td>
											<td class="task-info dueDate">23-04-2017</td>
											<td class="task-info workers">0/2</td>
										</tr>


									</tbody>
								</table>
							</div>
							<div class="task-userbuttons">
								<button type="button" class="btn btn-success btn-sm">Request to join task</button>
								<button type="button" class="btn btn-warning btn-sm">Edit Task</button>
							</div>
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