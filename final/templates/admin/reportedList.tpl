<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script src="{$BASE_URL}javascript/admin/reported.js"></script>
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
                        <i class='glyphicon glyphicon-user'></i>
                        Account Settings </a>
                    </li>
                    <li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/profileAdminSiteProjects.php'>
                        <i class='glyphicon glyphicon-ok'></i>
                        Site Projects</a>
                    </li>
					<li class='active'>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/profileAdminSiteUsers.php'>
                        <i class='glyphicon glyphicon-ok'></i>
                        Site Users</a>
                    </li>
					<li>
						<a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/profileAdminReportedList.php'>
                        <i class='glyphicon glyphicon-remove'></i>
                        Reported List</a>
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
							<button id="buttontReported" type="button" class="btn btn-danger btn-filter" data-target="reported">Reported</button>
							<button id="buttontHandled" type="button" class="btn btn-success btn-filter" data-target="handled">Handled</button>
							<button id="buttonUser" type="button" class="btn btn-warning btn-filter" data-target="reportedUser">Reported User</button>
							<button id="buttonTask" type="button" class="btn btn-primary btn-filter" data-target="reportedTask">Reported Task</button>
							<button id="buttonThread" type="button" class="btn btn-info btn-filter" data-target="reportedThread">Reported Thread</button>
						</div>
					</div>
					<div class="pull-left">
					<input id="searchSiteReports" type="text" class="form-control search" placeholder="Search...">
				</div>
					<div id="usersTable" class="table-container">
						<table id="tableReported" class="table table-filter">
							<tbody>
								{if $reported|@count == 0}
									<h3 id="reportedH3">This site doesn't have any report</h3>
								{else}
								{for $i=0 to ($reported|@count-1)}
								<tr data-status="reported">
									<td>
										<div class="media">
											<div class="media-body">
											{if $reported[$i]['userid']}
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php?userInfo={$reported[$i]['userid']}" role="button">
											{elseif $reported[$i]['taskid']}
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/task/taskPag.php?taskID={$reported[$i]['taskid']}" role="button">
											{elseif $reported[$i]['threadid']}
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/forum/forum.php?forumID={$reported[$i]['threadid']}" role="button">
											{/if}
											
												<h4 class="title2">
													{$namesReported[$i]}
													<span class="pull-right active">{$reported[$i]['date']}</span>
													<span class="pull-right active">{									$reported[$i]['content']}</span>
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