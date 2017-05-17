$(document).ready(init);

function init() {
	$('#reportedh3').hide();
	$('#bannedh3').hide();
	$('#active').show();
	$('#reported').hide();
	$('#banned').hide();
	$('#activeh3').show();
	
	$("#button-active").click(function() {
		$("#active").show();
		$('#reported').hide();
		$('#banned').hide();
		
		$('#activeh3').show();
		$('#reportedh3').hide();
		$('#bannedh3').hide();
	});
	
	$("#button-reported").click(function() {
		$("#active").hide();
		$('#reported').show();
		$('#banned').hide();
		
		$('#activeh3').hide();
		$('#reportedh3').show();
		$('#bannedh3').hide();
	});
	
	$("#button-banned").click(function() {
		$("#active").hide();
		$('#reported').hide();
		$('#banned').show();
		
		$('#activeh3').hide();
		$('#reportedh3').hide();
		$('#bannedh3').show();
	});
}