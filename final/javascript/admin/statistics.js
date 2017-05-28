$(document).ready(init);

function init() {
	var coord = $("#coord").text();
	var collab = $("#collab").text();
	var admin = $("#admin").text();
	
	var active = $('#activeStatus').text();
	var inactive = $('#inactiveStatus').text();
	var banned = $('#bannedStatus').text();
	var reported = $('#reportedStatus').text();
	
	var projActive = $('#projectActive').text();
	var projReported = $('#projectReported').text();
	var projBanned = $('#projectBanned').text();
	
	var reportUser = $('#reportUser').text();
	var reportTask = $('#reportTask').text();
	var reportThread = $('#reportThread').text();
	var reportProj = $('#reportProj').text();

	$('p').hide();
	$('.number').show();
	
	google.charts.load("current", {packages:["corechart"]});
	
	if( admin != 0 || collab != 0 || coord != 0){
		google.charts.setOnLoadCallback(drawChart);
	
		function drawChart() {
			admin = eval(admin);
			collab = eval(collab);
			coord = eval(coord);
			
			var data = google.visualization.arrayToDataTable([
			  ['User Type', 'Number'],
			  ['Administrator', admin],
			  ['Collaborator', collab],
			  ['Coordinator', coord]
			]);

			var options = {
			  title: 'Users Type',
			  pieHole: 0.4,
			};

			var chart = new google.visualization.PieChart(document.getElementById('chartdiv'));
			chart.draw(data, options);
      }
	}

	if( projActive != 0 || projReported != 0 || projBanned != 0 ){
		google.charts.setOnLoadCallback(drawChart2);
		function drawChart2() {
			projActive = eval(projActive);
			projReported = eval(projReported);
			projBanned = eval(projBanned);
			
			var data = google.visualization.arrayToDataTable([
			  ['Projects Status', 'Number'],
			  ['Active', projActive],
			  ['Reported', projReported],
			  ['Banned', projBanned]
			]);

			var options = {
			  title: 'Projects Status'
			};

			var chart = new google.visualization.PieChart(document.getElementById('projdiv'));
			chart.draw(data, options);
      }
	}
	
	if( active != 0 || inactive != 0 || banned != 0 || reported != 0 ){
		google.charts.setOnLoadCallback(drawChart3);
		function drawChart3() {
			active = eval(active);
			inactive = eval(inactive);
			reported = eval(reported);
			banned = eval(banned);
			
			var data = google.visualization.arrayToDataTable([
			  ['User Status', 'Number'],
			  ['Active', active],
			  ['Inactive', inactive],
			  ['Reported', reported],
			  ['Banned', banned]
			]);

			var options = {
			  title: 'User Status'
			};

			var chart = new google.visualization.PieChart(document.getElementById('statusdiv'));
			chart.draw(data, options);
		}
	}
	
	if( reportUser != 0 || reportTask != 0 || reportThread != 0 || reportProj != 0){
		google.charts.setOnLoadCallback(drawChart4);
		
		function drawChart4() {
			reportUser = eval(reportUser);
			reportTask = eval(reportTask);
			reportThread = eval(reportThread);
			reportProj = eval(reportProj);
			
			var data = google.visualization.arrayToDataTable([
			  ['Reports Type', 'Number'],
			  ['User', reportUser],
			  ['Task', reportTask],
			  ['Thread', reportThread],
			  ['Project', reportProj]
			]);

			var options = {
			  title: 'Reports Type',
			  pieHole: 0.4
			};

			var chart = new google.visualization.PieChart(document.getElementById('reportsdiv'));
			chart.draw(data, options);
		}
	}
}