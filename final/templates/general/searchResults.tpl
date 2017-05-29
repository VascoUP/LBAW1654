<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script src="{$BASE_URL}javascript/admin/search.js"></script>
<script type="text/javascript" src="{$BASE_URL}javascript/templates/paginatedTables.js"></script>

<div class="container">
	<div class="overlay">
		<div class="results">
		<input id="users" type="checkbox" name="users" value="Users">Search user<br>
		<input id="projs" type="checkbox" name="projects" value="Projects">Search project
		<button id="filter" type="button" class="btn btn-primary btn-filter" >Apply Filters</button>
		</div>
	</div>

	<div id="first" class="card card-container first">
		<h3 class="title">Users</h3>
		<div class="table-container" id="containerResultsUser">
		{if $smartyUsers|@count == 0}
				<h4 class="title">
				No users found
				</h4>
				{else}
			<table id="tableUser" class="table table-filter">
				<thead>
				    <tr>
				        <th>

				        </th>
				    </tr>
				</thead>
				<tbody>
				{for $i=0 to ($smartyUsers|@count - 1)}
					<tr>
						<td>
							<div class="media">
								<div class="media-body">
									<h4 class="title">
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php?searchUser={$smartyUsers[$i]['userid']}&user={$smartyUsrInfo['0']['userid']}">
										{$smartyUsers[$i]['username']}</a></h4>
									<p class="summary">{$smartyUsers[$i]['email']}</p>
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

	<div id="second" class="card card-container second">
		<h3 class="title">Projects</h3>
		<div class="table-container" id="containerResultsProj">
		{if $smartyProjs|@count == 0}
				<h4 class="title">
				No projects found</h4>
			{else}
			<table id="tableProject" class="table table-filter">
				<thead>
				    <tr>
				        <th>

				        </th>
				    </tr>
				</thead>
				<tbody>
					{for $i=0 to ($smartyProjs|@count - 1)}
					<tr>
						<td>
							<div class="media">
								<div class="media-body">
									<h4 class="title">
									<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID={$smartyProjs[$i]['projectid']}">{$smartyProjs[$i]['name']}</a></h4>
									<p class="summary">{$smartyProjs[$i]['description']}</p>
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
