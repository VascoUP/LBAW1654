<?php /* Smarty version Smarty-3.1.15, created on 2017-04-26 18:23:04
         compiled from "/opt/lbaw/lbaw1654/public_html/proto/templates/profiles/userProjects.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3294210095900d565dda295-65409842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3d9b94001fbbb52dc9cf5ae7005f2133586542d' => 
    array (
      0 => '/opt/lbaw/lbaw1654/public_html/proto/templates/profiles/userProjects.tpl',
      1 => 1493227118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3294210095900d565dda295-65409842',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5900d5660a8fb4_33708636',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'smartyUsrInfo' => 0,
    'projects' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5900d5660a8fb4_33708636')) {function content_5900d5660a8fb4_33708636($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/pages/profile.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/templates/projectsUsers.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap/bootstrap-social.css" rel="stylesheet">

<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class='profile-userpic'>

                <?php if (isset($_smarty_tpl->tpl_vars['smartyUsrInfo']->value['0']['photo'])) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/users/<?php echo $_smarty_tpl->tpl_vars['smartyUsrInfo']->value['0']['photo'];?>
" class='img-responsive' alt=''>
                <?php } else { ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/loginImage.png" class='img-responsive' alt=''>
                <?php }?>

				</div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class='profile-usertitle-name'>
                    <?php echo $_smarty_tpl->tpl_vars['smartyUsrInfo']->value['0']['username'];?>

                </div>
                <div class='profile-usertitle-email'>
                    <?php echo $_smarty_tpl->tpl_vars['smartyUsrInfo']->value['0']['email'];?>

                </div>
                </div>

                <!-- END SIDEBAR BUTTONS -->
            <!-- SIDEBAR MENU -->
            <div class='profile-usermenu'>
                <ul class='nav'>
                    <li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/proto/pages/profile/profileUserOverview.php'>
                        <i class='glyphicon glyphicon-home'></i>
                        Overview </a>
                    </li>
                    <li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/proto/pages/profile/editProfile.php'>
                        <i class='glyphicon glyphicon-user'></i>
                        Account Settings </a>
                    </li>
                    <li class='active'>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/proto/pages/profile/userProjects.php?username=<?php echo $_smarty_tpl->tpl_vars['smartyUsrInfo']->value['0']['username'];?>
'>
                        <i class='glyphicon glyphicon-ok'></i>
                        My Projects</a>
                    </li>
                </ul>
            </div>
            <!-- END MENU -->
        </div>
		
            <!-- END SIDEBAR USER TITLE -->
            <!-- SIDEBAR BUTTONS -->
            <div class='profile-userbuttons'>
                <a href='https://gnomo.fe.up.pt/~lbaw1654/proto/pages/project/projectCreate.php' type='button' class='btn btn-success btn-sm'>Add project</a>
                <a type='button' class='btn btn-success btn-sm'>Contact</a>
            </div>
    </div>
        <div class="col-md-9">
            <div class="profile-content">
				<div class="pull-left">
                    <input type="text" class="form-control search" placeholder="Search...">
                </div>
                <div class="table-container">
                    <table class="table table-filter">
                        <tbody>
							<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? (count($_smarty_tpl->tpl_vars['projects']->value)-1)+1 - (0) : 0-((count($_smarty_tpl->tpl_vars['projects']->value)-1))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="media-body">
											<a href="https://gnomo.fe.up.pt/~lbaw1654/proto/pages/project/projectPage.php?projID=<?php echo $_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->tpl_vars['i']->value]['projectid'];?>
" role="button">
												<h4 class="title">
													<?php echo $_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->tpl_vars['i']->value]['name'];?>

												</h4>
											</a>
                                            <p class="summary"><?php echo $_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->tpl_vars['i']->value]['description'];?>
</p>
                                        </div>
                                        
                                        <div class="profile-userbuttons">
                                            <a href="https://gnomo.fe.up.pt/~lbaw1654/proto/actions/projects/deleteProject.php?projID=<?php echo $_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->tpl_vars['i']->value]['projectid'];?>
" type="button" class="btn btn-danger btn-sm">Delete Project</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
							<?php }} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div><?php }} ?>
