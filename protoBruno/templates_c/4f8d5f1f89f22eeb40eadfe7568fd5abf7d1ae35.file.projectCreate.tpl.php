<?php /* Smarty version Smarty-3.1.15, created on 2017-04-26 18:19:08
         compiled from "/opt/lbaw/lbaw1654/public_html/proto/templates/projects/projectCreate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8280848985900d68c73d535-27717034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f8d5f1f89f22eeb40eadfe7568fd5abf7d1ae35' => 
    array (
      0 => '/opt/lbaw/lbaw1654/public_html/proto/templates/projects/projectCreate.tpl',
      1 => 1493227118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8280848985900d68c73d535-27717034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5900d68c8a70a0_60539069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5900d68c8a70a0_60539069')) {function content_5900d68c8a70a0_60539069($_smarty_tpl) {?>
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/pages/forms.css" rel="stylesheet">

<div class="container">
    <div class="card card-container">
        <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/projects/projectCreate.php" method="post" id="mainForm" class="form-horizontal">
        <fieldset>
            <!-- Form Name -->
            <legend>Create new project</legend>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="Name (Full name)">Project name</label>
            <div class="col-md-4">
                <div class="col-md-4">
                <input id="ProjectName" name="projName" type="text" 
                        placeholder="ex: PIU" required 
                        class="form-control form-style input-xs">
                </div>
            </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="Overview">
                Description
            </label>
            <div class="col-md-4">
                <div class="col-md-4">
                <input id="Overview" name="overview" type="text" 
                        placeholder="" 
                        class="form-control form-style input-xs">
                </div>
            </div>
            </div>

            <div class="form-group">
            <label class="col-md-4 control-label" for="Tags">Tags</label>
            <div class="col-md-4">
                <div class="col-md-4">
                <input id="tags" name="tags" type="text" 
                        placeholder="Project Tags" required
                        class="form-control form-style input-xs">
                </div>
            </div>
            </div>

            <legend></legend>

            <div class="form-group">
            <label class="col-md-4 control-label" for="Access">Control access</label>
            <div class="col-md-4">
                <div class="col-md-4">
                <select name="access" class="form-control form-style input-xs">
                    <option value="public">Public</option>
                    <option value="private">Private</option>
                </select>
                </div>
            </div>
            </div>

            <legend></legend>

            <div class="form-group">
            <label class="col-md-4 control-label" ></label>  
            <div class="col-md-4">
                <button id="create" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Create</button>
            </div>
            </div>

        </fieldset>
        </form>
    </div>
</div><?php }} ?>
