<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">

<div class="container">
	<div class="card card-container">
		<a class='hiper' href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/profileAdminSiteProjects.php"> Site Projects </a>
		<div class="overlay">
			<select id="order" name="order" onchange="getResults()">
				<option value="name ASC">Alphabetical A->Z</option>
				<option value="name DESC">Alphabetical Z->A</option>
			</select>
		</div>
		<div class="table-container">
			<table class="table table-filter">
				<tbody>
				{for $i=0 to ($smartyProjects|@count-1)}
					<tr>
						<td>
							<div class="media-body">
								<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID={$smartyProjects[$i]['projectid']}" role="button">
									<h4 class="title">
										{$smartyProjects[$i]['name']}
									</h4>
								</a>
								<p class="summary">{$smartyProjects[$i]['projectstatus']}</p>
							</div>
						</td>
					</tr>
				{/for}
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>