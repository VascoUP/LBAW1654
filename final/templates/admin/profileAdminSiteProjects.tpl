<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script src="{$BASE_URL}javascript/admin/projects.js"></script>
<div class="container">
	<div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="{$BASE_URL}images/assets/loginImage.png" class="img-responsive" alt="">
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
                    <li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/profileAdminOverview.php'>
                        <i class='glyphicon glyphicon-home'></i>
                        Overview </a>
                    </li>
                    <li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/editProfile.php'>
                        <i class='glyphicon glyphicon-user'></i>
                        Account Settings </a>
                    </li>
                    <li class='active'>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/profileAdminSiteProjects.php'>
                        <i class='glyphicon glyphicon-ok'></i>
                        Site Projects</a>
                    </li>
					<li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/profileAdminSiteUsers.php'>
                        <i class='glyphicon glyphicon-ok'></i>
                        Site Users</a>
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
							<button id="button-active" type="button" class="btn btn-success btn-filter" data-target="active">Active</button>
							<button id="button-reported" type="button" class="btn btn-warning btn-filter" data-target="reported">Reported</button>
							<button id="button-banned" type="button" class="btn btn-danger btn-filter" data-target="banned">Banned</button>
							<a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/siteProjects.php' type="button" class="btn btn-default btn-filter">All</a>
						</div>
					</div>
					<div class="pull-left">
					<input id="searchSiteProj" type="text" class="form-control search" placeholder="Search...">
				</div>
					<div id="projTable" class="table-container">
						<table id='active' class="table table-filter">
							<tbody>
							{if $smartyProjectsActive|@count == 0}
								<h3 id="activeh3">This site doesn't have any active project</h3>
							{else}
							{for $i=0 to ($smartyProjectsActive|@count-1)}
								<tr data-status="active">
									<td>
										<div class="media">
											<div class="media-body">
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID={$smartyProjectsActive[$i]['projectid']}&userID={$smartyUsrInfo['0']['userid']}" role="button">
												<h4 class="title2">
													{$smartyProjectsActive[$i]['name']}
													<span class="pull-right active">{$smartyProjectsActive[$i]['projectstatus']}</span>
												</h4>
											</a>
											</div>
											
										</div>
									</td>
								</tr>
								{/for}
								{/if}
							</tbody>
						</table>
						<table id='reported' class="table table-filter">
							<tbody>
							{if $smartyProjectsReported|@count == 0}
								<h3 id="reportedh3">This site doesn't have any reported project</h3>
							{else}
							{for $i=0 to ($smartyProjectsReported|@count-1)}
								<tr data-status="reported">
									<td>
										<div class="media">
											<div class="media-body">
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID={$smartyProjectsReported[$i]['projectid']}" role="button">
												<h4 class="title2">
													{$smartyProjectsReported[$i]['name']}
													<span class="pull-right active">{$smartyProjectsReported[$i]['projectstatus']}</span>
												</h4>
											</a>
											</div>
											
										</div>
									</td>
								</tr>
								{/for}
								{/if}
							</tbody>
						</table>
						<table id='banned' class="table table-filter">
							<tbody>
							{if $smartyProjectsBanned|@count == 0}
								<h3 id="bannedh3">This site doesn't have any banned project</h3>
							{else}
							{for $i=0 to ($smartyProjectsBanned|@count-1)}
								<tr data-status="banned">
									<td>
										<div class="media">
											<div class="media-body">
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID={$smartyProjectsBanned[$i]['projectid']}" role="button">
												<h4 class="title2">
													{$smartyProjectsBanned[$i]['name']}
													<span class="pull-right active">{$smartyProjectsBanned[$i]['projectstatus']}</span>
												</h4>
											</a>
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