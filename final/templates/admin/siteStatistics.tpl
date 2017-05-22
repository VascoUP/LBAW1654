<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/profile.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<script src="{$BASE_URL}javascript/admin/statistics.js"></script>
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<div class="container">
	<div class="card card-container">
		<h3 class="title">Statistics</h3>
		<div class="table-container">
			<h4>Site Users</h4>
			<p id="coord">{$userStatistics['coord']}</p>
			<p id="collab">{$userStatistics['userCount']}</p>
			<p id="admin">{$userStatistics['admin']}</p>
			<div id="chartdiv"></div>
			<h4>Site Users Status</h4>
			<p id="activeStatus">{$userStatus['activeCount']}</p>
			<p id="bannedStatus">{$userStatus['bannedCount']}</p>
			<p id="inactiveStatus">{$userStatus['inactiveCount']}</p>
			<p id="reportedStatus">{$userStatus['reportedCount']}</p>
			<div id="statusdiv"></div>
			<h4>
		</div>
	</div>
</div>
<!-- Styles -->
<style>
#chartdiv, #statusdiv {
	height		: 160px;
	font-size	: 11px;
}							
</style>
