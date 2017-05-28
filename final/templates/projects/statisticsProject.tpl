<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/statistics.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="{$BASE_URL}javascript/projects/statistics.js"></script>

<div class="container">
	<div class="card card-container">
	<a class='hiper' href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID={$projID}">Project</a>
		<h3 class="title">Statistics</h3>
		<div class="table-container">
			<h4>Main Information</h4>
			<p class="number"><strong>Number of Iterations: </strong>{$numberOf['iterations']}</p>
			<p class="number"><strong>Number of Tasks: </strong>{$numberOf['tasks']}</p>
			<p class="number"><strong>Number of Forums: </strong>{$numberOf['threads']}</p>
			<p class="number"><strong>Number of Tasks completed per Iteration: </strong>{$tasksIteration}</p>
			{if $reports['thread'] == 0 && $reports['task'] == 0}
			<p class="number"><strong>Number of reported tasks or threads:</strong> 0</p>
			{else}
			<h3>Reports</h3>
			<p id="thread">{$reports['thread']}</p>
			<p id="task">{$reports['task']}</p>
			<div id="chartdiv"></div>
			{/if}
		</div>
	</div>
</div>
</div>
