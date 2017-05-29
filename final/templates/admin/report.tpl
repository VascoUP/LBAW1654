<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">

<div class="container">
    <div class="card card-container">
        <form class="form-horizontal" action="{$BASE_URL}actions/admin/report.php?
		{if $smartyUserID}
			userID={$smartyUserID}
		{elseif $smartyTaskID && $smartyProjID}
			taskID={$smartyTaskID}&projID={$smartyProjID}
		{elseif $smartyThreadID && $smartyProjID}
			threadID={$smartyThreadID}&projID={$smartyProjID}
		{elseif $smartyProjID}
			projID={$smartyProjID}
		{/if}
		" method="post" enctype="multipart/form-data">
			
            <fieldset>
            <!-- Form Name -->
            <legend class="tab">Report</legend>
			<div class="form-group">
                <label class="col-md-4 control-label" for="content">Report content (max 200 words)</label>  
                    <div class="col-md-4">                     
                        <textarea class="form-control form-style" rows="5" cols="30"  id="content" name="content"></textarea>
                        <button type="submit" class="btn btn-danger update"><span class="glyphicon glyphicon-thumbs-up"></span> Report</button>
                    </div>
            </div>		
			</fieldset>
            
		</form>
    </div>
</div>
</div>