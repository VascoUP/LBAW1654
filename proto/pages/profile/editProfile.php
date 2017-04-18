<?php 
	include_once('../../config/init.php');
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl'); 
?>
		<link href="../../css/pages/forms.css" rel="stylesheet">
		<link href="../../css/bootstrap/bootstrap-social.css" rel="stylesheet">
			<div class="container">
				<div class="card card-container">
					<form class="form-horizontal" action="../../actions/editProfile.php" method="post">
						<fieldset>
							<!-- Form Name -->
							<legend>Edit Profile</legend>

							<div class="form-group">
									<label class="col-md-4 control-label" ></label>  
									<div class="col-md-4">
										<a class="btn btn-block btn-social btn-linkedin">
											<i class="fa fa-linkedin"></i> Link to Linkedin
										</a>
									</div>
								</div>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="username">Username</label>  
								<div class="col-md-4">
									<div class="col-md-4">
										<input id="username" name="username" type="text" placeholder="Username" class="form-control form-style input-md">
									</div>
								</div>
							</div>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="email">Email Address</label>  
								<div class="col-md-4">
									<div class="col-md-4">
										<input id="email" name="email" type="text" placeholder="Email Address" class="form-control form-style input-md">
									</div>
								</div>
							</div>

							<!-- File Button --> 
							<div class="form-group">
								<label class="col-md-4 control-label" for="upload">Upload photo</label>
								<div class="col-md-4">   
									<div class="col-md-4">
										<input id="upload" name="upload" class="input-file" type="file" accept=".png, .jpg, .jpeg">
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label" for="uploadCV">Upload Curriculum Vitae</label>
								<div class="col-md-4">
									<div class="col-md-4">   
										<input id="uploadCV" name="uploadCV" class="input-file" type="file" accept=".pdf">
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="password" class="col-md-4 control-label">Password</label>
								<div class="col-md-4">
									<div class="col-md-4">
										<input type="password" class="form-control form-style input-md" name="password" id="password"  placeholder="Enter your Password"/>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="confirm" class="col-md-4 control-label">Confirm Password</label>
								<div class="col-md-4">
									<div class="col-md-4">
										<input type="password" class="form-control form-style input-md" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
									</div>
								</div>
							</div>	

							<!-- Textarea -->
							<div class="form-group">
								<label class="col-md-4 control-label" for="overview">Overview (max 200 words)</label>
								<div class="col-md-4">   
									<div class="col-md-4">                     
										<textarea class="form-control form-style" rows="5" cols="30"  id="overview" name="overview">Overview</textarea>
									</div>
								</div>
							</div>						
							<div class="form-group">
								<label class="col-md-4 control-label" ></label>  
								<div class="col-md-4">
									<button id="update" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Update</button>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" ></label>  
								<div class="col-md-4">
									<a href="https://gnomo.fe.up.pt/~lbaw1654/proto/actions/projects/delete.php" role="button" id="update" class="btn btn-danger"><span class="glyphicon glyphicon-thumbs-up" value=""></span> Delete account</a>
								</div>
							</div>

						</fieldset>
					</form>
				</div>
			</div>

		</div>
		<!-- FOOTER -->
		<?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>