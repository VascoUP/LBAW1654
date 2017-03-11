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
		<link href="css/pages/forms.css" rel="stylesheet">
		<link href="css/pages/editProject.css" rel="stylesheet">
		<link href="css/templates/navbar.css" rel="stylesheet">
		<link href="css/templates/navtable.css" rel="stylesheet">
		<link href="css/templates/style.css" rel="stylesheet">
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
						<td><a class="text-style-6" href="#tasks">Tasks</a></td>
						<td><a class="text-style-6" href="#stats">Statistics</a></td>
						<td><a class="text-style-6" href="#forum">Forum</a></td>
						<td class="active"><a class="text-style-6" href="#edit">Edit</a></td>
						<td class="nav-table-fill"></td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="container">
					<div class="project-info-box">
						<p class="text-style-2">Edit project</p>
						<legend></legend>
						
						<div class="project-edit-box">
							<div class="project-edit-box-header">
								<p class="text-style-5">Rename project</p>
							</div>
							<div class="text-edit-box-body">
								<p class="text-style-6">Change the name of the project to a new one</p>
								<div class="col-md-6 col-sm-6 input-group">
									<input type="text" class="form-control" placeholder="ex: PIU">
									<span class="input-group-addon btn btn-primary">Submit</span>
								</div>
							</div> 
						</div>
						
						<legend></legend>
						
						<div class="project-edit-box">
							<div class="project-edit-box-header">
								<p class="text-style-5">Edit overview</p>
							</div>
							<div class="text-edit-box-body">
								<p class="text-style-6">Redo the overview project for either a quick fix or an overall update</p>
								<div class="col-md-7 col-sm-7 input-group">
									<textarea rows="4" cols="50" class="form-control" placeholder="ex: PIU"></textarea>
									<span class="input-group-addon btn btn-primary">Submit</span>
								</div>
							</div> 
						</div>
						
						<legend></legend>
						
						<div class="project-edit-box">
							<div class="project-edit-box-header">
								<p class="text-style-5">Rename project</p>
							</div>
							<div class="buttons-edit-box-body">
								<p class="text-style-6 col-xs-6">Make project public</p>
								<button class="btn btn-secondary style-button col-xs-offset-2" type="button">Go Public</button>
							</div>
							<div class="buttons-edit-box-body">
								<p class="text-style-6 col-xs-6">Delete project</p>
								<button class="btn btn-secondary style-button col-xs-offset-2" type="button">Delete</button>
							</div>
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
	<?php include ('templates/default/footer.php'); ?> 
	
</html>