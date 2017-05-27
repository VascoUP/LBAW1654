<link href="{$BASE_URL}css/pages/login.css" rel="stylesheet">

<div class="container">
    <div class="card card-container">
        <div id="form-login">
            <img id="profile-img" class="profile-img-card" src="{$BASE_URL}images/assets/loginImage.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="{$BASE_URL}actions/users/login.php" method="post">
                <input type="text" id="username" 
                        name="username" class="form-control form-style"
                        placeholder="Username" 
                        {if isset($smartyUsername)}
                          value = {$smartyUsername}
                        {/if}
                        required>
                <input type="password" id="password" 
                        name="password" class="form-control form-style" 
                        placeholder="Password" 
                        required>
                <div id="remember" class="checkbox">
                    <label>
                      <input id="remember" type="checkbox" 
                              value="remember" name="remember" {if isset($smartyCkeck)}{$smartyCkeck}{/if}>Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
				</form>
                <button class="btn btn-block btn-social btn-linkedin" onclick="liAuth()">
                    <i class="fa fa-linkedin"></i> Sign in with LinkedIn
                </button>
				
            
            <a href="#" class="forgot-password">
              Forgot the password?
            </a>
        </div>
        <div id="form-olvidado">
            <h4 class="">
                Forgot the password?
            </h4>
            <form accept-charset="UTF-8" role="form" id="login-recordar" action="{$BASE_URL}actions/users/sendEmail.php" method="post">
                <fieldset>
                    <span class="help-block">
                      <p>Email address you use to log in to your account</p>
                      <p>We'll send you an email with instructions to choose a new password.</p>
                    </span>
                    <div class="form-group input-group">
                        <span class="input-group-addon">@</span>
                        <input class="form-control" placeholder="Email" name="email" type="email" required="">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" id="btn-olvidado">
                      Continue
                    </button>
                    <p class="help-block">
                        <a class="text-muted" href="#" id="acceso"><small>Account Access</small></a>
                    </p>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</div>