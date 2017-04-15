<?php 
	include_once('../../config/init.php');
	$smarty->assign('style','css/pages/forms.css');
	$smarty->assign('style','css/pages/search.css');
	$smarty->assign('style','css/templates/projectsUsers.css');
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl'); 
?>

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
		
		<!-- FOOTER -->
		<?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>
