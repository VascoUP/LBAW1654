<?php /* Smarty version Smarty-3.1.15, created on 2017-05-16 00:12:41
         compiled from "/opt/lbaw/lbaw1654/public_html/protoBruno/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1721715615917ce6c016a05-26459325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53b99e5f083f4ce35594f51b79cd833a4c9e845c' => 
    array (
      0 => '/opt/lbaw/lbaw1654/public_html/protoBruno/templates/common/header.tpl',
      1 => 1494889691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1721715615917ce6c016a05-26459325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5917ce6c2178f2_55389586',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'smartyProjInvites' => 0,
    'index' => 0,
    'smartyUsrInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5917ce6c2178f2_55389586')) {function content_5917ce6c2178f2_55389586($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../templates/common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



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
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/header/notifications.js"></script>
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
							<a class="navbar-brand page-scroll" href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php">YM</a>
						<?php } else { ?>
							<a class="navbar-brand page-scroll" href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php">YM</a>
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
								<a class="page-scroll" href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php">Home</a>
							<?php } else { ?>
								<a class="page-scroll" href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php#page-top">Home</a>
							<?php }?>
							</li>
							<?php if (!$_SESSION['username']) {?>
							<li>
								<a class="page-scroll" href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php#about">About</a>
							</li>
							<li>
								<a class="page-scroll" href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/mainPage.php#contact">Contact</a>
							</li>
							<?php }?>
						</ul>
						<ul class="nav navbar-nav navbar-center">
							<li class="hidden">
								<a href="#page-top"></a>
							</li>
							<li>
								<form class="form-inline navbar-form" method="POST" action="https://gnomo.fe.up.pt/~lbaw1654/final/actions/general/search.php">								
									<div class="input-group">
										<input name="search" type="text" class="form-control search" placeholder="Search...">
									</div>
								</form>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="hidden">
								<a href="#page-top"></a>
							</li>
							<li>
								<img class="dropdown-notifications" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/notificationBell.png">
									<ul id="notification" class="dropdown-menu">
									<li>New notifications (<span id="nNotifications"><?php echo count($_smarty_tpl->tpl_vars['smartyProjInvites']->value);?>
</span>)</li>
										<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['index']->step = 1;$_smarty_tpl->tpl_vars['index']->total = (int) ceil(($_smarty_tpl->tpl_vars['index']->step > 0 ? (count($_smarty_tpl->tpl_vars['smartyProjInvites']->value)-1)+1 - (0) : 0-((count($_smarty_tpl->tpl_vars['smartyProjInvites']->value)-1))+1)/abs($_smarty_tpl->tpl_vars['index']->step));
if ($_smarty_tpl->tpl_vars['index']->total > 0) {
for ($_smarty_tpl->tpl_vars['index']->value = 0, $_smarty_tpl->tpl_vars['index']->iteration = 1;$_smarty_tpl->tpl_vars['index']->iteration <= $_smarty_tpl->tpl_vars['index']->total;$_smarty_tpl->tpl_vars['index']->value += $_smarty_tpl->tpl_vars['index']->step, $_smarty_tpl->tpl_vars['index']->iteration++) {
$_smarty_tpl->tpl_vars['index']->first = $_smarty_tpl->tpl_vars['index']->iteration == 1;$_smarty_tpl->tpl_vars['index']->last = $_smarty_tpl->tpl_vars['index']->iteration == $_smarty_tpl->tpl_vars['index']->total;?>
											<?php $_smarty_tpl->tpl_vars["smartyProjInvite"] = new Smarty_variable($_smarty_tpl->tpl_vars['smartyProjInvites']->value[$_smarty_tpl->tpl_vars['index']->value], null, 0);?>
											<li>
												<?php echo $_smarty_tpl->getSubTemplate ("../../templates/common/projectInvite.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

											</li>
										<?php }} ?>
									</ul>
								</img>
							</li>
							<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User<span class="caret"></span></a>
								<ul id="menu" class="dropdown-menu">
									<li><a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php" role="button" id="drop">Profile</a></li>
									<li><a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/userProjects.php?userInfo=<?php echo $_smarty_tpl->tpl_vars['smartyUsrInfo']->value['0']['userid'];?>
" role="button" id="drop">Projects</a></li>
									<li><a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/editProfile.php" role="button" id="drop">Edit Profile</a></li>
									<li><a href="https://gnomo.fe.up.pt/~lbaw1654/final/actions/users/logout.php" role="button" id="drop" class="logout">Logout</a></li>
								</ul>
							</li>

						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container-fluid -->
			</nav>

<?php }} ?>
