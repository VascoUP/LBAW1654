{include file="../../templates/common/head.tpl" }


		<!-- Bootstrap core CSS -->
		<link href="{$BASE_URL}css/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="{$BASE_URL}css/templates/navbar.css" rel="stylesheet">
		<link href="{$BASE_URL}css/templates/style.css" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
		<script type="text/javascript" src="{$BASE_URL}javascript/header/dropdownUser.js"></script>
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
						{if $smarty.session.username}
							<a class="navbar-brand page-scroll" href="https://gnomo.fe.up.pt/~lbaw1654/proto/pages/profile/profileUserOverview.php">YM</a>
						{else}
							<a class="navbar-brand page-scroll" href="https://gnomo.fe.up.pt/~lbaw1654/proto/pages/general/mainPage.php">YM</a>
						{/if}
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-left">
							<li class="hidden">
								<a href="#page-top"></a>
							</li>
							<li>
							{if $smarty.session.username}
								<a class="page-scroll" href="https://gnomo.fe.up.pt/~lbaw1654/proto/pages/profile/profileUserOverview.php">Home</a>
							{else}
								<a class="page-scroll" href="https://gnomo.fe.up.pt/~lbaw1654/proto/pages/general/mainPage.php#page-top">Home</a>
							{/if}
							</li>
							{if !$smarty.session.username}
							<li>
								<a class="page-scroll" href="https://gnomo.fe.up.pt/~lbaw1654/proto/pages/general/mainPage.php#about">About</a>
							</li>
							<li>
								<a class="page-scroll" href="https://gnomo.fe.up.pt/~lbaw1654/proto/pages/general/mainPage.php#contact">Contact</a>
							</li>
							{/if}
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
									<li><a href="https://gnomo.fe.up.pt/~lbaw1654/proto/pages/profile/profileUserOverview.php" role="button" id="drop">Profile</a></li>
									<li><a href="https://gnomo.fe.up.pt/~lbaw1654/proto/pages/profile/userProjects.php" role="button" id="drop">Projects</a></li>
									<li><a href="https://gnomo.fe.up.pt/~lbaw1654/proto/pages/profile/editProfile.php" role="button" id="drop">Edit Profile</a></li>
									<li><a href="https://gnomo.fe.up.pt/~lbaw1654/proto/actions/users/logout.php" role="button" id="drop" class="logout">Logout</a></li>
								</ul>
							</li>

						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container-fluid -->
			</nav>

