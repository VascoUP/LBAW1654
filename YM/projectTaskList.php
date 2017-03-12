<!DOCTYPE html>
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
		<link href="css/pages/project.css" rel="stylesheet">
		<link href="css/pages/taskList.css" rel="stylesheet">
		<link href="css/templates/navbar.css" rel="stylesheet">
		<link href="css/templates/navtable.css" rel="stylesheet">
		<link href="css/templates/style.css" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	</head>

	<body>
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
						<td class="active"><a class="text-style-6" href="#tasks">Tasks</a></td>
						<td><a class="text-style-6" href="#stats">Statistics</a></td>
						<td><a class="text-style-6" href="#forum">Forum</a></td>
						<td><a class="text-style-6" href="#edit">Edit</a></td>
						<td class="nav-table-fill"></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="container">
					<div class="project-info-box">
						<p class="text-style-2">Task List</p>
						<p class="text-style-5">This is where you'll find the project tasks for this week.</p>
						<hr class="featurette-divider">
						<div class="table-responsive">
							<table class="task table">
								<thead>
									<tr>
										<th class="task meta line"></th>
										<th>
										<h3>Tasks</h3>
										</th>
										<th class="column state">State</th>
										<th class="column priority">Priority</th>
										<th class="column due date">Due date</th>
										<th class="column workers">Workers</th>
										<th class="column join button"></th>

									</tr>
								</thead>
								<tbody>
									<!-- Tasks -->
									<tr>
										<td class="task entry"><i class="fa fa-question fa-2x text-primary"></i></td>
										<td>
											<h4><a href="#">Add search bar</a><br><small>Searches only users for now</small></h4>
										</td>
										<td class="task-info state">Unassigned</td>
										<td class="task-info priority">High</td>
										<td class="task-info due date">1/5/2017<br><small><i class="fa fa-clock-o"></i> (2 months left) </small></td>
										<td class="task-info workers">0/2</td>
										<td> <button class="join button">Request to join task</button> </td>
									</tr>

									<tr>
										<td class="task entry"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
										<td>
											<h4><a href="#">Set up color schemes</a><br><small></small></h4>
										</td>
										<td class="task-info state">Active</td>
										<td class="task-info priority">Medium</td>
										<td class="task-info due date">28/3/2017<br><small><i class="fa fa-clock-o"></i> (25 days left) </small></td>
										<td class="task-info workers">1/2</td>
										<td> <button class="join button">Request to join task</button> </td>
									</tr>

									<tr>
										<td class="task entry"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
										<td>
											<h4><a href="#">Test login security</a><br><small>Also fix whatever is wrong</small></h4>
										</td>
										<td class="task-info state">Active</td>
										<td class="task-info priority">High</td>
										<td class="task-info due date">10/3/2017<br><small><i class="fa fa-clock-o"></i> (7 days left) </small></td>
										<td class="task-info workers">3/3</td>
										<td class="task-info empty placeholder"></td>
									</tr>

									<tr>
										<td class="task entry"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
										<td>
											<h4><a href="#">Buy coffee</a><br><small>Nespresso </small></h4>
										</td>
										<td class="task-info state">Active</td>
										<td class="task-info priority">High</td>
										<td class="task-info due date">3/3/2017<br><small><i class="fa fa-clock-o"></i> (17 hours left) </small></td>
										<td class="task-info workers">9/10</td>
										<td> <button class="join button">Request to join task</button> </td>
									</tr>

									<tr>
										<td class="task entry"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
										<td>
											<h4><a href="#">Request market studies</a><br><small>About usage in India</small></h4>
										</td>
										<td class="task-info state">Completed</td>
										<td class="task-info priority">Medium</td>
										<td class="task-info due date">14/3/2017<br><small><i class="fa fa-clock-o"></i> (11 days left) </small></td>
										<td class="task-info workers">1/1</td>
										<td class="task-info empty placeholder"></td>
									</tr>

									<tr>
										<td class="task entry"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
										<td>
											<h4><a href="#">Round all button egdes</a><br><small>Perfect circle quarters only </small></h4>
										</td>
										<td class="task-info state">Unassigned</td>
										<td class="task-info priority">Low</td>
										<td class="task-info due date">21/3/2017<br><small><i class="fa fa-clock-o"></i> (18 days left) </small></td>
										<td class="task-info workers">0/1</td>
										<td> <button class="join button">Request to join task</button> </td>
									</tr>

								</tbody>
							</table>
						</div>
						<button class="addTask">Add Task</button>
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
	<?php include ('templates/default/footer.php'); ?> 

</html>
