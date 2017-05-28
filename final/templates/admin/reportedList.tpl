<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script src="{$BASE_URL}javascript/admin/reports.js"></script>
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
					<li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/profileAdminSiteUsers.php'>
                        <i class='glyphicon glyphicon-user'></i>
                        Site Users</a>
                    </li>
					<li class='active'>
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
							<button id="buttontReported" class="btn btn-danger btn-filter" data-target="reported">Reported</button>
							<button id="buttontHandled" class="btn btn-success btn-filter" data-target="handled">Handled</button>
							<button id="buttonUser" class="btn btn-warning btn-filter" data-target="reportedUser">User</button>
							<button id="buttonTask" class="btn btn-primary btn-filter" data-target="reportedTask">Task</button>
							<button id="buttonThread" class="btn btn-info btn-filter" data-target="reportedThread">Thread</button>
							<button id="buttonProject" class="btn btn-default btn-filter" data-target="reportedProject">Project</button>
						</div>
					</div>

					<div id="reportTable" class="table-container">
					{if $reported|@count == 0}
						<h3 id="reportedH3">This site doesn't have any report</h3>
					{else}
						<table id="tableReported" class="table table-filter">
							<tbody>
								{for $i=0 to ($reported|@count-1)}
								<tr data-status="reported">
									<td>
										<div class="media">
											<div class="media-body">
											{if $reported[$i]['userid']}
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php?userInfo={$reported[$i]['userid']}" role="button">
											{elseif $reported[$i]['taskid']}
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/task/taskPage.php?taskID={$reported[$i]['taskid']}" role="button">
											{elseif $reported[$i]['threadid']}
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/forum/forum.php?forumID={$reported[$i]['threadid']}" role="button">
											{elseif $reported[$i]['projectid']}
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?fprojID={$reported[$i]['projectid']}" role="button">
											{/if}
											
												<h4 class="title2">
													{$namesReported[$i]}
													<span class="pull-right active">Report date: {$reported[$i]['reportdate']}</span>
												</h4>
											</a>
											<p class="summary">{$reported[$i]['content']}</p>
											</div>
										</div>
										<div class="pull-center">
											<button id="{$reported[$i]['reportid']}" class='btn btn-success btn-sm' onClick="handled(this)">Handled</button>
										</div>
									</td>
								</tr>
								{/for}
							</tbody>
						</table>
						{/if}
						{if $handled|@count == 0}
							<h3 id="handledH3">This site doesn't have any handled report</h3>
						{else}
						<table id="tableHandled" class="table table-filter">
							<tbody>
								{for $i=0 to ($handled|@count-1)}
								<tr data-status="handled">
									<td>
										<div class="media">
											<div class="media-body">
											{if $handled[$i]['userid']}
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php?userInfo={$reported[$i]['userid']}" role="button">
											{elseif $handled[$i]['taskid']}
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/task/taskPage.php?taskID={$handled[$i]['taskid']}" role="button">
											{elseif $handled[$i]['threadid']}
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/forum/forum.php?forumID={$handled[$i]['threadid']}" role="button">
											{elseif $reported[$i]['projectid']}
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?fprojID={$reported[$i]['projectid']}" role="button">
											{/if}
											
												<h4 class="title2">
													{$namesHandled[$i]}
													<span class="pull-right active">Handled date: {$handled[$i]['handleddate']}</span>
												</h4>
											</a>
											<p class="summary">{$handled[$i]['content']}</p>
											</div>
										</div>
										
									</td>
								</tr>
								{/for}
							</tbody>
						</table>
						{/if}
						{if $userReport|@count == 0}
							<h3 id="UserreportedH3">This site doesn't have any user's report</h3>
						{else}
						<table id="tableReportUsers" class="table table-filter">
							<tbody>
								{for $i=0 to ($userReport|@count-1)}
								<tr data-status="reportedUser">
									<td>
										<div class="media">
											<div class="media-body">
											
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php?userInfo={$userReport[$i]['userid']}" role="button">
											
											
												<h4 class="title2">
													{$usernames[$i]}
													<span class="pull-right active">Report date: {$userReport[$i]['reportdate']}</span>
												</h4>
											</a>
											<p class="summary">{$userReport[$i]['content']}</p>
											</div>
										</div>
										<div class="pull-center">
											<button id="{$reported[$i]['reportid']}" type='button' class='btn btn-success btn-sm' onClick="handled(this)">Handled</button>
										</div>
									</td>
								</tr>
								{/for}
							</tbody>
						</table>
						{/if}
						{if $taskReport|@count == 0}
							<h3 id="reportedTaskH3">This site doesn't have any task's report</h3>
						{else}
						<table id="tableReportedTasks" class="table table-filter">
							<tbody>
								{for $i=0 to ($taskReport|@count-1)}
								<tr data-status="reportedTask">
									<td>
										<div class="media">
											<div class="media-body">
											
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/task/taskPage.php?taskID={$taskReport[$i]['taskid']}" role="button">
											
												<h4 class="title2">
													{$names[$i]}
													<span class="pull-right active">Report date: {$taskReport[$i]['reportdate']}</span>
												</h4>
											</a>
											<p class="summary">{$taskReport[$i]['content']}</p>
											</div>
										</div>
										<div class="pull-center">
											<button id="{$reported[$i]['reportid']}" type='button' class='btn btn-success btn-sm' onClick="handled(this)">Handled</button>
										</div>
									</td>
								</tr>
								{/for}
							</tbody>
						</table>
						{/if}
						{if $threadReport|@count == 0}
							<h3 id="reportedThreadH3">This site doesn't have any report</h3>
						{else}
						<table id="tableReportedThreads" class="table table-filter">
							<tbody>
								{for $i=0 to ($threadReport|@count-1)}
								<tr data-status="reportedThread">
									<td>
										<div class="media">
											<div class="media-body">
											
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/forum/forum.php?forumID={$threadReport[$i]['threadid']}" role="button">
											
												<h4 class="title2">
													{$titles[$i]}
													<span class="pull-right active">Report date: {$threadReport[$i]['reportdate']}</span>
												</h4>
											</a>
											<p class="summary">{$threadReport[$i]['content']}</p>
											</div>
										</div>
										<div class="pull-center">
											<button id="{$reported[$i]['reportid']}" type='button' class='btn btn-success btn-sm' onClick="handled(this)">Handled</button>
										</div>
									</td>
								</tr>
								{/for}
							</tbody>
						</table>
						{/if}
						{if $projReport|@count == 0}
							<h3 id="reportedprojH3">This site doesn't have any report</h3>
						{else}
						<table id="tableReportedProjects" class="table table-filter">
							<tbody>
								{for $i=0 to ($projReport|@count-1)}
								<tr data-status="reportedProject">
									<td>
										<div class="media">
											<div class="media-body">
											
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/projectPage.php?projID={$projReport[$i]['projectid']}" role="button">
											
												<h4 class="title2">
													{$projNames[$i]}
													<span class="pull-right active">Report date: {$projReport[$i]['reportdate']}</span>
												</h4>
											</a>
											<p class="summary">{$projReport[$i]['content']}</p>
											</div>
										</div>
										<div class="pull-center">
											<button id="{$reported[$i]['reportid']}" type='button' class='btn btn-success btn-sm' onClick="handled(this)">Handled</button>
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