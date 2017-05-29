<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script src="{$BASE_URL}javascript/users/confirmDelete.js"></script>

<div class="card card-container">
    <form class="form-horizontal" action="{$BASE_URL}actions/profile/editProfile.php" method="post" enctype="multipart/form-data">
        <!-- Form Name -->
        <h2>Edit Profile</h2>
        
        <fieldset>
        <!-- Form Name -->
        <legend class="tab">Username</legend>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="username">Username</label>  
                <div class="col-md-4">
                    <input id="username" name="username" type="text" placeholder="Username" class="form-control form-style input-md">
                    <button	type="submit" class="btn btn-success update"><span class="glyphicon glyphicon-thumbs-up"></span> Update Username</button>
                </div>
        </div>
        </fieldset>
    </form>

    <form class="form-horizontal" action="{$BASE_URL}actions/profile/editProfile.php" method="post" enctype="multipart/form-data">
        <fieldset>
        <!-- Form Name -->
        <legend class="tab">Email</legend>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email Address</label>  
                <div class="col-md-4">
                    <input id="email" name="email" type="text" placeholder="Email Address" class="form-control form-style input-md">
                    <button type="submit" class="btn btn-success update"><span class="glyphicon glyphicon-thumbs-up"></span> Update Email</button>
                </div>
        </div>
        </fieldset>
        </form>
        
    <form class="form-horizontal" action="{$BASE_URL}actions/profile/editProfile.php" method="post" enctype="multipart/form-data">
        <fieldset>
        <!-- Form Name -->
        <legend class="tab">Files upload</legend>
        <!-- File Button --> 
        <div class="form-group">
            <label class="col-md-4 control-label" for="upload">Upload photo</label>
                <div class="col-md-4">
                    <input id="upload" name="upload" type="file" accept=".png, .jpg, .jpeg">
                </div>
        </div>
        <div class="form-group"> 
        <label class="col-md-4 control-label" ></label> 
                <div class="col-md-4">
                    <button type="submit" class="btn btn-success update"><span class="glyphicon glyphicon-thumbs-up"></span> Update Photo</button>
                </div>
        </div>
        </fieldset>
    </form>
    <form class="form-horizontal" action="{$BASE_URL}actions/profile/editProfile.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-md-4 control-label" for="uploadCV">Upload Curriculum Vitae</label>
                <div class="col-md-4">   
                    <input id="uploadCV" name="uploadCV" type="file" accept=".pdf">
                </div>
        </div>
        <div class="form-group"> 
        <label class="col-md-4 control-label" ></label> 
                <div class="col-md-4">
                    <button type="submit" class="btn btn-success update"><span class="glyphicon glyphicon-thumbs-up"></span> Update Curriculum</button>
                </div>
        </div>
    </form>

    <form class="form-horizontal" action="{$BASE_URL}actions/profile/editProfile.php" method="post" enctype="multipart/form-data">
        <fieldset>
        <!-- Form Name -->
        <legend class="tab">Password</legend>
        <div class="form-group">
            <label for="password" class="col-md-4 control-label">Password</label>
                <div class="col-md-4">
                    <input type="password" class="form-control form-style input-md" name="password" id="password"  placeholder="Enter your Password"/>
                </div>
        </div>
        <div class="form-group">
            <label for="confirm" class="col-md-4 control-label">Confirm Password</label>
                <div class="col-md-4">
                    <input type="password" class="form-control form-style input-md" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
                    <button type="submit" class="btn btn-success update"><span class="glyphicon glyphicon-thumbs-up"></span> Update Password</button>
                </div>
        </div>
        </fieldset>
        </form>
        
        <form class="form-horizontal" action="{$BASE_URL}actions/profile/editProfile.php" method="post" enctype="multipart/form-data">
        <fieldset>
        <!-- Form Name -->
        <legend class="tab" id="tab">Overview</legend>
        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="overview">Overview (max 200 words)</label>  
                <div class="col-md-4">                     
                    <textarea class="form-control form-style" rows="5" cols="30"  id="overview" name="overview"></textarea>
                    <button type="submit" class="btn btn-success update"><span class="glyphicon glyphicon-thumbs-up"></span> Update Overview</button>
                </div>
        </div>			
        </fieldset>
        </form>
    
		{if $admin == 'administrator'}
        <br>
        <br>
		
        <form action="{$BASE_URL}actions/users/deleteAccount.php" method="post">
        <div class="form-group">
            <label class="col-md-4 control-label" ></label>  
            <div class="col-md-4">
                <button id="delete" type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-thumbs-up"></span> Delete account</button>
            </div>
        </div>
		</form>
		{/if}
</div>
</div>