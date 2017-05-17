<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<div class="container">
<div class="card card-container">	
        <h2>Contact</h2>
            <hr>
                <form class="form-horizontal" action="https://gnomo.fe.up.pt/~lbaw1654/final/actions/admin/contactUser.php?userID={$userID}" method="POST" id="contact_form">
                    <fieldset>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="first_name" placeholder="Username" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
						
						<div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input name="subject" placeholder="Subject" class="form-control" type="text">
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