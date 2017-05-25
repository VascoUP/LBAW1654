<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script src="{$BASE_URL}javascript/admin/statistics.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<div class="container">
	<div class="card card-container">
		<h3 class="title">Statistics</h3>
		<div class="table-container">
			<h4>Users</h4>
			<p class="number">Number of users: {$userStatistics['total']}</p>
			<h3>Users Type</h3>
			<p id="coord">{$userStatistics['coord']}</p>
			<p id="collab">{$userStatistics['userCount']}</p>
			<p id="admin">{$userStatistics['admin']}</p>
			<div id="chartdiv"></div>
			<h3>Users Status</h3>
			<p id="activeStatus">{$userStatus['activeCount']}</p>
			<p id="bannedStatus">{$userStatus['bannedCount']}</p>
			<p id="inactiveStatus">{$userStatus['inactiveCount']}</p>
			<p id="reportedStatus">{$userStatus['reportedCount']}</p>
			<div id="statusdiv"></div>
			<h4>Projects</h4>
			<p class="number">Number of projects: {$projects['total']}</p>
			<h3>Projects Status</h3>
			<p id="projectActive">{$projects['active']}</p>
			<p id="projectActive">{$projects['reported']}</p>
			<p id="projectActive">{$projects['banned']}</p>
			<div id="projdiv"></div>
			<h4>Reports</h4>
			<p class="number">Number of reports: {$reportStatistics['reports'}</p>
			<h3>Reports</h3>
			<p id="reportUser">{$reportStatistics['userCount']}</p>
			<p id="reportUser">{$reportStatistics['taskCount']}</p>
			<p id="reportUser">{$reportStatistics['threadCount']}</p>
			<p id="reportProj">{$reportStatistics['projCount']}</p>
			<div id="reportsdiv"></div>
		</div>
	</div>
</div>
<!-- Styles -->
<style>
#chartdiv, #statusdiv {
	width: 900px; height: 500px;
}							
</style>
