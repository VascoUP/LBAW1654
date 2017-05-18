<?php /* Smarty version Smarty-3.1.15, created on 2017-05-18 09:09:16
         compiled from "/opt/lbaw/lbaw1654/public_html/protoBruno/templates/general/mainPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104386016259174737efbc08-86011365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d20ce920e2d8d2421060e23e08e3639564c556a' => 
    array (
      0 => '/opt/lbaw/lbaw1654/public_html/protoBruno/templates/general/mainPage.tpl',
      1 => 1495062998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104386016259174737efbc08-86011365',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59174737f19d80_51675152',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59174737f19d80_51675152')) {function content_59174737f19d80_51675152($_smarty_tpl) {?><!-- Header -->
<header>
	<div class="container">
		<div class="intro-text">
			<div class="intro-lead-in">Your Management</div>
			<div class="intro-heading">A free project management website for professional individuals looking for the best way to manage their projects </div>
			<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/users/register.php" class="page-scroll btn btn-xl">Sign Up</a>
			<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/users/login.php" class="page-scroll btn btn-xl">Sign In</a>
		</div>
	</div>
</header>

<!-- About Section -->
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">About</h2>
				<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-4">
				<span class="fa-stack fa-4x">
					<i class="fa fa-circle fa-stack-2x text-primary"></i>
					<i class="fa fa-list-alt fa-stack-1x fa-inverse"></i>
				</span>
				<h4 class="service-heading">Task List</h4>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
			</div>
			<div class="col-md-4">
				<span class="fa-stack fa-4x">
					<i class="fa fa-circle fa-stack-2x text-primary"></i>
					<i class="fa fa-comments fa-stack-1x fa-inverse"></i>
				</span>
				<h4 class="service-heading">Forum</h4>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
			</div>
			<div class="col-md-4">
				<span class="fa-stack fa-4x">
					<i class="fa fa-circle fa-stack-2x text-primary"></i>
					<i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
				</span>
				<h4 class="service-heading">Week Planner</h4>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
			</div>
			<div class="col-md-4">
				<span class="fa-stack fa-4x">
					<i class="fa fa-circle fa-stack-2x text-primary"></i>
					<i class="fa fa-bar-chart fa-stack-1x fa-inverse"></i>
				</span>
				<h4 class="service-heading">Statistics</h4>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
			</div>
		</div>
	</div>
</section>

<!-- Contact Section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Contact Us</h2>
				<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<form name="sentMessage" id="contactForm" method="POST" action="https://gnomo.fe.up.pt/~lbaw1654/final/actions/admin/contactSite.php">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input name="name" type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input name="email" type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input name="tel" type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea name="content" class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message.">
								</textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-lg-12 text-center">
							<div id="success"></div>
							<button type="submit" class="btn btn-xl">Send Message</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

</div>

<!-- jQuery -->
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/templates/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/templates/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

<!-- Contact Form JavaScript -->
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/templates/jqBootstrapValidation.js"></script>

<!-- Theme JavaScript -->
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/templates/agency.min.js"></script><?php }} ?>
