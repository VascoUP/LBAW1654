<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script src="{$BASE_URL}javascript/users/confirmDelete.js"></script>
<script src="{$BASE_URL}javascript/projects/showProjects.js"></script>
<script type="text/javascript" src="{$BASE_URL}javascript/templates/paginatedTables.js"></script>

<div class="profile-content">
    <div class="pull-right">
            <div class="btn-group">
                <button id="top5" class="btn btn-success btn-filter" name="Top5">Last 5 Active</button>
                <button id="coord" class="btn btn-primary btn-filter" name="coordinator">Coordinator</button>
                <button id="collab" class="btn btn-info btn-filter" name="Collaborator">Collaborator</button>
                <a href="https://gnomo.fe.up.pt{$BASE_URL}pages/profile/projects.php?userID={$smartyUsrInfo['0']['userid']}" class="btn btn-default btn-filter">All</a>
            </div>
        </div>
    <div class="pull-left">
        <input id="searchProj" name='search' type="text" class="form-control search" placeholder="Search...">
    </div>
    <div id="userProjTable" class="table-container">
		{if $top|@count == 0}
            <h3 id="projh3">{$smartyUsrInfo['0']['username']} doesn't have any project</h3>
		{else}
        <table id="top5body" class="table table-filter">
            <thead>
                <tr>
                    <th>
                    </th>
                </tr>
            </thead>
            <tbody>
            {for $i=0 to ($top|@count-1)}
                <tr>
                    <td>
                        <div class="media">
                            <div class="media-body">
                                <a href="https://gnomo.fe.up.pt{$BASE_URL}pages/project/projectPage.php?projID={$top[$i]['projectid']}" role="button">
                                    <h4 class="title">
                                        {$top[$i]['name']}
                                    </h4>
                                </a>
                                <p class="summary">{$projects[$i]['description']}</p>
                            </div>
                        </div>
                    </td>
                </tr>
            {/for}
            </tbody>
        </table>
		{/if}
		{if $projectsCoord|@count == 0}
            <h3 id="coordh3">{$smartyUsrInfo['0']['username']} doesn't coordinates any project</h3>
        {else}
        <table id="coordbody" class="table table-filter">
            <thead>
                <tr>
                    <th>
                    </th>
                </tr>
            </thead>
            <tbody>
                {for $i=0 to ($projectsCoord|@count-1)}
                <tr>
                    <td>

                        <div class="media">
                            <div class="media-body">
                                <a href="https://gnomo.fe.up.pt{$BASE_URL}pages/project/projectPage.php?projID={$projectsCoord[$i]['projectid']}" role="button">
                                    <h4 class="title">
                                        {$projectsCoord[$i]['name']}
                                    </h4>
                                </a>
                                <p class="summary">{$projectsCoord[$i]['description']}</p>
                            </div>

                            <div class="profile-userbuttons">
                                <a href="https://gnomo.fe.up.pt{$BASE_URL}actions/projects/deleteProject.php?projID={$projectsCoord[$i]['projectid']}&userID={$smartyUsrInfo['0']['userid']}" class="btn btn-danger btn-sm deleteCoord">Delete Project</a>
                            </div>
                        </div>
                    </td>
                </tr>
                {/for}
            </tbody>
        </table>
		{/if}
		{if $projectsCollab|@count == 0}
            <h3 id="collabh3">{$smartyUsrInfo['0']['username']} doesn't collaborates in any project</h3>
        {else}
        <table id="collabbody" class="table table-filter">
            <thead>
                <tr>
                    <th>
                    </th>
                </tr>
            </thead>
            <tbody>
                {for $i=0 to ($projectsCollab|@count-1)}
                <tr>
                    <td>
                        <div class="media">
                            <div class="media-body">
                                <a href="https://gnomo.fe.up.pt{$BASE_URL}pages/project/projectPage.php?projID={$projectsCollab[$i]['projectid']}" role="button">
                                    <h4 class="title">
                                        {$projectsCollab[$i]['name']}
                                    </h4>
                                </a>
                                <p class="summary">{$projects[$i]['description']}</p>
                            </div>
                        </div>
                    </td>
                </tr>
                {/for}
            </tbody>
        </table>
		{/if}
    </div>
</div>
