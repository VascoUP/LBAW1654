<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">

<div class="card card-container">
	<div class="table-container">
		<table class="table table-filter">
			<tbody>
			{if $projects|@count == 0}
				<h3 id="projectUserh3">This user doesn't have any project created</h3>
			{else}
				{for $i=0 to ($projects|@count-1)}
					<tr>
						<td>
							<div class="media-body">
								<a href="https://gnomo.fe.up.pt{$BASE_URL}pages/project/projectPage.php?projID={$projects[$i]['projectid']}" role="button">
									<h4 class="title">{$projects[$i]['name']}</h4>
								</a>
								<p class="summary">{$projects[$i]['description']}</p>
							</div>
						</td>
					</tr>
				{/for}
			{/if}
			</tbody>
		</table>
	</div>
</div>