<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="{$BASE_URL}javascript/projects/statistics.js"></script>

<div class="container">
	<div class="card card-container">
		<h3 class="title">Statistics</h3>
		<div class="table-container">
			<h4>Main Information</h4>
			<p class="number">Number of Iterations: {$numberOf['iterations']}</p>
			<p class="number">Number of Tasks: {$numberOf['tasks']}</p>
			<p class="number">Number of Forums: {$numberOf['threads']}</p>
			<br>
			<p class="number">Number of Tasks completed per Iteration: {$tasksIteration}</p>
			
			<h3>Reports</h3>
			<p id="thread">{$reports['thread']}</p>
			<p id="task">{$reports['task']}</p>
			<div id="chartdiv"></div>
		</div>
	</div>
</div>
<!-- Styles -->
<style>
#chartdiv, #statusdiv {
	width: 430px; height: 300px;
}							
</style>
