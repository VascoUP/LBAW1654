<?php 
	include_once('../../../config/init.php');
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl'); 
?>
		<link href="../../../css/pages/forms.css" rel="stylesheet">
	
			<div class="container">
				<div class="card card-container">	
				
							<div class="blog-comment">
								<h3>Comments</h3>
								<ul class="comments">
									<li class="clearfix">
										<img src="http://bootdey.com/img/Content/user_1.jpg" class="avatar" alt="">
										<div class="post-comments">
											<p class="meta">Dec 18, 2014 <a href="#">JohnDoe</a> says : <i class="pull-right"><a href="#"><small>Reply</small></a></i></p>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit.
												Etiam a sapien odio, sit amet
											</p>
										</div>
								    </li>
									<li class="clearfix">
										<img src="http://bootdey.com/img/Content/user_2.jpg" class="avatar" alt="">
										<div class="post-comments">
											<p class="meta">Dec 19, 2014 <a href="#">JohnDoe</a> says : <i class="pull-right"><a href="#"><small>Reply</small></a></i></p>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit.
												Etiam a sapien odio, sit amet
											</p>
										</div>
								
										<ul class="comments">
											<li class="clearfix">
												<img src="http://bootdey.com/img/Content/user_3.jpg" class="avatar" alt="">
												<div class="post-comments">
													<p class="meta">Dec 20, 2014 <a href="#">JohnDoe</a> says : <i class="pull-right"><a href="#"><small>Reply</small></a></i></p>
													<p>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit.
														Etiam a sapien odio, sit amet
													</p>
												</div>
											</li>
										</ul>
									</li>
									<div id="second">
										<textarea class="form-control form-style" rows="5" cols="30"  id="middle" name="Reply">Reply</textarea>
										<button type="button" id="inner_reply">Reply</button>
									</div>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<script src="../../../javascript/comment.js"></script>
		
	<!-- FOOTER -->
		<?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>