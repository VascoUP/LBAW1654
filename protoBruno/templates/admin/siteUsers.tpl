<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">

<div class="container">
	<div class="card card-container">
		<a class='hiper' href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/profileAdminSiteUsers.php"> Site Users </a>
		<div class="overlay">
			<select id="order" name="order" onchange="getResults()">
				<option value="name ASC">Alphabetical A->Z</option>
				<option value="name DESC">Alphabetical Z->A</option>
			</select>
		</div>
		<div class="table-container">
			<table class="table table-filter">
				<tbody>
				{if $smartyUsers|@count == 0}
					<h3 id="userh3">This site doesn't have any user registered</h3>
				{else}
				{for $i=0 to ($smartyUsers|@count-1)}
					<tr>
						<td>
							<div class="media-body">
								<a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php?userInfo={$smartyUsers[$i]['userid']}" role="button">
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