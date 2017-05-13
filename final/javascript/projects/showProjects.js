$(document).ready(init);

function init() {
    $("#top5table").show();
	$("#coordtable").hide();
	$("#collabtable").hide();
	
	$("#top5").click(function() {
		$("#top5table").show();
		$("#coordtable").hide();
		$("#collabtable").hide();
	});
	
	$("#coord").click(function() {
		console.log(1);
		$("#coordtable").show();
		$("#top5table").hide();
		$("#collabtable").hide();
	});
	
	$("#collab").click(function() {
		console.log(2);
		$("#collabtable").show();
		$("#top5table").hide();
		$("#coordtable").hide();
	});
}