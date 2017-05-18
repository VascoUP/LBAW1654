<?php /* Smarty version Smarty-3.1.15, created on 2017-05-17 23:41:38
         compiled from "/opt/lbaw/lbaw1654/public_html/protoBruno/templates/users/recoverPassword.tpl" */ ?>
<?php /*%%SmartyHeaderCode:573691664591cd1a229b7c4-75655868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7de51efdcdc5c3bd0b3446c014ce8c2e7fd02d2e' => 
    array (
      0 => '/opt/lbaw/lbaw1654/public_html/protoBruno/templates/users/recoverPassword.tpl',
      1 => 1495058681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '573691664591cd1a229b7c4-75655868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_591cd1a2405359_05686764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591cd1a2405359_05686764')) {function content_591cd1a2405359_05686764($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/pages/forms.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap/bootstrap-social.css" rel="stylesheet">

<div class="container">
    <div class="card card-container">
        <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/recoverPassword.php" method="post">
            <fieldset>
                <!-- Form Name -->
                <legend>Change Password</legend>

				<div class="form-group">
                    <label for="password" class="col-md-4 control-label">Password</label>
                    <div class="col-md-4">
                        <div class="col-md-4">
                            <input type="email" class="form-control form-style input-md" name="email" id="email"  placeholder="Email"/>
                        </div>
                    </div>
                </div>
				
                <div class="form-group">
                    <label for="password" class="col-md-4 control-label">Password</label>
                    <div class="col-md-4">
                        <div class="col-md-4">
                            <input type="password" class="form-control form-style input-md" name="password" id="password"  placeholder="Enter your Password"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirm" class="col-md-4 control-label">Confirm Password</label>
                    <div class="col-md-4">
                        <div class="col-md-4">
                            <input type="password" class="form-control form-style input-md" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
                        </div>
                    </div>
                </div>						
                <div class="form-group">
                    <label class="col-md-4 control-label" ></label>  
                    <div class="col-md-4">
                        <button type="submit" id="update" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Update Password</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>
</div><?php }} ?>
