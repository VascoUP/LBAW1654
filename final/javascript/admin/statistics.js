$(document).ready(init);

function init() {
	var coord = $("#coord").text();
	var collab = $("#collab").text();
	var admin = $("#admin").text();
	$('p').hide();
	var chart = AmCharts.makeChart( "chartdiv", {
	  "type": "pie",
	  "theme": "light",
	  "dataProvider": [ {
		"title": "Coordinator",
		"value": coord
	  }, {
		"title": "Collaborator",
		"value": collab
	  }, {
		"title": "Administrator",
		"value": admin 
	  } ],
	  "titleField": "title",
	  "valueField": "value",
	  "labelRadius": 5,

	  "radius": "42%",
	  "innerRadius": "60%",
	  "labelText": "[[title]]",
	  "export": {
		"enabled": true
	  }
	} );
}