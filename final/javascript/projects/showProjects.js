$(document).ready(init);

function init() {
	$('#collabh3').hide();
	$('#coordh3').hide();
    $("#top5body").show();
	$('#projh3').show();
	
	$("#top5").click(function() {
		$("#top5body").show();
		$('#projh3').show();
		$("#coordbody").hide();
		$("#collabbody").hide();
		$('#collabh3').hide();
		$('#coordh3').hide();
	});
	
	$("#coord").click(function() {
		$("#coordbody").show();
		$('#projh3').hide();
		$('#collabh3').hide();
		$('#coordh3').show();
		$("#top5body").hide();
		$("#collabbody").hide();
	});
	
	$("#collab").click(function() {
		$("#collabbody").show();
		$("#top5body").hide();
		$("#coordbody").hide();
		$('#projh3').hide();
		$('#collabh3').show();
		$('#coordh3').hide();
	});
}