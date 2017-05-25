<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script src="{$BASE_URL}javascript/admin/users.js"></script>
<div class="container">
	<div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="{$BASE_URL}images/assets/loginImage.png" class="img-responsive" alt="">
				</div>
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
                    <li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/profileAdminOverview.php'>
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
					<li class='active'>
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
		</div>
		<div class="col-md-9">
			<div class="profile-content">
					<div class="pull-right">
						<div class="btn-group">
							<button id="buttontActive" type="button" class="btn btn-success btn-filter" data-target="active">Active</button>
							<button id="buttontInactive" type="button" class="btn btn-primary btn-filter" data-target="inactive">Inactive</button>
							<button id="buttonReported" type="button" class="btn btn-warning btn-filter" data-target="reported">Reported</button>
							<button id="buttonBanned" type="button" class="btn btn-danger btn-filter" data-target="bannned">Banned</button>
							<a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/siteUsers.php' type="button" class="btn btn-default btn-filter" data-target="all">All</a>
						</div>
					</div>
					<div class="pull-left">
					<input id="searchSiteUsers" type="text" class="form-control search" placeholder="Search...">
				</div>
					<div id="usersTable" class="table-container">
						<table id="tableActive" class="table table-filter">
							<tbody>
								{if $smartyUsersActive|@count == 0}
									<h3 id="Useractiveh3">This site doesn't have any active user</h3>
								{else}
								{for $i=0 to ($smartyUsersActive|@count-1)}
								<tr data-status="active">
									<td>
										<div class="media">
											<div class="media-body">
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php?userInfo={$smartyUsersActive[$i]['userid']}&user={$smartyUsrInfo['0']['userid']}" role="button">
												<h4 class="title2">
													{$smartyUsersActive[$i]['username']}
													<span class="pull-right active">{$smartyUsersActive[$i]['userstatus']}</span>
												</h4>
											</a>
											</div>
											<div class="pull-left">
												{if isset($smartyUsersActive[$i]['photo'])}
													<img src="https://gnomo.fe.up.pt/~lbaw1654/final/images/users/{$smartyUsersActive[$i]['photo']}" class="media-photo">
												{else}
													<img src="{$BASE_URL}images/assets/loginImage.png" class='media-photo' alt=''>
												{/if}
											</div>
										</div>
									</td>
								</tr>
								{/for}
								{/if}
							</tbody>
						</table>
						<table id="tableInactive" class="table table-filter">
							<tbody>
							{if $smartyUsersInactive|@count == 0}
									<h3 id="Userinactiveh3">This site doesn't have any inactive user</h3>
								{else}
								{for $i=0 to ($smartyUsersInactive|@count-1)}
								<tr data-status="inactive">
									<td>
										<div class="media">
											<div class="media-body">
												<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php?userInfo={$smartyUsersInactive[$i]['userid']}&user={$smartyUsrInfo['0']['userid']}" role="button">
												<h4 class="title2">
													{$smartyUsersInactive[$i]['username']}
													<span class="pull-right active">{$smartyUsersInactive[$i]['userstatus']}</span>
												</h4>
											</a>
											</div>
											<div class="pull-left">
												{if isset($smartyUsersInactive[$i]['photo'])}
													<img src="https://gnomo.fe.up.pt/~lbaw1654/final/images/users/{$smartyUsersInactive[$i]['photo']}" class="media-photo">
												{else}
													<img src="{$BASE_URL}images/assets/loginImage.png" class='media-photo' alt=''>
												{/if}
											</div>
										</div>
									</td>
								</tr>
								{/for}
								{/if}
							</tbody>
						</table>
						<table id="tableReported" class="table table-filter">
							<tbody>
							{if $smartyUsersReported|@count == 0}
									<h3 id="Userreportedh3">This site doesn't have any reported user</h3>
								{else}
								{for $i=0 to ($smartyUsersReported|@count-1)}
								<tr data-status="reported">
									<td>
										<div class="media">
											<div class="media-body">
												<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php?userInfo={$smartyUsersReported[$i]['userid']}&user={$smartyUsrInfo['0']['userid']}" role="button">
												<h4 class="title2">
													{$smartyUsersReported[$i]['username']}
													<span class="pull-right active">{$smartyUsersReported[$i]['userstatus']}</span>
												</h4>
											</a>
											</div>
											<div class="pull-left">
												{if isset($smartyUsersReported[$i]['photo'])}
												<img src="https://gnomo.fe.up.pt/~lbaw1654/final/images/users/{$smartyUsersReported[$i]['photo']}" class="media-photo">
											{else}
												<img src="{$BASE_URL}images/assets/loginImage.png" class='media-photo' alt=''>
											{/if}
											</div>
										</div>
									</td>
								</tr>
								{/for}
								{/if}
							</tbody>
						</table>
						<table id="tableBanned" class="table table-filter">
							<tbody>
							{if $smartyUsersBanned|@count == 0}
									<h3 id="Userbannedh3">This site doesn't have any banned user</h3>
								{else}
								{for $i=0 to ($smartyUsersBanned|@count-1)}
								<tr data-status="banned">
									<td>
										<div class="media">
											<div class="media-body">
												<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php?userInfo={$smartyUsersBanned[$i]['userid']}" role="button">
												<h4 class="title2">
													{$smartyUsersBanned[$i]['username']}
													<span class="pull-right active">{$smartyUsersBanned[$i]['userstatus']}</span>
												</h4>
											</a>
											</div>
											<div class="pull-left">
											{if isset($smartyUsersBanned[$i]['photo'])}
												<img src="https://gnomo.fe.up.pt/~lbaw1654/final/images/users/{$smartyUsersBanned[$i]['photo']}" class="media-photo">
											{else}
												<img src="{$BASE_URL}images/assets/loginImage.png" class='media-photo' alt=''>
											{/if}
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