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
		<a class='hiper' href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/profileAdminSiteUsers.php"> Site Users </a>

		<div class="table-container">
			<table class="table table-filter" id="page_table">
				<thead>
				    <tr>
				        <th>

				        </th>
				    </tr>
				</thead>
				<tbody>
					<tr>
						<td>
				{if $smartyUsers|@count == 0}
					<h3 id="userh3">This site doesn't have any users registered</h3>
				{else}
				{for $i=0 to ($smartyUsers|@count-1)}
						</td> 
					</tr>
					<tr>
						<td>
							<div class="media-body">
								{if $smartyUsersActive[$i]['type'] != 'administrator'}
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php?userInfo={$smartyUsersActive[$i]['userid']}&user={$smartyUsrInfo['0']['userid']}" role="button">
											{else}
											<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/profileAdminOverview.php" role="button">
											{/if}
									<h4 class="title">
										{$smartyUsers[$i]['username']}
									</h4>
								</a>
								<p class="summary">{$smartyUsers[$i]['userstatus']}</p>
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
