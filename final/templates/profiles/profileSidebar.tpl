<div class='col-md-3'>
    <div class='profile-sidebar'>
        <div class='profile-userpic'>
        {if isset($smartyUsrInfo['0']['photo'])}
            <img alt="Profile image" src="{$BASE_URL}images/users/{$smartyUsrInfo['0']['photo']}" class='img-responsive'>
        {else}
            <img alt="Profile default image" src="{$BASE_URL}images/assets/loginImage.png" class='img-responsive'>
        {/if}
        </div>

        <div class='profile-usertitle'>
            <div class='profile-usertitle-name'>{$smartyUsrInfo['0']['username']}</div>
            <div class='profile-usertitle-email'>{$smartyUsrInfo['0']['email']}</div>
        </div>

        <div class='profile-usermenu'>
            <ul class='nav'>
                <li {if $varSideBar == 1} class='active' {/if}>
				{if $smartyUser}
                    <a href="https://gnomo.fe.up.pt{$BASE_URL}pages/profile/profileUserOverview.php?searchUser={$smartyUsrInfo['0']['userid']}&user={$smartyUser}">
				{else}
				<a href="https://gnomo.fe.up.pt{$BASE_URL}pages/profile/profileUserOverview.php?">
				{/if}
                        <i class='glyphicon glyphicon-home'></i>
                        Overview</a>
                </li>
            {if !$smartyUser }
                <li>
                    <a href="https://gnomo.fe.up.pt{$BASE_URL}pages/profile/editProfile.php">
                        <i class='glyphicon glyphicon-pencil'></i>
                        Account Settings</a>
                </li>
            {/if}
                <li {if $varSideBar == 2} class='active' {/if}>
                {if $smartyUser }
                    <a href="https://gnomo.fe.up.pt{$BASE_URL}pages/profile/userProjects.php?user={$smartyUser}&userInfo={$smartyUsrInfo['0']['userid']}">
                        <i class='glyphicon glyphicon-ok'></i>
                        User Projects</a>
                {else}
                    <a href="https://gnomo.fe.up.pt{$BASE_URL}pages/profile/userProjects.php?userInfo={$smartyUsrInfo['0']['userid']}">
                        <i class='glyphicon glyphicon-ok'></i>
                        My Projects</a>
                {/if}
                </li>
                <li>
                {if !$smartyUser}
                    <a href="https://gnomo.fe.up.pt{$BASE_URL}pages/profile/userStatistics.php?userInfo={$smartyUsrInfo['0']['userid']}">
                        <i class='glyphicon glyphicon-stats'></i>
                        My Statistics</a>
				{/if}
                </li>
            </ul>
        </div>
    </div>

    <div class='profile-userbuttons'>
    {if $smartyUser && $smartyUserInfoFirst['0']['type'] == 'administrator'}
        <a href="https://gnomo.fe.up.pt{$BASE_URL}actions/admin/banUser.php?userID={$smartyUsrInfo['0']['userid']}" class='btn btn-danger btn-sm'>Ban User</a>
    {elseif $smartyUser || ($smartyUserInfoFirst['0']['type'] == 'coordinator' || $smartyUserInfoFirst['0']['type'] == 'user')}
        <a href="https://gnomo.fe.up.pt{$BASE_URL}pages/admin/report.php?userID={$smartyUsrInfo['0']['userid']}" class='btn btn-warning btn-sm'>Report User</a>
        <a href="https://gnomo.fe.up.pt{$BASE_URL}pages/general/contactPage.php?second={$smartyUsrInfo['0']['userid']}&userID={$smartyUser}" class='btn btn-success btn-sm'>Contact</a>
    {elseif !$smartyUser}
        <a href="https://gnomo.fe.up.pt{$BASE_URL}pages/project/projectCreate.php" class='btn btn-success btn-sm'>Add project</a>
    {/if}
    </div>
</div>