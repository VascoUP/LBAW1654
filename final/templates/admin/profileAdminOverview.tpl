<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/profile.css" rel='stylesheet'>
<link href="{$BASE_URL}css/pages/login.css" rel='stylesheet'>
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel='stylesheet'>

<div id='profile-content' class='profile-content'>
{if !$smartyUsrInfo['0']['description'] && !$smartyUsrInfo['0']['curriculumvitae']}
	<h3 id="without">   This place is destined to show the biography and curriculum vitae of the administrator  </h3>
{/if}
{if $smartyUsrInfo['0']['description']}
    <h2>Biography</h2>
    <p class='summary'>{$smartyUsrInfo['0']['description']}</p>
{/if}
    <br>
{if $smartyUsrInfo['0']['curriculumvitae']}
    <h2>Curriculum Vitae</h2>
    <a href="https://gnomo.fe.up.pt{$BASE_URL}documents/{$smartyUsrInfo['0']['curriculumvitae']}" download>{$smartyUsrInfo['0']['curriculumvitae']}</a>
{/if}
</div>