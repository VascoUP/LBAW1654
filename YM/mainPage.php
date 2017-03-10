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
		<link href="css/pages/mainPage.css" rel="stylesheet">
		<link href="css/templates/navbar.css" rel="stylesheet">

	</head>
<!-- NAVBAR
================================================== -->
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


		<!-- Carousel
		================================================== -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>Your Management</h1>
							<p>A free project management website tailored for professional individuals looking for the best way to manage their projects</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Login</a></p>
						</div>
					</div> 
				</div>
				<div class="item">
					<img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>"Best project manage out there!"</h1>
							<p>Sofia Maya says, "This is the best thing that ever happened to my company! After 2 months using this tool our project development has increased by 200% in productivity."</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
						</div>
					</div>
				</div>
				<div class="item">
					<img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>One more for good measure.</h1>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div><!-- /.carousel -->


		<!-- Featurettes
		================================================== -->

		<div class="container marketing">

			<!-- START THE FEATURETTES -->
			<div class="row featurette">
				<div class="col-md-7">
					<h2 class="featurette-heading">Task list. <span class="text-muted">Highly customizable, iteration oriented. </span></h2>
					<p class="lead">We offer an advanced task list system that easily let's you, and your co-workers, know what to do next. </p>
					<p><a class="btn btn-default" href="#" role="button">Find out more »</a></p>
				</div>
				<div class="col-md-5">
					<img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
				</div>
			</div>

     		<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-7 col-md-push-5">
					<h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
					<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
				</div>
				<div class="col-md-5 col-md-pull-7">
					<img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
				</div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-7">
					<h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
					<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
				</div>
				<div class="col-md-5">
					<img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
				</div>
			</div>

			<hr class="featurette-divider">

     		<!-- /END THE FEATURETTES -->

			<!-- Contacts -->
			<div class="row">
				<h2 class="col-md-6 col-xs-12 contact-title text-center-xs">Contact us</h2>
				<div class="container contact-wrapper col-md-6 col-md-offset-0 col-xs-6 col-xs-offset-3">
					<div class="row contact-elem">
						<div class="col-md-2 col-xs-4">
							<p class="lead">Email:</p>
						</div>
						<div class="col-md-8  col-xs-6">
							<p class="lead">exemplo@exemplo.com</p>
						</div>
					</div>
					<div class="row contact-elem">
						<div class="col-md-2 col-xs-4">
							<p class="lead">Tlmv:</p>
						</div>
						<div class="col-md-8 col-xs-6">
							<p class="lead">999999999</p>
						</div>
					</div>
				</div>
				<hr class="featurette-divider">
			</div>
		</div>


		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</body>
	
    <!-- FOOTER -->
	<?php include 'templates/default/footer.php';?>
</html>
