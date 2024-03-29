
<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">

<div class="container">
    <div class="card card-container">
        <form action="{$BASE_URL}actions/projects/projectCreate.php" method="post" id="mainForm" class="form-horizontal">
        <fieldset>
            <!-- Form Name -->
            <legend>Create new project</legend>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="Name (Full name)">Project name</label>
            <div class="col-md-4">
                <div class="col-md-4">
                <input id="ProjectName" name="projName" type="text" 
                        placeholder="ex: PIU" required 
                        class="form-control form-style input-xs">
                </div>
            </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="Overview">
                Description
            </label>
            <div class="col-md-4">
                <div class="col-md-4">
                <input id="Overview" name="overview" type="text" 
                        placeholder="" 
                        class="form-control form-style input-xs">
                </div>
            </div>
            </div>

            <div class="form-group">
            <label class="col-md-4 control-label" for="Tags">Tags</label>
            <div class="col-md-4">
                <div class="col-md-4">
                <input id="tags" name="tags" type="text" 
                        placeholder="Project Tags" required
                        class="form-control form-style input-xs">
                </div>
            </div>
            </div>

            <legend></legend>

            <div class="form-group">
            <label class="col-md-4 control-label" for="Access">Control access</label>
            <div class="col-md-4">
                <div class="col-md-4">
                <select name="access" class="form-control form-style input-xs">
                    <option value="public">Public</option>
                    <option value="private">Private</option>
                </select>
                </div>
            </div>
            </div>

            <legend></legend>

            <div class="form-group">
            <label class="col-md-4 control-label" ></label>  
            <div class="col-md-4">
                <button id="create" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Create</button>
            </div>
            </div>

        </fieldset>
        </form>
    </div>
</div>