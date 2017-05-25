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
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['User Type', 'Number'],
          ['Administrator', admin],
          ['Collaborator', collab],
          ['Coordinator',  coord]
        ]);

        var options = {
          title: 'Users Type',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('chartdiv'));
        chart.draw(data, options);
      }
}