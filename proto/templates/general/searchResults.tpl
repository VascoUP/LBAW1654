<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">

<div class="container">
	<div class="card card-container">
		<div class="overlay">
			<select id="order" name="order" onchange="getResults()">
				<option value="name ASC">Alphabetical A->Z</option>
				<option value="name DESC">Alphabetical Z->A</option>
			</select>
		</div>
		<div class="table-container">
			<table class="table table-filter">
				<tbody>
					<tr>
						<td>
							<div class="media">
								<div class="media-body">
									<h4 class="title">Lorem Impsum</h4>
									<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="media">
								<div class="media-body">
									<h4 class="title">Lorem</h4>
									<p class="summary">Ut enim ad minim veniam</p>
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