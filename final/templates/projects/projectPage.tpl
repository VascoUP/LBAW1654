<link href="{$BASE_URL}css/pages/profile.css" rel='stylesheet'>
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel='stylesheet'>
<script type="text/javascript" src="{$BASE_URL}javascript/projects/projectPage.js"></script>
<script src="{$BASE_URL}javascript/users/confirmDelete.js"></script>

<div class='container'>
    <div class='row profile'>
        {include file="{$BASE_DIR}/templates/projects/projectSideBar.tpl"}
        <div class='col-md-9'>
            <div id='profile-content' class='profile-content'>
                <h2>
                    Description
                </h2>
                <p class='summary'>
                    {$smartyProjInfo['0']['description']}
                </p>
            </div>
        </div>
    </div>
</div>