<?php /* Smarty version Smarty-3.1.15, created on 2017-04-26 18:23:23
         compiled from "/opt/lbaw/lbaw1654/public_html/proto/templates/users/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2632047945900d456dd9bb0-39412287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3ae03710ecfc09c539f035ba31b1d2a32b7c9dc' => 
    array (
      0 => '/opt/lbaw/lbaw1654/public_html/proto/templates/users/register.tpl',
      1 => 1493227122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2632047945900d456dd9bb0-39412287',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5900d45700fb73_71099220',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5900d45700fb73_71099220')) {function content_5900d45700fb73_71099220($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/pages/forms.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap/bootstrap-social.css" rel="stylesheet">
<div class="container">
    <div class="card card-container">
            <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" method="post">
                <fieldset>
                <!-- Form Name -->
                    <legend>Register</legend>

                    <div class="form-group">
                        <label class="col-md-4 control-label" ></label>  
                        <div class="col-md-4">
                            <a class="btn btn-block btn-social btn-linkedin">
                                <i class="fa fa-linkedin"></i> Use LinkedIn credentials
                            </a>
                        </div>
                    </div>

                <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="username">Username</label>  
                        <div class="col-md-4">
                            <div class="col-md-4">
                                <input id="username" name="username" type="text" placeholder="Username" class="form-control form-style input-md" required autofocus>
                            </div>
                        </div>
                    </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Email Address</label>  
                    <div class="col-md-4">
                        <div class="col-md-4">
                            <input id="email" name="email" type="text" placeholder="Email Address" class="form-control form-style input-md" required autofocus>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-4 control-label">Password</label>
                    <div class="col-md-4">
                        <div class="col-md-4">
                            <input type="password" class="form-control form-style input-md" name="password" id="password"  placeholder="Enter your Password" required autofocus/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirm" class="col-md-4 control-label">Confirm Password</label>
                    <div class="col-md-4">
                        <div class="col-md-4">
                            <input type="password" class="form-control form-style input-md" name="confirm" id="confirm"  placeholder="Confirm your Password" required autofocus/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" ></label>  
                    <div class="col-md-4">
                        <button id="create" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Register</a>
                    </div>
                </div>

                </fieldset>
            </form>
    </div>
</div>
</div><?php }} ?>
