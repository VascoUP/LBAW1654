<?php /* Smarty version Smarty-3.1.15, created on 2017-04-26 18:18:45
         compiled from "/opt/lbaw/lbaw1654/public_html/proto/templates/profiles/profileUsrOverview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4307006235900d46b7e3657-62360019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f54640df91790992cf651c19b0c166c9787a5a4a' => 
    array (
      0 => '/opt/lbaw/lbaw1654/public_html/proto/templates/profiles/profileUsrOverview.tpl',
      1 => 1493227117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4307006235900d46b7e3657-62360019',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5900d46b88b9a3_05479121',
  'variables' => 
  array (
    'smartyUsrInfo' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5900d46b88b9a3_05479121')) {function content_5900d46b88b9a3_05479121($_smarty_tpl) {?><link href="../../css/pages/profile.css" rel='stylesheet'>
<link href="../../css/pages/login.css" rel='stylesheet'>
<link href="../../css/bootstrap/bootstrap-social.css" rel='stylesheet'>

<div class='container'>

    <?php if (!$_smarty_tpl->tpl_vars['smartyUsrInfo']->value['0']['description']&&!$_smarty_tpl->tpl_vars['smartyUsrInfo']->value['0']['curriculumvitae']) {?>
        <div class='card card-container'>
            <div id='form-login'>
    <?php } else { ?>
        <div class='row profile'>
            <div class='col-md-3'>
    <?php }?>

        <div class='profile-sidebar'>
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
            <div class='profile-usertitle'>
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
                    <li class='active'>
                        <a href='#'>
                        <i class='glyphicon glyphicon-home'></i>
                        Overview </a>
                    </li>
                    <li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/proto/pages/profile/editProfile.php'>
                        <i class='glyphicon glyphicon-user'></i>
                        Account Settings </a>
                    </li>
                    <li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/proto/pages/profile/userProjects.php?userInfo=<?php echo $_smarty_tpl->tpl_vars['smartyUsrInfo']->value['0']['userid'];?>
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
    
    <?php if ($_smarty_tpl->tpl_vars['smartyUsrInfo']->value['0']['description']||$_smarty_tpl->tpl_vars['smartyUsrInfo']->value['0']['curriculumvitae']) {?>
        <div class='col-md-9'>
            <div id='profile-content' class='profile-content'>
                
                <?php if ($_smarty_tpl->tpl_vars['smartyUsrInfo']->value['0']['description']) {?>
                    <h2>
                        Biography
                    </h2>
                    <p class='summary'>
                    <?php echo $_smarty_tpl->tpl_vars['smartyUsrInfo']->value['0']['description'];?>

                    </p>
                <?php }?>

                <br>

                <?php if ($_smarty_tpl->tpl_vars['smartyUsrInfo']->value['0']['curriculumvitae']) {?>
                <h3>
                    Curriculum Vitae
                </h3>
                <a href='https://gnomo.fe.up.pt/~lbaw1654/proto/documents/<?php echo $_smarty_tpl->tpl_vars['smartyUsrInfo']->value['0']['curriculumvitae'];?>
' download><?php echo $_smarty_tpl->tpl_vars['smartyUsrInfo']->value['0']['curriculumvitae'];?>
</a>
                <?php }?>

            </div>
        </div>
    <?php }?>

</div>
</div><?php }} ?>
