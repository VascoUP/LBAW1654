<?php /* Smarty version Smarty-3.1.15, created on 2017-05-14 04:26:26
         compiled from "/opt/lbaw/lbaw1654/public_html/protoBruno/templates/users/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20312715485917ce62663284-23324752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd756ae3997a0ec5ce8871fe11ad19ca3774aab0' => 
    array (
      0 => '/opt/lbaw/lbaw1654/public_html/protoBruno/templates/users/login.tpl',
      1 => 1494623862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20312715485917ce62663284-23324752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'smartyUsername' => 0,
    'smartyCkeck' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5917ce62827e45_12136154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5917ce62827e45_12136154')) {function content_5917ce62827e45_12136154($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/pages/login.css" rel="stylesheet">

<div class="container">
    <div class="card card-container">
        <div id="form-login">
            <img id="profile-img" class="profile-img-card" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/loginImage.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
                <input type="text" id="username" 
                        name="username" class="form-control form-style"
                        placeholder="Username" 
                        <?php if (isset($_smarty_tpl->tpl_vars['smartyUsername']->value)) {?>
                          value = <?php echo $_smarty_tpl->tpl_vars['smartyUsername']->value;?>

                        <?php }?>
                        required>
                <input type="password" id="password" 
                        name="password" class="form-control form-style" 
                        placeholder="Password" 
                        required>
                <div id="remember" class="checkbox">
                    <label>
                      <input id="remember" type="checkbox" 
                              value="remember" name="remember" <?php if (isset($_smarty_tpl->tpl_vars['smartyCkeck']->value)) {?><?php echo $_smarty_tpl->tpl_vars['smartyCkeck']->value;?>
<?php }?>>Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                <a class="btn btn-block btn-social btn-linkedin">
                    <i class="fa fa-linkedin"></i> Sign in with LinkedIn
                </a>
            </form>
            <a href="#" class="forgot-password">
              Forgot the password?
            </a>
        </div>
        <div id="form-olvidado">
            <h4 class="">
                Forgot the password?
            </h4>
            <form accept-charset="UTF-8" role="form" id="login-recordar" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/sendEmail.php" method="post">
                <fieldset>
                    <span class="help-block">
                      <p>Email address you use to log in to your account</p>
                      <p>We'll send you an email with instructions to choose a new password.</p>
                    </span>
                    <div class="form-group input-group">
                        <span class="input-group-addon">@</span>
                        <input class="form-control" placeholder="Email" name="email" type="email" required="">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" id="btn-olvidado">
                      Continue
                    </button>
                    <p class="help-block">
                        <a class="text-muted" href="#" id="acceso"><small>Account Access</small></a>
                    </p>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</div><?php }} ?>
