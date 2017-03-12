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
		<link href="css/pages/forms.css" rel="stylesheet">
		<link href="css/templates/navbar.css" rel="stylesheet">
		<link href="css/templates/style.css" rel="stylesheet">
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
				<form class="form-horizontal">
					<fieldset>
						<!-- Form Name -->
						<legend>Edit Profile</legend>

						<div class="form-group">
								<label class="col-md-4 control-label" ></label>  
								<div class="col-md-4">
									<a class="btn btn-block btn-social btn-linkedin">
										<i class="fa fa-linkedin"></i> Link to Linkedin
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

						<!-- File Button --> 
						<div class="form-group">
							<label class="col-md-4 control-label" for="Upload photo">Upload photo</label>
							<div class="col-md-4">   
								<div class="col-md-4">
									<input id="Upload photo" name="Upload photo" class="input-file" type="file" accept=".png, .jpg, .jpeg">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" for="Upload cv">Upload Curriculum Vitae</label>
							<div class="col-md-4">
								<div class="col-md-4">   
									<input id="Upload cv" name="Upload cv" class="input-file" type="file" accept=".pdf">
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

						<!-- Textarea -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="Overview">Overview (max 200 words)</label>
							<div class="col-md-4">   
								<div class="col-md-4">                     
									<textarea class="form-control form-style" rows="5" cols="30"  id="Overview" name="Overview">Overview</textarea>
								</div>
							</div>
						</div>						
						<div class="form-group">
							<label class="col-md-4 control-label" ></label>  
							<div class="col-md-4">
								<a href="#" id="update" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Update</a>
							</div>
						</div>

					</fieldset>
				</form>
			</div>
		</div>
	</body>
	
	<footer>
		<span class="copyright">Copyright &copy; Your Website 2017</span>
    </footer>
	
	
	<!-- FOOTER -->
	<?php include ('templates/default/footer.php'); ?> 
</html>
