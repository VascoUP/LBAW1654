<?php /* Smarty version Smarty-3.1.15, created on 2017-04-26 18:27:29
         compiled from "/opt/lbaw/lbaw1654/public_html/proto/templates/projects/projectIterations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21236101895900d881c396e2-77329099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '202d48426b742da885d0cad86fdb106b4b39018c' => 
    array (
      0 => '/opt/lbaw/lbaw1654/public_html/proto/templates/projects/projectIterations.tpl',
      1 => 1493227119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21236101895900d881c396e2-77329099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5900d881d9d424_48030059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5900d881d9d424_48030059')) {function content_5900d881d9d424_48030059($_smarty_tpl) {?>
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/pages/taskList.css" rel='stylesheet'>
  <div class="container">
    <div class="card card-container">
          <h2>Iterations</h2>
          <p>This is where you'll find the project iterations</p>
          <hr class='featurette-divider'>

          <div class='table-responsive'>
            <table class='table iteration table-striped'>
              <thead>
                <tr>
                  <th class='hidden-xs cell-stat'></th>
                  <th>
                    <h3>Iterations</h3>
                  </th>
                  <th class='cell-stat text-center hidden-xs hidden-sm'>Number of tasks</th>
                  <th class='cell-stat text-center hidden-xs hidden-sm'>Start date</th>
                  <th class='cell-stat text-center hidden-xs hidden-sm'>Due date</th>
                  <th class='column join button'></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class='hidden-xs text-center'><i class='fa fa-question fa-2x text-primary'></i></td>
                  <td>
                    <h4><a href='#'>Iteration 1</a></h4>
                  </td>
                  <td class='text-center hidden-xs hidden-sm'><a href='#'>2</a></td>
                  <td class='text-center hidden-xs hidden-sm'><a href='#'>03-04-2017</a></td>
                  <td class='text-center hidden-xs hidden-sm'><a href='#'>10-04-2017</a></td>
                  <td>
                    <button id="editIteration" type="submit" class="btn btn-warning">Edit Iteration</button>
                  </td>
                </tr>
                <tr>
                  <td class='hidden-xs text-center'><i class='fa fa-exclamation fa-2x text-danger'></i></td>
                  <td>
                    <h4><a href='#'>Iteration 2</a></h4>
                  </td>
                  <td class='text-center hidden-xs hidden-sm'><a href='#'>1</a></td>
                  <td class='text-center hidden-xs hidden-sm'><a href='#'>11-04-2017</a></td>
                  <td class='text-center hidden-xs hidden-sm'><a href='#'>18-04-2017</a></td>
                  <td>
                    <button id="editIteration" type="submit" class="btn btn-warning">Edit Iteration</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
         <button id="addIteration" type="submit" class="btn btn-success">Add Iteration</button>
    </div>
  </div>
</div><?php }} ?>
