<?php /* Smarty version Smarty-3.1.15, created on 2017-04-16 21:45:51
         compiled from "/opt/lbaw/lbaw1654/public_html/proto/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91416728158f258ac37fd07-36169235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17c6def2956807b92d5d94e96e7886af39d0e9d7' => 
    array (
      0 => '/opt/lbaw/lbaw1654/public_html/proto/templates/common/header.tpl',
      1 => 1492375409,
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
    'style' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f258ac4f9708_01554211')) {function content_58f258ac4f9708_01554211($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/pageIcon.jpg">

		<title>YM</title>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/templates/navbar.css" rel="stylesheet">
		<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/templates/style.css" rel="stylesheet">
		<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap/bootstrap-social.css" rel="stylesheet">
		<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
" rel="stylesheet">
		
		<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/dropdownUser.js"></script>
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

<?php }} ?>
