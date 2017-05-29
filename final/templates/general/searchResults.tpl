<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script src="{$BASE_URL}javascript/admin/search.js"></script>

<div class="container">
	<div class="overlay">
		<div class="results">
		<select id="order" name="order">
			<option value="ASC">Alphabetical A->Z</option>
			<option value="DESC">Alphabetical Z->A</option>
		</select>
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
				Any users found
				</h4>
				{else}
			<table id="tableUser" class="table table-filter">
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
				Any projects found</h4>
			{else}
			<table id="tableProject" class="table table-filter">
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