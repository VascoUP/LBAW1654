$(document).ready(init);

function init() {
	var coord = $("#coord").text();
	var collab = $("#collab").text();
	var admin = $("#admin").text();
	
	var active = $('#activeStatus').text();
	var inactive = $('#inactiveStatus').text();
	var banned = $('#bannedStatus').text();
	var reported = $('#reportedStatus').text();
	console.log(reported);
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
	
	var chart2 = AmCharts.makeChart( "statusdiv", {
	  "type": "pie",
	  "theme": "light",
	  "dataProvider": [ {
		"title": "Active",
		"value": active
	  }, {
		"title": "Inactive",
		"value": inactive
	  }, {
		"title": "Reported",
		"value": reported 
	  }, {
		"title": "Banned",
		"value": banned 
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