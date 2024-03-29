<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script src="{$BASE_URL}javascript/admin/projects.js"></script>
<script type="text/javascript" src="{$BASE_URL}javascript/templates/paginatedTables.js"></script>

<div class="container">
	<div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
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
						<li>
							<a href="https://gnomo.fe.up.pt{$BASE_URL}pages/admin/profileAdminOverview.php">
							<i class='glyphicon glyphicon-home'></i>
							Overview </a>
						</li>
						<li>
							<a href="https://gnomo.fe.up.pt{$BASE_URL}pages/profile/editProfile.php">
							<i class='glyphicon glyphicon-pencil'></i>
							Account Settings </a>
						</li>
						<li class='active'>
							<a href="https://gnomo.fe.up.pt{$BASE_URL}pages/admin/profileAdminSiteProjects.php">
							<i class='glyphicon glyphicon-file'></i>
							Site Projects</a>
						</li>
						<li>
							<a href="https://gnomo.fe.up.pt{$BASE_URL}pages/admin/profileAdminSiteUsers.php">
							<i class='glyphicon glyphicon-user'></i>
							Site Users</a>
						</li>
						<li>
							<a href="https://gnomo.fe.up.pt{$BASE_URL}pages/admin/reportedList.php">
							<i class='glyphicon glyphicon-remove'></i>
							Reported List</a>
						</li>
						<li>
							<a href="https://gnomo.fe.up.pt{$BASE_URL}pages/admin/siteStatistics.php">
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
							<button id="button-active" class="btn btn-success btn-filter" data-target="active">Active</button>
							<button id="button-reported" class="btn btn-warning btn-filter" data-target="reported">Reported</button>
							<button id="button-banned" class="btn btn-danger btn-filter" data-target="banned">Banned</button>
							<a href="https://gnomo.fe.up.pt{$BASE_URL}pages/admin/siteProjects.php"  class="btn btn-default btn-filter">All</a>
						</div>
					</div>
					<div class="pull-left">
						<input id="searchSiteProj" type="text" class="form-control search" placeholder="Search...">
					</div>
					<div id="projTable" class="table-container">
					{if $smartyProjectsActive|@count == 0}
						<h3 id="activeh3">This site doesn't have any active project</h3>
					{else}
						<table id='active' class="table table-filter">
							<thead>
							    <tr>
							        <th>
							        </th>
							    </tr>
							</thead>
							<tbody>
							{for $i=0 to ($smartyProjectsActive|@count-1)}
								<tr data-status="active">
									<td>
										<div class="media">
											<div class="media-body">
												<a href="https://gnomo.fe.up.pt{$BASE_URL}pages/project/projectPage.php?projID={$smartyProjectsActive[$i]['projectid']}&userID={$smartyUsrInfo['0']['userid']}" role="button">
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
							</tbody>
						</table>
					{/if}
					{if $smartyProjectsReported|@count == 0}
						<h3 id="reportedh3">This site doesn't have any reported project</h3>
					{else}
						<table id='reported' class="table table-filter">
							<thead>
							    <tr>
							        <th>
							        </th>
							    </tr>
							</thead>
							<tbody>
							{for $i=0 to ($smartyProjectsReported|@count-1)}
								<tr data-status="reported">
									<td>
										<div class="media">
											<div class="media-body">
												<a href="https://gnomo.fe.up.pt{$BASE_URL}pages/project/projectPage.php?projID={$smartyProjectsReported[$i]['projectid']}" role="button">
													<h4 class="title2">
														{$smartyProjectsReported[$i]['name']}
														<span class="pull-right reported">{$smartyProjectsReported[$i]['projectstatus']}</span>
													</h4>
												</a>
											</div>
										</div>
									</td>
								</tr>
							{/for}
							</tbody>
						</table>
					{/if}
						{if $smartyProjectsBanned|@count == 0}
							<h3 id="bannedh3">This site doesn't have any banned project</h3>
						{else}
						<table id='banned' class="table table-filter">
							<thead>
							    <tr>
							        <th>
							        </th>
							    </tr>
							</thead>
							<tbody>
							{for $i=0 to ($smartyProjectsBanned|@count-1)}
								<tr data-status="banned">
									<td>
										<div class="media">
											<div class="media-body">
											<a href="https://gnomo.fe.up.pt{$BASE_URL}pages/project/projectPage.php?projID={$smartyProjectsBanned[$i]['projectid']}" role="button">
												<h4 class="title2">
													{$smartyProjectsBanned[$i]['name']}
													<span class="pull-right banned">{$smartyProjectsBanned[$i]['projectstatus']}</span>
												</h4>
											</a>
											</div>

											<div class="pull-center">
											<button id="{$smartyProjectsBanned[$i]['projectid']}" class='btn btn-success btn-sm' onClick="removeProj(this)">Remove banned status</button>
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
		</div>
	</div>
</div>
</div>
