<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/profile.css" rel='stylesheet'>
<link href="{$BASE_URL}css/pages/login.css" rel='stylesheet'>
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel='stylesheet'>

<div id='profile-content' class='profile-content'>
{if $smartyUsrInfo['0']['description']}
    <h2>Biography</h2>
    <p class='summary'>{$smartyUsrInfo['0']['description']}</p>
{/if}
    <br>
{if $smartyUsrInfo['0']['curriculumvitae']}
    <h3>Curriculum Vitae</h3>
    <a href="https://gnomo.fe.up.pt{$BASE_URL}documents/{$smartyUsrInfo['0']['curriculumvitae']}" download>{$smartyUsrInfo['0']['curriculumvitae']}</a>
{/if}

</div>