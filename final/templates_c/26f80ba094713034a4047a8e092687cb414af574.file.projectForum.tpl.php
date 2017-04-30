<?php /* Smarty version Smarty-3.1.15, created on 2017-04-26 18:27:36
         compiled from "/opt/lbaw/lbaw1654/public_html/proto/templates/projects/projectForum.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15681410785900d888abb7b9-90225403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26f80ba094713034a4047a8e092687cb414af574' => 
    array (
      0 => '/opt/lbaw/lbaw1654/public_html/proto/templates/projects/projectForum.tpl',
      1 => 1493227119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15681410785900d888abb7b9-90225403',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5900d888c2e9c7_47109434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5900d888c2e9c7_47109434')) {function content_5900d888c2e9c7_47109434($_smarty_tpl) {?>   <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/pages/forum.css" rel='stylesheet'>
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/pages/taskList.css" rel='stylesheet'>

  <div class="container">
    <div class="card card-container">
          <h2>Forum</h2>
          <p>This is the right place to discuss any ideas, critics, feature requests and all the ideas regarding the project. Please follow the forum rules and always check FAQ before posting to prevent duplicate posts.</p>
          <hr class='featurette-divider'>

          <div class='table-responsive'>
            <table class='table forum table-striped'>
              <thead>
                <tr>
                  <th class='hidden-xs cell-stat'></th>
                  <th>
                    <h3>Forums</h3>
                  </th>
                  <th class='cell-stat text-center hidden-xs hidden-sm'>Topics</th>
                  <th class='cell-stat text-center hidden-xs hidden-sm'>Posts</th>
                  <th class='cell-stat-2x hidden-xs hidden-sm'>Last Post</th>
                  <th class='column join button'></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class='hidden-xs text-center'><i class='fa fa-question fa-2x text-primary'></i></td>
                  <td>
                    <h4><a href='#'>Frequently Asked Questions</a><br><small>Some description</small></h4>
                  </td>
                  <td class='text-center hidden-xs hidden-sm'><a href='#'>9 542</a></td>
                  <td class='text-center hidden-xs hidden-sm'><a href='#'>89 897</a></td>
                  <td class='posted by'>by <a href='#'>John Doe</a>
                    <br><small><i class='fa fa-clock-o'></i> 3 months ago</small></td>
                  <td>   
					<button id="editForum" type="submit" class="btn btn-warning">Edit Forum</button>
                  </td>
                </tr>
                <tr>
                  <td class='hidden-xs text-center'><i class='fa fa-exclamation fa-2x text-danger'></i></td>
                  <td>
                    <h4><a href='#'>Important changes</a><br><small>Category description</small></h4>
                  </td>
                  <td class='text-center hidden-xs hidden-sm'><a href='#'>6532</a></td>
                  <td class='text-center hidden-xs hidden-sm'><a href='#'>152123</a></td>
                  <td class='posted by'>by <a href='#'>Jane Doe</a>
                    <br><small><i class='fa fa-clock-o'></i> 1 years ago</small></td>
                  <td>
                    <button id="editForum" type="submit" class="btn btn-warning">Edit Forum</button>
                  </td>
                </tr>
              </tbody>
            </table>
            <br>
            <button id="addForum" type="submit" class="btn btn-success">Add Forum</button>
            <br>
          </div>
  </div>
</div><?php }} ?>
