<?php /* Smarty version Smarty-3.1.15, created on 2017-04-26 18:25:40
         compiled from "/opt/lbaw/lbaw1654/public_html/proto/templates/projects/projectEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6031974875900d81444b882-80921086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39134eda53293333c6bc538967a0d184cba63fbd' => 
    array (
      0 => '/opt/lbaw/lbaw1654/public_html/proto/templates/projects/projectEdit.tpl',
      1 => 1493227118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6031974875900d81444b882-80921086',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'smartyProjID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5900d8145ed323_45328635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5900d8145ed323_45328635')) {function content_5900d8145ed323_45328635($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/pages/forms.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/users/confirmDelete.js"></script>

<div class="container">
    <div class="card card-container">

        <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/projects/projectEdit.php?projID=<?php echo $_smarty_tpl->tpl_vars['smartyProjID']->value;?>
" method="post">
            <!-- Form Name -->
            <h2>Edit Project</h2>

            <fieldset>
            <!-- Form Name -->
            <legend class="tab">Project Name</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Name</label>  
                    <div class="col-md-4">
                        <input type='text' name='name' id='name' class="form-control form-style input-md" placeholder='ex: PIU'>
                        <button id="update" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Update Name</button>
                    </div>
            </div>
            </fieldset>

            <fieldset>
            <!-- Form Name -->
            <legend class="tab">Description</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="description">Description</label>  
                    <div class="col-md-4">
                        <input id="description" name="description" type="text" placeholder="Description" class="form-control form-style input-md">
                        <button id="update" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Update Description</button>
                    </div>
            </div>
            </fieldset>

            <fieldset>
            <!-- Form Name -->
            <legend class="tab">Main Settings</legend>
            <!-- File Button --> 
            <div class="form-group">
                <label class="col-md-4 control-label" for="public">Change Access</label>
                    <div class="col-md-4">
                        <select name="access" class="form-control form-style input-xs">
							<option value="public">Public</option>
							<option value="private">Private</option>
						</select>
						
						<button id="update" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Change Access</button>
                    </div>
            </div>
			</form>
			<br>
			<br>
			<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/projects/deleteProject.php?projID=<?php echo $_smarty_tpl->tpl_vars['smartyProjID']->value;?>
" method="post">
            <div class="form-group">
                <label class="col-md-4 control-label" for="deleteProj">Delete Project</label>
                    <div class="col-md-4">   
                        <button id="deleteProj" name='deleteProj' type='submit' class="btn btn-danger"><span class="glyphicon glyphicon-thumbs-down" value=""></span> Delete</button>
                    </div>
            </div>
			</fieldset>
			</form>
			
			<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/projects/projectEdit.php?projID=<?php echo $_smarty_tpl->tpl_vars['smartyProjID']->value;?>
" method="post">
            <fieldset>
            <!-- Form Name -->
            <legend class="tab">Invite Users</legend>
            <div class="form-group">
                <label for="joinUser" class="col-md-4 control-label">Invite to join</label>
                    <div class="col-md-4">
                        <input name='joinUser' id='joinUser' type='text' class="form-control form-style input-md" placeholder='ex: aed1123'>
						<button id="update" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Add User</button>
                    </div>
            </div>
			</fieldset>
			</form>
    </div>

</div><?php }} ?>
