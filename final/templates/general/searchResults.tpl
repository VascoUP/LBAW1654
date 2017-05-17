<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">

<div class="container">
	<div class="card card-container first">
		<h3>Users</h3>
		<div class="overlay">
			<select id="order" name="order" onchange="getResults()">
				<option value="name ASC">Alphabetical A->Z</option>
				<option value="name DESC">Alphabetical Z->A</option>
			</select>
		</div>
		<div class="table-container">
			<table id="tableUser" class="table table-filter">
				<tbody>
				{for $i=0 to ($smartyUsers|@count - 1)}
					<tr>
						<td>
							<div class="media">
								<div class="media-body">
									<h4 class="title">
										<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php?userInfo={$smartyUsers[$i]['userid']}&user={$smartyUsrInfo['0']['userid']}">{$smartyUsers[$i]['username']}</a></h4>
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
		<h3>Projects</h3>
		<div class="overlay">
			<select id="order" name="order" onchange="getResults()">
				<option value="name ASC">Alphabetical A->Z</option>
				<option value="name DESC">Alphabetical Z->A</option>
			</select>
		</div>
		<div class="table-container">
			<table id="tableProj" class="table table-filter">
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