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
		
		<div class="container">
			<div class="card card-container">
					<form class="form-horizontal">
						<fieldset>
						<!-- Form Name -->
							<legend>Edit Task</legend>

						<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="TaskName">Identification</label>  
								<div class="col-md-4">
									<input id="TaskName" name="TaskName" type="text" placeholder="TaskName" class="form-control form-style input-md">
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-4 control-label" for="Priority">Priority</label>  
								<div class="col-md-4">
									<input id="Priority" name="Priority" type="text" placeholder="Priority" class="form-control form-style input-md">
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-4 control-label" for="DueDate">Due Date</label>  
								<div class="col-md-4">
									<input type="date" value="2017-03-07" id="DueDate" name="DueDate" class="form-control form-style input-md">
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-4 control-label" for="Status">Status</label> 
								<div class="col-md-4">
									<select name="status" class="form-control form-style input-md" required>
										<option value="active">Active</option>
										<option value="unassgined">Unassigned</option>
										<option value="completed">Completed</option>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-4 control-label" for="Collaborators">Add Collaborators</label> 
								<div class="col-md-4">								
									<div id="imaginary_container"> 
										<div class="input-group stylish-input-group">
											<input type="text" class="form-control form-style"  placeholder="Search" >
											<span class="input-group-addon">
												<button type="submit">
													<span class="glyphicon glyphicon-search"></span>
												</button>  
											</span>
										</div>
									</div>
								</div>
							</div>
							
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="Description">Description (max 100 words)</label>
							<div class="col-md-4">                    
								<textarea class="form-control form-style" rows="5" cols="30"  id="Description" name="Description">Description</textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label" ></label>  
							<div class="col-md-4">
								<a href="#" id="addTask" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Edit Task</a>
							</div>
						</div>

						</fieldset>
					</form>
			
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
