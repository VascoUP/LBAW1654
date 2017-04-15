<?php 
	include_once('../../config/init.php');
	$smarty->assign('style','css/pages/forms.css');
	
	$smarty->display($BASE_DIR .'templates/common/header.tpl'); 
?>

			<div class="container">
				<div class="card card-container">	
                      <h2>Contact</h2>
                            <hr>
								<form class="form-horizontal" action=" " method="" id="contact_form">
                                    <fieldset>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input name="first_name" placeholder="Username" class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                    <input name="email" placeholder="Email Address" class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div class="col-md-12 inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                    <textarea class="form-control" name="comment" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-warning pull-right">Send <span class="glyphicon glyphicon-send"></span></button>
                                            </div>
                                        </div>

                                    </fieldset>
                                </form>
							</hr>
				</div>
			</div>
		<!-- FOOTER -->
		<?php $smarty->display($BASE_DIR .'templates/common/footer.tpl'); ?>
