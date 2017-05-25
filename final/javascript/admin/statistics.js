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
	
    google.charts.setOnLoadCallback(drawChart);
	google.charts.setOnLoadCallback(drawChart2);
	
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

        var chart = new google.visualization.PieChart(document.getElementById('statusdiv'));
        chart.draw(data, options);
      }
}