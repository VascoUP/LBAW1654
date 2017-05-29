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
                Main Coordinator: <a href="https://gnomo.fe.up.pt{$BASE_URL}pages/profile/profileUserOverview.php?user={$smartyUsrInfo['0']['userid']}&searchUser={$smartyCoord['0']['userid']}">
                    {$smartyCoord['0']['username']}
                     </a>
            </div>
        </div>

        <div class='profile-usermenu'>
            <ul class='nav'>
                <li {if $varSideBar == 1}class='active'{/if}>
                    <a href="https://gnomo.fe.up.pt{$BASE_URL}pages/project/projectPage.php?projID={$smartyProjID}">
                    <i class='glyphicon glyphicon-home'></i>
                    Description </a>
                </li>
				{if $userIsCoord }
                <li {if $varSideBar == 2}class='active'{/if}>
                    <a href="https://gnomo.fe.up.pt{$BASE_URL}pages/project/projectEdit.php?projID={$smartyProjID}">
                    <i class='glyphicon glyphicon-pencil'></i>
                    Edit Project </a>
                </li>
				{/if}
				{if $joinProjectButton eq false || $type === 'administrator' }
                <li {if $varSideBar == 3}class='active'{/if}>
                    <a href="https://gnomo.fe.up.pt{$BASE_URL}pages/project/iteration/projectIterations.php?projID={$smartyProjID}">
                    <i class='glyphicon glyphicon-th-list'></i>
                    Iterations </a>
                </li>
                <li {if $varSideBar == 4}class='active'{/if}>
                    <a href="https://gnomo.fe.up.pt{$BASE_URL}pages/project/forum/projectForum.php?projID={$smartyProjID}">
                    <i class='glyphicon glyphicon-inbox'></i>
                    Forum </a>
                </li>
                <li>
                    <a href="https://gnomo.fe.up.pt{$BASE_URL}pages/project/statisticsProject.php?projID={$smartyProjID}">
                    <i class='glyphicon glyphicon-stats'></i>
                    Statistics </a>
                </li>
				{/if}
            </ul>
        </div>
    </div>
{if $smartyUsrInfo['0']['type'] == 'administrator' && $smartyProjInfo['0']['projectstatus'] != 'banned'}
    <div class='profile-userbuttons'>
        <a href="https://gnomo.fe.up.pt{$BASE_URL}actions/admin/banProject.php?projID={$smartyProjID}&userID={$smartyUsrInfo['0']['userid']}" type='button' class='btn btn-danger btn-sm'>Ban Project</a>
    </div>
{else}
    <div class='profile-userbuttons'>
	{if $joinBtnVisibility != 'not_visible'}
        {if $joinProjectButton eq false && $smartyProjInfo['0']['projectstatus'] != 'banned'}
        <a href="https://gnomo.fe.up.pt{$BASE_URL}actions/projects/leaveProject.php?projID={$smartyProjID}" class="btn btn-warning btn-sm" id="leaveProject">Leave Project</a>
        {elseif $joinProjectButton eq true && $smartyProjInfo['0']['projectstatus'] != 'banned'}
        <a id="request" class="btn btn-primary btn-sm">Request to join</a>
        {/if}
		{if $smartyProjInfo['0']['projectstatus'] != 'banned'}
        <a href="https://gnomo.fe.up.pt{$BASE_URL}pages/admin/report.php?projID={$smartyProjID}" class="btn btn-danger btn-sm" id="reportProkect">Report Project</a>
		{/if}
	{/if}
    </div>
{/if}
</div>

