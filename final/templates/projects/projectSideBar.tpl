    <div class='col-md-3'>
    <div class='profile-sidebar'>

        <div class='profile-usertitle'>
            <div class='profile-usertitle-name'>
                {$smartyProjInfo['0']['name']}
            </div>
            <div class='profile-usertitle-email'>
                {if $smartyProjInfo['0']['countcoord'] == 1}
                    {$smartyProjInfo['0']['countcoord']} coordinator
                {else}
                    {$smartyProjInfo['0']['countcoord']} coordinators
                {/if}
            </div>

            <div class='profile-usertitle-email'>
                {if $smartyProjInfo['0']['countusers'] == 1}
                    {$smartyProjInfo['0']['countusers']} collaborator
                {else}
                    {$smartyProjInfo['0']['countusers']} collaborators
                {/if}
            </div>
            <br>
            <div class='profile-usertitle-email'>
                Main Coordinator: <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php?userInfo={$smartyCoord['0']['userid']}'>
                    {$smartyCoord['0']['username']}
                     </a>
            </div>
        </div>

        <div class='profile-usermenu'>
            <ul class='nav'>
                <li class='active'>
                    <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID={$smartyProjID}'>
                    <i class='glyphicon glyphicon-home'></i>
                    Description </a>
                </li>
                <li>
                    <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectEdit.php?projID={$smartyProjID}'>
                    <i class='glyphicon glyphicon-pencil'></i>
                    Edit Project </a>
                </li>
                <li>
                    <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/iteration/projectIterations.php?projID={$smartyProjID}'>
                    <i class='glyphicon glyphicon-th-list'></i>
                    Iterations </a>
                </li>
                <li>
                    <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/forum/projectForum.php?projID={$smartyProjID}'>
                    <i class='glyphicon glyphicon-inbox'></i>
                    Forum </a>
                </li>
                <li>
                    <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/statisticsProject.php?projID={$smartyProjID}'>
                    <i class='glyphicon glyphicon-stats'></i>
                    Statistics </a>
                </li>
            </ul>
        </div>
    </div>
{if $smartyUsrInfo['0']['type'] == 'administrator'}
    <div class='profile-userbuttons'>
        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/actions/admin/banProject.php?projID={$smartyProjID}&userID={$smartyUsrInfo['0']['userid']}' type='button' class='btn btn-danger btn-sm'>Ban Project</a>
    </div>
{else}
    <div class='profile-userbuttons'>
        {if $leaveBtnVisibility != 'not_visible'}
        <a type="button" href="https://gnomo.fe.up.pt/~lbaw1654/final/actions/projects/leaveProject.php?projID={$smartyProjID}" class="btn btn-warning btn-sm" id="leaveProject">Leave Project</a>
        {/if}
        {if $joinBtnVisibility != 'not_visible'}
        <a type="button" id="request" class="btn btn-primary btn-sm">Request to Join</a>
        {/if}
		{if $leaveBtnVisibility == 'not_visible'}
        <a type="button" href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/report.php?projID={$smartyProjID}" class="btn btn-danger btn-sm" id="reportProkect">Report Project</a>
		{/if}
    </div>
{/if}
</div>
