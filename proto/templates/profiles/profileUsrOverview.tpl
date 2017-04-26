<link href="../../css/pages/profile.css" rel='stylesheet'>
<link href="../../css/pages/login.css" rel='stylesheet'>
<link href="../../css/bootstrap/bootstrap-social.css" rel='stylesheet'>

<div class='container'>

    {if !$smartyUsrInfo['0']['description'] && !$smartyUsrInfo['0']['curriculumvitae']}
        <div class='card card-container'>
            <div id='form-login'>
    {else}
        <div class='row profile'>
            <div class='col-md-3'>
    {/if}

        <div class='profile-sidebar'>
            <!-- SIDEBAR USERPIC -->
            <div class='profile-userpic'>

                {if isset($smartyUsrInfo['0']['photo'])}
                    <img src="{$BASE_URL}images/users/{$smartyUsrInfo['0']['photo']}" class='img-responsive' alt=''>
                {else}
                    <img src="{$BASE_URL}images/assets/loginImage.png" class='img-responsive' alt=''>
                {/if}

            </div>
            <!-- END SIDEBAR USERPIC -->
            <!-- SIDEBAR USER TITLE -->
            <div class='profile-usertitle'>
                <div class='profile-usertitle-name'>
                    {$smartyUsrInfo['0']['username']}
                </div>
                <div class='profile-usertitle-email'>
                    {$smartyUsrInfo['0']['email']}
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
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/proto/pages/profile/userProjects.php?userInfo={$smartyUsrInfo['0']['userid']}'>
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
    
    {if $smartyUsrInfo['0']['description'] || $smartyUsrInfo['0']['curriculumvitae']}
        <div class='col-md-9'>
            <div id='profile-content' class='profile-content'>
                
                {if $smartyUsrInfo['0']['description']}
                    <h2>
                        Biography
                    </h2>
                    <p class='summary'>
                    {$smartyUsrInfo['0']['description']}
                    </p>
                {/if}

                <br>

                {if $smartyUsrInfo['0']['curriculumvitae']}
                <h3>
                    Curriculum Vitae
                </h3>
                <a href='https://gnomo.fe.up.pt/~lbaw1654/proto/documents/{$smartyUsrInfo['0']['curriculumvitae']}' download>{$smartyUsrInfo['0']['curriculumvitae']}</a>
                {/if}

            </div>
        </div>
    {/if}

</div>
</div>