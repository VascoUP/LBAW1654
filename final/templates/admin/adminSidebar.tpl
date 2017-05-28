<div class='col-md-3'>
    <div class='profile-sidebar'>
        <div class='profile-userpic'>
        {if isset($smartyUsrInfo['0']['photo'])}
            <img src="{$BASE_URL}images/users/{$smartyUsrInfo['0']['photo']}" class='img-responsive' alt='Administrator picture'>
        {else}
            <img src="{$BASE_URL}images/assets/default.png" class='img-responsive' alt='Administrator picture'>
        {/if}
        </div>
        
        <div class='profile-usertitle'>
            <div class='profile-usertitle-name'>{$smartyUsrInfo['0']['username']}</div>
            <div class='profile-usertitle-email'>{$smartyUsrInfo['0']['email']}</div>
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
    </div>
{if $smartyUsrInfo['0']['type'] != 'administrator'}
    <div class='profile-userbuttons'>
        <a class='btn btn-success btn-sm'>Contact</a>
    </div>
{/if}
</div>