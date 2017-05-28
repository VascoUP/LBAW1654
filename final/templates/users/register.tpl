<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<div class="container">
    <div class="card card-container">
            <form class="form-horizontal" action="{$BASE_URL}actions/users/register.php" method="post">
                <fieldset>
                <!-- Form Name -->
                    <legend>Register</legend>

                    <div class="form-group">
                        <label class="col-md-4 control-label" ></label>  
                        <div class="col-md-4">
                            <button class="btn btn-block btn-social btn-linkedin" onclick="liAuth()">
								<i class="fa fa-linkedin"></i> Use Linkedin credentials
							</button>
                        </div>
                    </div>

                <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="username">Username</label>
                        <div class="col-md-4">
                            <div class="col-md-4">
                                <input id="username" name="username" type="text" placeholder="Username" class="form-control form-style input-md" value="{$FORM_VALUES.username}" required>
                                  <span class="field_error">{$FIELD_ERRORS.usernameLow}</span>
                            </div>
                        </div>
                    </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Email Address</label>
                    <div class="col-md-4">
                        <div class="col-md-4">
                            <input id="email" name="email" type="email" placeholder="Email Address" class="form-control form-style input-md" value="{$FORM_VALUES.email}" required>
                                <span class="field_error" >{$FIELD_ERRORS.username}</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-4 control-label">Password</label>
                    <div class="col-md-4">
                        <div class="col-md-4">
                            <input type="password" class="form-control form-style input-md" name="password" id="password"  placeholder="Enter your Password" required/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirm" class="col-md-4 control-label">Confirm Password</label>
                    <div class="col-md-4">
                        <div class="col-md-4">
                            <input type="password" class="form-control form-style input-md" name="confirm" id="confirm"  placeholder="Confirm your Password" required/>
                            <span class="field_error">{$FIELD_ERRORS.password}</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" ></label>
                    <div class="col-md-4">
                        <button id="create" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Register</button>
                    </div>
                </div>

                </fieldset>
            </form>
    </div>
</div>
</div>