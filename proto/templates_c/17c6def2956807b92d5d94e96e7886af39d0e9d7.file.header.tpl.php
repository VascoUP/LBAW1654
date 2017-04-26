<?php /* Smarty version Smarty-3.1.15, created on 2017-04-26 18:18:45
         compiled from "/opt/lbaw/lbaw1654/public_html/proto/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91416728158f258ac37fd07-36169235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17c6def2956807b92d5d94e96e7886af39d0e9d7' => 
    array (
      0 => '/opt/lbaw/lbaw1654/public_html/proto/templates/common/header.tpl',
      1 => 1493227111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91416728158f258ac37fd07-36169235',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f258ac4f9708_01554211',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f258ac4f9708_01554211')) {function content_58f258ac4f9708_01554211($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../templates/common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



		<!-- Bootstrap core CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/templates/navbar.css" rel="stylesheet">
		<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/templates/style.css" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/header/dropdownUser.js"></script>
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
						<?php if ($_SESSION['username']) {?>
							<a class="navbar-brand page-scroll" href="https://gnomo.fe.up.pt/~lbaw1654/proto/pages/profile/profileUserOverview.php">YM</a>
						<?php } else { ?>
							<a class="navbar-brand page-scroll" href="https://gnomo.fe.up.pt/~lbaw1654/proto/pages/general/mainPage.php">YM</a>
						<?php }?>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-left">
							<li class="hidden">
								<a href="#page-top"></a>
							</li>
							<li>
							<?php if ($_SESSION['username']) {?>
								<a class="page-scroll" href="https://gnomo.fe.up.pt/~lbaw1654/proto/pages/profile/profileUserOverview.php">Home</a>
							<?php } else { ?>
								<a class="page-scroll" href="https://gnomo.fe.up.pt/~lbaw1654/proto/pages/general/mainPage.php#page-top">Home</a>
							<?php }?>
							</li>
							<?php if (!$_SESSION['username']) {?>
							<li>
								<a class="page-scroll" href="https://gnomo.fe.up.pt/~lbaw1654/proto/pages/general/mainPage.php#about">About</a>
							</li>
							<li>
								<a class="page-scroll" href="https://gnomo.fe.up.pt/~lbaw1654/proto/pages/general/mainPage.php#contact">Contact</a>
							</li>
							<?php }?>
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

<?php }} ?>
