<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/profile.css" rel='stylesheet'>
<link href="{$BASE_URL}css/pages/login.css" rel='stylesheet'>
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel='stylesheet'>

<div class='container'>

        <div class='row profile'>
            <div class='col-md-3'>

        <div class='profile-sidebar'>
            <!-- SIDEBAR USERPIC -->
            <div class='profile-userpic'>

                {if isset($smartyUsrInfo['0']['photo'])}
                    <img src="{$BASE_URL}images/users/{$smartyUsrInfo['0']['photo']}" class='img-responsive' alt='Administrator picture'>
                {else}
                    <img src="{$BASE_URL}images/assets/default.png" class='img-responsive' alt='Administrator picture'>
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
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/editProfile.php'>
                        <i class='glyphicon glyphicon-pencil'></i>
                        Account Settings </a>
                    </li>
                    <li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/profileAdminSiteProjects.php'>
                        <i class='glyphicon glyphicon-file'></i>
                        Site Projects</a>
                    </li>
					<li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/profileAdminSiteUsers.php'>
                        <i class='glyphicon glyphicon-user'></i>
                        Site Users</a>
                    </li>
					<li>
						<a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/reportedList.php'>
                        <i class='glyphicon glyphicon-remove'></i>
                        Reported List</a>
					</li>
					<li>
						<a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/siteStatistics.php'>
                        <i class='glyphicon glyphicon-stats'></i>
                        Site Statistics</a>
					</li>
                </ul>
            </div>
            <!-- END MENU -->
        </div>

        <!-- END SIDEBAR USER TITLE -->
            <!-- SIDEBAR BUTTONS -->
            <div class='profile-userbuttons'>
                <a class='btn btn-success btn-sm'>Contact</a>
            </div>
    </div>
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
                <a href='https://gnomo.fe.up.pt/~lbaw1654/final/documents/{$smartyUsrInfo['0']['curriculumvitae']}' download>{$smartyUsrInfo['0']['curriculumvitae']}</a>
                {/if}

            </div>
        </div>
</div>
</div>
</div>