<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="{$BASE_URL}javascript/users/statistics.js"></script>

<div class="container">
	<div class="card card-container">
	<a class='hiper' href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php?userInfo={$smartyUsrInfo['0']['userid']}">Profile</a>
		<h3 class="title">Statistics</h3>
		<div class="table-container">
			<h4>Projects</h4>
			<p class="number"><strong>Number of projects: </strong>{$userStatistics['projects']}</p>
			{if $userStatistics['projects'] != 0 }
			<h3>Projects that I collaborate</h3>
			<p id="projActive">{$userStatistics['active']}</p>
			<p id="projInactive">{$userStatistics['inactive']}</p>
			<p id="projInvited">{$userStatistics['invited']}</p>
			<p id="projRequested">{$userStatistics['requested']}</p>
			<div id="chartUserProjdiv"></div>
			<h3>Projects that I coordinate</h3>
			<p id="projWork">{$userStatistics['working']}</p>
			<p id="projFinish">{$userStatistics['finished']}</p>
			<div id="projWorkdiv"></div>
			{/if}
			<h4>Iterations and Tasks</h4>
			<h3>Iterations</h3>
			<p class="number"><strong>Number of iterations: </strong>{$userStatistics['iterations']}</p>
			<h3>Tasks</h3>
			<p class="number"><strong>Number of tasks: </strong>{$userStatistics['tasks']}</p>
		</div>
	</div>
</div>
<!-- Styles -->
<style>
#chartdiv, #statusdiv {
	width: 430px; height: 300px;
}							
</style>