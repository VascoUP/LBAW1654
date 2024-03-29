<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/statistics.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="{$BASE_URL}javascript/users/statistics.js"></script>

<div class="card card-container">
		<h2 class="title">Statistics</h2>
		<div class="table-container">
			<h3>Projects</h3>
			<p class="number"><strong>Number of projects: </strong>{$userStatistics['projects']}</p>
		{if $userStatistics['projects'] != 0 }
			{if $userStatistics['active'] + $userStatistics['inactive'] + $userStatistics['invited'] + $userStatistics['requested'] != 0}
				<h4>Projects that I collaborate</h4>
				<p id="projActive">{$userStatistics['active']}</p>
				<p id="projInactive">{$userStatistics['inactive']}</p>
				<p id="projInvited">{$userStatistics['invited']}</p>
				<p id="projRequested">{$userStatistics['requested']}</p>
				<div id="chartUserProjdiv"></div>
			{/if}
			{if $userStatistics['working'] != 0 || $userStatistics['finished'] != 0}
				<h4>Projects that I coordinate</h4>
				<p id="projWork">{$userStatistics['working']}</p>
				<p id="projFinish">{$userStatistics['finished']}</p>
				<div id="projWorkdiv"></div>
			{/if}
		{/if}
			<h3>Iterations and Tasks</h3>
			<p class="number"><strong>Number of iterations: </strong>{$userStatistics['iterations']}</p>
			<p class="number"><strong>Number of tasks: </strong>{$userStatistics['tasks']}</p>
		</div>
</div>
