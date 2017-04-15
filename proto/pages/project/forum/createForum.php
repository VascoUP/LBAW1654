<?php 
	include_once('../../../config/init.php');
	$smarty->assign('style','css/pages/forms.css');
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl'); 
?>

			<div class="container">
				<div class="card card-container">
						<form class="form-horizontal">
							<fieldset>
							<!-- Form Name -->
								<legend>Create Forum</legend>

							<!-- Text input-->
								<div class="form-group">
									<label class="col-md-4 control-label" for="categoryName">Forum name</label>  
									<div class="col-md-4">
										<div class="col-md-4">
											<input id="categoryName" name="categoryName" type="text" placeholder="Forum name" class="form-control form-style input-md">
										</div>
									</div>
								</div>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="Description">Description (max 100 words)</label>
								<div class="col-md-4">   
									<div class="col-md-4">                     
										<textarea class="form-control form-style" rows="5" cols="30"  id="Description" name="Description">Description</textarea>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label" ></label>  
								<div class="col-md-4">
									<a href="#" id="addTask" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Create Forum</a>
								</div>
							</div>

							</fieldset>
						</form>

				</div>
			</div>
		</div>
		<!-- FOOTER -->
		<?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>
