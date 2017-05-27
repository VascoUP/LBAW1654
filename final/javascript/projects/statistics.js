$(document).ready(init);

function init() {
	var thread = $("#thread").text();
	var task = $("#task").text();
	
	$('p').hide();
	$('.number').show();
	
	google.charts.load("current", {packages:["corechart"]});
	
    google.charts.setOnLoadCallback(drawChart);
	google.charts.setOnLoadCallback(drawChart2);
	
      function drawChart() {
		thread = eval(thread);
		task = eval(task);
		
        var data = google.visualization.arrayToDataTable([
          ['Project Reports', 'Number'],
          ['Thread', thread],
          ['Task', task]
        ]);

        var options = {
          title: 'Users Type',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('chartdiv'));
        chart.draw(data, options);
      }
}