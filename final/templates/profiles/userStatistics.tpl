<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="{$BASE_URL}javascript/users/statistics.js"></script>

<div class="container">
	<div class="card card-container">
	<a class='hiper' href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php?userInfo={$smartyUsrInfo['0']['userid']}">Profile</a>
		<h2 class="title">Statistics</h2>
		<div class="table-container">
			<h3>Projects</h3>
			<p class="number"><strong>Number of projects: </strong>{$userStatistics['projects']}</p>
			{if $userStatistics['projects'] != 0 }
			<h4>Projects that I collaborate</h4>
			<p class="number" id="projActive">{$userStatistics['active']}</p>
			<p class="number" id="projInactive">{$userStatistics['inactive']}</p>
			<p class="number" id="projInvited">{$userStatistics['invited']}</p>
			<p class="number" id="projRequested">{$userStatistics['requested']}</p>
			<div id="chartUserProjdiv"></div>
			<h4>Projects that I coordinate</h4>
			<p class="number" id="projWork">{$userStatistics['working']}</p>
			<p class="number" id="projFinish">{$userStatistics['finished']}</p>
			<div id="projWorkdiv"></div>
			{/if}
			<h3>Iterations and Tasks</h3>
			<h4>Iterations</h4>
			<p class="number"><strong>Number of iterations: </strong>{$userStatistics['iterations']}</p>
			<h4>Tasks</h4>
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