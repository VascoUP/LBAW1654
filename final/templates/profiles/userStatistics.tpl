<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="{$BASE_URL}javascript/users/statistics.js"></script>

<div class="container">
	<div class="card card-container">
		<h3 class="title">Statistics</h3>
		<div class="table-container">
			<h4>Projects</h4>
			<p class="number">Number of projects: {$userStatistics['projects']}</p>
			<h3>Projects that I collaborate</h3>
			<p id="projActive">{$userStatistics['active']}</p>
			<p id="projInactive">{$userStatistics['inactive']}</p>
			<p id="projInvited">{$userStatistics['invited']}</p>
			<p id="projRequested">{$userStatistics['requested']}</p>
			<div id="chartUserProjdiv"></div>
			<h3>Projects that I coordinate</h3>
			<p id="projWork">{$projects['working']}</p>
			<p id="projFinish">{$projects['finished']}</p>
			<div id="projWorkdiv"></div>
			<h4>Iterations and Tasks</h4>
			<h3>Iterations</h3>
			<p class="number">Number of iterations: {$userStatistics['iterations']}</p>
			<h3>Tasks</h3>
			<p class="number">Number of tasks: {$userStatistics['task']}</p>
		</div>
	</div>
</div>
<!-- Styles -->
<style>
#chartdiv, #statusdiv {
	width: 430px; height: 300px;
}							
</style>