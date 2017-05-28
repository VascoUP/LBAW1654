<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="{$BASE_URL}javascript/admin/statistics.js"></script>

<div class="container">
	<div class="card card-container">
	<a class='hiper' href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/profileAdminOverview.php">Profile</a>
		<h2 class="title">Statistics</h2>
		<div class="table-container">
			<h3>Users</h3>
			<p class="number"><strong>Number of users: </strong>{$userStatistics['total']}</p>
			{if $userStatistics['total'] != 0 }
			<h4>Users Type</h4>
			<p id="coord">{$userStatistics['coord']}</p>
			<p id="collab">{$userStatistics['userCount']}</p>
			<p id="admin">{$userStatistics['admin']}</p>
			<div id="chartdiv"></div>
			<p id="activeStatus">{$userStatus['activeCount']}</p>
			<p id="bannedStatus">{$userStatus['bannedCount']}</p>
			<p id="inactiveStatus">{$userStatus['inactiveCount']}</p>
			<p id="reportedStatus">{$userStatus['reportedCount']}</p>
			<div id="statusdiv"></div>
			{/if}
			<h3>Projects</h3>
			<p class="number"><strong>Number of projects: </strong>{$projects['total']}</p>
			{if $projects['total'] != 0}
			<h4>Projects Status</h4>
			<p id="projectActive">{$projects['active']}</p>
			<p id="projectActive">{$projects['reported']}</p>
			<p id="projectActive">{$projects['banned']}</p>
			<div id="projdiv"></div>
			{/if}
			<h3>Reports</h3>
			<p class="number"><strong>Number of reports: </strong>{$reportStatistics['reports']}</p>
			{if $reportStatistics['reports'] != 0} 
			<h4>Reports Type</h4>
			<p id="reportUser">{$reportStatistics['userCount']}</p>
			<p id="reportUser">{$reportStatistics['taskCount']}</p>
			<p id="reportUser">{$reportStatistics['threadCount']}</p>
			<p id="reportProj">{$reportStatistics['projCount']}</p>
			<div id="reportsdiv"></div>
			{/if}
		</div>
	</div>
</div>
<!-- Styles -->
<style>
#chartdiv, #statusdiv {
	width: 430px; height: 300px;
}							
</style>
