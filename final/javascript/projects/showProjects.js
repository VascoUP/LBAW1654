$(document).ready(init);

function init() {
    $("#top5body").show();
	
	$("#top5").click(function() {
		$("#top5body").show();
		$("#coordbody").hide();
		$("#collabbody").hide();
	});
	
	$("#coord").click(function() {
		$("#coordbody").show();
		$("#top5body").hide();
		$("#collabbody").hide();
	});
	
	$("#collab").click(function() {
		$("#collabbody").show();
		$("#top5body").hide();
		$("#coordbody").hide();
	});
}