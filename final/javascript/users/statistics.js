$(document).ready(init);

function init() {
	var active = $("#projActive").text();
	var inactive = $("#projInactive").text();
	var requested = $("#projRequested").text();
	var invited = $("#projInvited").text();
	
	var working = $('#projWork').text();
	var finished = $('#projFinish').text();
	
	$('p').hide();
	$('.number').show();
	
	google.charts.load("current", {packages:["corechart"]});
	
    google.charts.setOnLoadCallback(drawChart);
	google.charts.setOnLoadCallback(drawChart2);
	
	if( active != 0 || inactive != 0 || requested != 0 || invited != 0){
      function drawChart() {
		active = eval(active);
		inactive = eval(inactive);
		requested = eval(requested);
		invited = eval(invited);
		
        var data = google.visualization.arrayToDataTable([
          ['Collaborations', 'Number'],
          ['Active', active],
          ['Inactive', inactive],
          ['Requested', requested],
		  ['Invited', invited]
        ]);

        var options = {
          title: 'Collaborations',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('chartUserProjdiv'));
        chart.draw(data, options);
      }
	}
	
	if( working != 0 || finished != 0){
		function drawChart2() {
		working = eval(working);
		finished = eval(finished);
		
        var data = google.visualization.arrayToDataTable([
          ['Coordinations', 'Number'],
          ['Working', working],
          ['Finished', finished]
        ]);

        var options = {
          title: 'Coordinations'
        };

        var chart = new google.visualization.PieChart(document.getElementById('projWorkdiv'));
        chart.draw(data, options);
      }
	}
}