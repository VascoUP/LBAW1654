<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">

<div class="container">
    <div class="card card-container">
        <form class="form-horizontal">
        <fieldset>
            <!-- Form Name -->
            <legend>Edit Forum</legend>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="ThreadName">Forum Name</label>
            <div class="col-md-4">
                <input id="ThreadName" name="ThreadName" type="text" placeholder="Name" class="form-control form-style input-md">
            </div>
            </div>


            <div class="form-group">
            <label class="col-md-4 control-label" for="Description">Description (max 100 words)</label>
            <div class="col-md-4">
                <textarea class="form-control form-style" rows="5" cols="30" id="Description" name="Description">Description</textarea>
            </div>
            </div>

            <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
                <a href="#" id="addTask" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Edit Iteration</a>
            </div>
            </div>

        </fieldset>
        </form>

    </div>
</div>
</div>