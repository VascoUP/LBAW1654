<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="img/pageIcon.jpg">

    <title>YM</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
	<link href="css/pages/forms.css" rel="stylesheet">
	<link href="css/pages/search.css" rel="stylesheet">
	<link href="css/templates/navbar.css" rel="stylesheet">
	<link href="css/templates/style.css" rel="stylesheet">
	<link href="css/templates/projectsUsers.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-social.css" rel="stylesheet">
	
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

		
		<div class="container">
			<div class="card card-container">
				<div class="overlay">
					<select id="order" name="order" onchange="getResults()">
						<option value="name ASC">Alphabetical A->Z</option>
						<option value="name DESC">Alphabetical Z->A</option>
					</select>
				</div>
				<div class="table-container">
					<table class="table table-filter">
						<tbody>
							<tr>
								<td>
									<div class="media">
										<div class="media-body">
											<h4 class="title">Lorem Impsum</h4>
											<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="media">
										<div class="media-body">
											<h4 class="title">Lorem</h4>
											<p class="summary">Ut enim ad minim veniam</p>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	
	</body>
	<?php include ('templates/default/footer.php'); ?> 
	
</html>
