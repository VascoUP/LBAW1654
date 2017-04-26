<?php /* Smarty version Smarty-3.1.15, created on 2017-04-26 18:22:37
         compiled from "/opt/lbaw/lbaw1654/public_html/proto/templates/profiles/editProfile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20547083095900d56a0f96c8-68818844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e304e8400b3f716245511d695b03184c7336c55' => 
    array (
      0 => '/opt/lbaw/lbaw1654/public_html/proto/templates/profiles/editProfile.tpl',
      1 => 1493227116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20547083095900d56a0f96c8-68818844',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5900d56a2a09d8_33607010',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5900d56a2a09d8_33607010')) {function content_5900d56a2a09d8_33607010($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/pages/forms.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/users/confirmDelete.js"></script>

<div class="container">
    <div class="card card-container">
        <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/profile/editProfile.php" method="post" enctype="multipart/form-data">
            <!-- Form Name -->
            <h2>Edit Profile</h2>

            <div class="form-group">
                    <label class="col-md-4 control-label" ></label>  
                    <div class="col-md-4">
                        <a class="btn btn-block btn-social btn-linkedin">
                            <i class="fa fa-linkedin"></i> Link to Linkedin
                        </a>
                    </div>
                </div>

            <fieldset>
            <!-- Form Name -->
            <legend class="tab">Username</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="username">Username</label>  
                    <div class="col-md-4">
                        <input id="username" name="username" type="text" placeholder="Username" class="form-control form-style input-md">
                        <button id="update" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Update Username</button>
                    </div>
            </div>
            </fieldset>
		</form>

		<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/profile/editProfile.php" method="post" enctype="multipart/form-data">
            <fieldset>
            <!-- Form Name -->
            <legend class="tab">Email</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="email">Email Address</label>  
                    <div class="col-md-4">
                        <input id="email" name="email" type="text" placeholder="Email Address" class="form-control form-style input-md">
                        <button id="update" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Update Email</button>
                    </div>
            </div>
            </fieldset>
			<form>
			
		<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/profile/editProfile.php" method="post" enctype="multipart/form-data">
            <fieldset>
            <!-- Form Name -->
            <legend class="tab">Files upload</legend>
            <!-- File Button --> 
            <div class="form-group">
                <label class="col-md-4 control-label" for="upload">Upload photo</label>
                    <div class="col-md-4">
                        <input name="upload" type="file" accept=".png, .jpg, .jpeg">
                    </div>
            </div>
			<div class="form-group"> 
            <label class="col-md-4 control-label" ></label> 
                    <div class="col-md-4">
                        <button id="update" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Update Photo</button>
                    </div>
            </div>
		</form>
		<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/profile/editProfile.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-md-4 control-label" for="uploadCV">Upload Curriculum Vitae</label>
                    <div class="col-md-4">   
                        <input name="uploadCV" type="file" accept=".pdf">
                    </div>
            </div>
            <div class="form-group"> 
            <label class="col-md-4 control-label" ></label> 
                    <div class="col-md-4">
                        <button id="update" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Update Curriculum</button>
                    </div>
            </div>
            </fieldset>
		</form>

		<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/profile/editProfile.php" method="post" enctype="multipart/form-data">
            <fieldset>
            <!-- Form Name -->
            <legend class="tab">Password</legend>
            <div class="form-group">
                <label for="password" class="col-md-4 control-label">Password</label>
                    <div class="col-md-4">
                        <input type="password" class="form-control form-style input-md" name="password" id="password"  placeholder="Enter your Password"/>
                    </div>
            </div>
            <div class="form-group">
                <label for="confirm" class="col-md-4 control-label">Confirm Password</label>
                    <div class="col-md-4">
                        <input type="password" class="form-control form-style input-md" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
                        <button id="update" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Update Password</button>
                    </div>
            </div>
            </fieldset>
			</form>
			
			<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/profile/editProfile.php" method="post" enctype="multipart/form-data">
            <fieldset>
            <!-- Form Name -->
            <legend class="tab" id="tab">Overview</legend>
            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="overview">Overview (max 200 words)</label>  
                    <div class="col-md-4">                     
                        <textarea class="form-control form-style" rows="5" cols="30"  id="overview" name="overview"></textarea>
                        <button id="update" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Update Overview</button>
                    </div>
            </div>			
            </fieldset>
            </form>
		
			<br>
            <br>
            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/deleteAccount.php" method="post">
            <div class="form-group">
                <label class="col-md-4 control-label" ></label>  
                <div class="col-md-4">
                    <button id="delete" type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Delete account</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div><?php }} ?>
