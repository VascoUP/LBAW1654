<?php /* Smarty version Smarty-3.1.15, created on 2017-05-14 05:11:15
         compiled from "/opt/lbaw/lbaw1654/public_html/protoBruno/templates/users/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14273209755917577c8df7b7-88530761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7648dcfcc635e25e5744be537ee70afa23798c60' => 
    array (
      0 => '/opt/lbaw/lbaw1654/public_html/protoBruno/templates/users/register.tpl',
      1 => 1494734601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14273209755917577c8df7b7-88530761',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5917577c8f5303_44348301',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5917577c8f5303_44348301')) {function content_5917577c8f5303_44348301($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
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

                <p id="erroUser"> MENSAGEM QUE FUNCIONOU <p>
                </fieldset>
            </form>
    </div>
</div>
</div><?php }} ?>
