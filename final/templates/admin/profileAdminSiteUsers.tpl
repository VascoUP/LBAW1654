<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
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
                    <li class='active'>
                        <a href='#'>
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
					<li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/profileAdminSiteUsers.php'>
                        <i class='glyphicon glyphicon-ok'></i>
                        SiteUsers</a>
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
							<button type="button" class="btn btn-success btn-filter" data-target="accepted">Accepted</button>
							<button type="button" class="btn btn-warning btn-filter" data-target="reported">Reported</button>
							<button type="button" class="btn btn-danger btn-filter" data-target="reported">Banned</button>
							<button type="button" class="btn btn-default btn-filter" data-target="all">All</button>
						</div>
					</div>
					<div class="pull-left">
					<input type="text" class="form-control search" placeholder="Search...">
				</div>
					<div class="table-container">
						<table class="table table-filter">
							<tbody>
								{for $i=0 to ($users|@count-1)}
								<tr data-status="active">
									<td>
										<div class="media">
											<div class="media-body">
												<h4 class="title2">
													{$users[$i]['username']}
													<span class="pull-right active">{$user[$i]['userstatus']}</span>
												</h4>
											</div>
											<a href="#" class="pull-left">
												<img src="https://gnomo.fe.up.pt/~lbaw1654/final/images/users/{$user[$i]['photo']}" class="media-photo">
											</a>
										</div>
									</td>
								</tr>
								{/for}
								<tr data-status="active">
									<td>
										<div class="media">
											<div class="media-body">
												<h4 class="title2">
													Marcus Doe
													<span class="pull-right banned">(Banned)</span>
												</h4>
											</div>
											<a href="#" class="pull-left">
												<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
											</a>
											
											<div class="col-md-4">
												<a href="#" id="update" class="btn btn-danger"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Remove the ban status</a>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
			</div>
		</div>
	</div>
</div>
</div>