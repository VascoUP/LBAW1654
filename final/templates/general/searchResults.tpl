<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">

<div class="container">
	<div class="overlay">
		<div class="results">
		<select id="order" name="order">
			<option value="name ASC">Alphabetical A->Z</option>
			<option value="name DESC">Alphabetical Z->A</option>
		</select>
		<input type="checkbox" name="users" value="Users">Search user<br>
		<input type="checkbox" name="projects" value="Projects">Search project
		</div>
	</div>
	
	
	<div class="card card-container first">
		<h3 class="title">Users</h3>
		<div class="table-container">
			<table id="tableUser" class="table table-filter">
				<tbody>
				{if $smartyUsers|@count == 0}
				<h4 class="title">
				Any users found
				{/if}
				</h4>
				{for $i=0 to ($smartyUsers|@count - 1)}
					<tr>
						<td>
							<div class="media">
								<div class="media-body">
									<h4 class="title">
									{if $smartyUsers[$i]['type'] != 'administrator'}
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php?searchUser={$smartyUsers[$i]['userid']}&user={$smartyUsrInfo['0']['userid']}">
											{else}
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/profileAdminOverview.php" role="button">
											{/if}
										{$smartyUsers[$i]['username']}</a></h4>
									<p class="summary">{$smartyUsers[$i]['email']}</p>
								</div>
							</div>
						</td>
					</tr>
				{/for}
				</tbody>
			</table>
		</div>
	</div>
	
	<div class="card card-container second">
		<h3 class="title">Projects</h3>
		<div class="table-container">
			<table id="tableProject" class="table table-filter">
			{if $smartyProjs|@count == 0}
				<h4 class="title">
				Any projects found
				{/if}
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
		</div>
	</div>
</div>