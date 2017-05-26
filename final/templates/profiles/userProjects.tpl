<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script src="{$BASE_URL}javascript/users/confirmDelete.js"></script>
<script src="{$BASE_URL}javascript/projects/showProjects.js"></script>

<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
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
                <div class="profile-usertitle">
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
                    <li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php'>
                        <i class='glyphicon glyphicon-home'></i>
                        Overview </a>
                    </li>
                    <li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/editProfile.php'>
                        <i class='glyphicon glyphicon-pencil'></i>
                        Account Settings </a>
                    </li>
                    <li class='active'>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/userProjects.php?userInfo={$smartyUsrInfo['0']['userid']}'>
                        <i class='glyphicon glyphicon-ok'></i>
                        My Projects</a>
                    </li>
					<li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/userStatistics.php?userInfo={$smartyUsrInfo['0']['userid']}'>
                        <i class='glyphicon glyphicon-stat'></i>
                        My Projects</a>
                    </li>
					
                </ul>
            </div>
            <!-- END MENU -->
        </div>
		
            <!-- END SIDEBAR USER TITLE -->
            <!-- SIDEBAR BUTTONS -->
            <div class='profile-userbuttons'>
                <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectCreate.php' type='button' class='btn btn-success btn-sm'>Add project</a>
                <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/general/contactPage.php?userID={$smartyUsrInfo['0']['userid']}' type='button' class='btn btn-success btn-sm'>Contact</a>
            </div>
    </div>
        <div class="col-md-9">
            <div class="profile-content">
				<div class="pull-right">
						<div class="btn-group">
							<button id="top5" class="btn btn-success btn-filter" name="Top5">Last 5 Active</button>
							<button id="coord" class="btn btn-primary btn-filter" name"coordinator">Coordinator</button>
							<button id="collab" class="btn btn-info btn-filter" name="Collaborator">Collaborator</button>
							<a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/projects.php?userID={$smartyUsrInfo['0']['userid']}' type="button" class="btn btn-default btn-filter">All</a>
						</div>
					</div>
				<div class="pull-left">
                    <input id="searchProj" name='search' type="text" class="form-control search" placeholder="Search...">
                </div>
                <div id="userProjTable" class="table-container">
                    <table id="top5body" class="table table-filter">
                        <tbody>
						{if $top|@count == 0}
							<h3 id="projh3">{$smartyUsrInfo['0']['username']} doesn't have any project</h3>
						{else}
							{for $i=0 to ($top|@count-1)}
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="media-body">
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID={$top[$i]['projectid']}" role="button">
												<h4 class="title">
													{$top[$i]['name']}
												</h4>
											</a>
                                            <p class="summary">{$projects[$i]['description']}</p>
                                        </div>
                                        
                                        <div class="profile-userbuttons">
                                            <a href="https://gnomo.fe.up.pt/~lbaw1654/final/actions/projects/deleteProject.php?projID={$top[$i]['projectid']}&userID={$smartyUsrInfo['0']['userid']}" type="button" class="btn btn-danger btn-sm delete">Delete Project</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
							{/for}
						{/if}
                        </tbody>
                    </table>
					<table id="coordbody" class="table table-filter">
                        <tbody>
						{if $projectsCoord|@count == 0}
							<h3 id="coordh3">{$smartyUsrInfo['0']['username']} doesn't coordinates any project</h3>
						{else}
							{for $i=0 to ($projectsCoord|@count-1)}
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="media-body">
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID={$projectsCoord[$i]['projectid']}" role="button">
												<h4 class="title">
													{$projectsCoord[$i]['name']}
												</h4>
											</a>
                                            <p class="summary">{$projectsCoord[$i]['description']}</p>
                                        </div>
                                        
                                        <div class="profile-userbuttons">
                                            <a href="https://gnomo.fe.up.pt/~lbaw1654/final/actions/projects/deleteProject.php?projID={$projectsCoord[$i]['projectid']}&userID={$smartyUsrInfo['0']['userid']}" type="button" class="btn btn-danger btn-sm delete">Delete Project</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
							{/for}
							{/if}
                        </tbody>
                    </table>
					<table id="collabbody" class="table table-filter">
                        <tbody>
						{if $projectsCollab|@count == 0}
							<h3 id="collabh3">{$smartyUsrInfo['0']['username']} doesn't collaborates in any project</h3>
						{else}
							{for $i=0 to ($projectsCollab|@count-1)}
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="media-body">
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID={$projectsCollab[$i]['projectid']}" role="button">
												<h4 class="title">
													{$projectsCollab[$i]['name']}
												</h4>
											</a>
                                            <p class="summary">{$projects[$i]['description']}</p>
                                        </div>
                                        
                                        <div class="profile-userbuttons">
                                            <a href="https://gnomo.fe.up.pt/~lbaw1654/final/actions/projects/deleteProject.php?projID={$projectsCollab[$i]['projectid']}&userID={$smartyUsrInfo['0']['userid']}" type="button" class="btn btn-danger btn-sm delete">Delete Project</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
							{/for}
						{/if}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
