<?php /* Smarty version Smarty-3.1.15, created on 2017-04-26 18:22:23
         compiled from "/opt/lbaw/lbaw1654/public_html/proto/templates/projects/projectPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7282633525900d74f9fc8c2-18335010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b03746965a4e76f1e990c697ee65f082cb0d2799' => 
    array (
      0 => '/opt/lbaw/lbaw1654/public_html/proto/templates/projects/projectPage.tpl',
      1 => 1493227120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7282633525900d74f9fc8c2-18335010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'smartyProjInfo' => 0,
    'smartyNumUsers' => 0,
    'smartyProjID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5900d74fb2a3f3_48976821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5900d74fb2a3f3_48976821')) {function content_5900d74fb2a3f3_48976821($_smarty_tpl) {?><link href="../../css/pages/profile.css" rel='stylesheet'>
<link href="../../css/bootstrap/bootstrap-social.css" rel='stylesheet'>

<div class='container'>

        <div class='row profile'>
            <div class='col-md-3'>

        <div class='profile-sidebar'>
            <!-- SIDEBAR USER TITLE -->
            <div class='profile-usertitle'>
                <div class='profile-usertitle-name'>
                    <?php echo $_smarty_tpl->tpl_vars['smartyProjInfo']->value['0']['name'];?>

                </div>
                <div class='profile-usertitle-email'>
                    <?php if ($_smarty_tpl->tpl_vars['smartyNumUsers']->value==1) {?>
						<?php echo $_smarty_tpl->tpl_vars['smartyNumUsers']->value;?>
 user
					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['smartyNumUsers']->value;?>
 users
					<?php }?>
                </div>
            </div>

            <!-- END SIDEBAR BUTTONS -->
            <!-- SIDEBAR MENU -->
            <div class='profile-usermenu'>
                <ul class='nav'>
                    <li class='active'>
                        <a href='#'><i class='glyphicon glyphicon-home'></i>
                        Description </a>
                    </li>
                    <li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/proto/pages/project/general/projectEdit.php?projID=<?php echo $_smarty_tpl->tpl_vars['smartyProjID']->value;?>
'>
                        <i class='glyphicon glyphicon-ok'></i>
                        Edit Project </a>
                    </li>
					<li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/proto/pages/project/iteration/projectIterations.php'>
                        <i class='glyphicon glyphicon-ok'></i>
                        Iterations </a>
                    </li>
                    <li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/proto/pages/project/forum/projectForum.php'>
                        <i class='glyphicon glyphicon-ok'></i>
                        Forum </a>
                    </li>
					<li>
                        <a href='#' target='_blank'>
                        <i class='glyphicon glyphicon-ok'></i>
                        Statistics </a>
                    </li>
                </ul>
            </div>
            <!-- END MENU -->
        </div>

    </div>
   
        <div class='col-md-9'>
            <div id='profile-content' class='profile-content'>
                    <h2>
                        Description
                    </h2>
                    <p class='summary'>
						<?php echo $_smarty_tpl->tpl_vars['smartyProjInfo']->value['0']['description'];?>

                    </p>
            </div>
        </div>

</div>
</div><?php }} ?>
