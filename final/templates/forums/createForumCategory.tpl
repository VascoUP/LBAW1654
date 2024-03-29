<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">

<div id='profile-content' class='profile-content'>
    <form class="form-horizontal">
        <fieldset>
            <!-- Form Name -->
            <legend>Add Category</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="categoryName">Category name</label>
                <div class="col-md-4">
                    <div class="col-md-4">
                    <input id="categoryName" name="categoryName" type="text" placeholder="Category name" class="form-control form-style input-md">
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Description">Description (max 100 words)</label>
                <div class="col-md-4">
                    <div class="col-md-4">
                    <textarea class="form-control form-style" rows="5" cols="30" id="Description" name="Description">Description</textarea>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <a href="#" id="addTask" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Add Category</a>
                </div>
            </div>

        </fieldset>
    </form>
</div>