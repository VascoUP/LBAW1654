<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script src="{$BASE_URL}javascript/users/confirmDelete.js"></script>

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
                        <i class='glyphicon glyphicon-user'></i>
                        Account Settings </a>
                    </li>
                    <li class='active'>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/userProjects.php?username={$smartyUsrInfo['0']['username']}'>
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
                <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectCreate.php' type='button' class='btn btn-success btn-sm'>Add project</a>
                <a type='button' class='btn btn-success btn-sm'>Contact</a>
            </div>
    </div>
        <div class="col-md-9">
            <div class="profile-content">
				<div class="pull-right">
						<div class="btn-group">
							<input id="top5" type="submit" class="btn btn-success btn-filter" value="Last 5 Active" name="Top5">
							<input id="coord" type="submit" class="btn btn-primary btn-filter" value="Coordinator" name"coordinator">
							<input id="collab" type="submit" class="btn btn-info btn-filter" value="Collaborator" name="Collaborator">
							<input id="all" type="submit" class="btn btn-default btn-filter" value="All" name="All">
						</div>
					</div>
				<div class="pull-left">
                    <input type="text" class="form-control search" placeholder="Search...">
                </div>
                <div class="table-container">
                    <table class="table table-filter">
                        <tbody>
							{for $i=0 to ($projects|@count-1)}
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="media-body">
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID={$projects[$i]['projectid']}" role="button">
												<h4 class="title">
													{$projects[$i]['name']}
												</h4>
											</a>
                                            <p class="summary">{$projects[$i]['description']}</p>
                                        </div>
                                        
                                        <div class="profile-userbuttons">
                                            <a href="https://gnomo.fe.up.pt/~lbaw1654/final/actions/projects/deleteProject.php?projID={$projects[$i]['projectid']}" type="button" class="btn btn-danger btn-sm" id="deleteProj">Delete Project</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
							{/for}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="{$BASE_URL}javascript/users/userProjects.js"></script>