<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/statistics.css" rel="stylesheet">
<script type="text/javascript" src="{$BASE_URL}javascript/templates/paginatedTables.js"></script>

<div class="container">
	<div class="card card-container">
		<a class='hiper' href="https://gnomo.fe.up.pt{$BASE_URL}pages/admin/profileAdminSiteProjects.php"> Site Projects </a>

		<div class="table-container">
			<table class="table table-filter" id="page_table">
				<thead>
				    <tr>
				        <th>Username</th>
				    </tr>
				</thead>
				<tbody>
					<tr>
						<td>
				{if $smartyProjects|@count == 0}
					<h3 id="projecth3">This site doesn't have any projects created</h3>
				{else}
				</td>
				</tr>
				{for $i=0 to ($smartyProjects|@count-1)}
					<tr>
						<td>
							<div class="media-body">
								<a href="https://gnomo.fe.up.pt{$BASE_URL}pages/project/projectPage.php?projID={$smartyProjects[$i]['projectid']}" role="button">
									<h4 class="title">
										{$smartyProjects[$i]['name']}
									</h4>
								</a>
								<p class="summary">{$smartyProjects[$i]['projectstatus']}</p>
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
