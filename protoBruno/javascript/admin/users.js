$(document).ready(init);

function init() {
	$('#Userinactiveh3').hide();
	$('#Userreportedh3').hide();
	$('#Userbannedh3').hide();
	$('#tableActive').show();
	$('#Useractiveh3').show();
	$('#tableInactive').hide();
	$('#tableReported').hide();
	$('#tableBanned').hide();
	
	$("#buttontActive").click(function() {
		$('#tableActive').show();
		$('#tableInactive').hide();
		$('#tableReported').hide();
		$('#tableBanned').hide();
		
		$('#Useractiveh3').show();
		$('#Userinactiveh3').hide();
		$('#Userreportedh3').hide();
		$('#Userbannedh3').hide();
	});
	
	$("#buttontInactive").click(function() {
		$('#tableActive').hide();
		$('#tableInactive').show();
		$('#tableReported').hide();
		$('#tableBanned').hide();
		
		$('#Useractiveh3').hide();
		$('#Userinactiveh3').show();
		$('#Userreportedh3').hide();
		$('#Userbannedh3').hide();
	});
	
	$("#buttonReported").click(function() {
		$('#tableActive').hide();
		$('#tableInactive').hide();
		$('#tableReported').show();
		$('#tableBanned').hide();
		
		$('#Useractiveh3').hide();
		$('#Userinactiveh3').hide();
		$('#Userreportedh3').show();
		$('#Userbannedh3').hide();
	});
	
	$("#buttonBanned").click(function() {
		$('#tableActive').hide();
		$('#tableInactive').hide();
		$('#tableReported').hide();
		$('#tableBanned').show();
		
		$('#Useractiveh3').hide();
		$('#Userinactiveh3').hide();
		$('#Userreportedh3').hide();
		$('#Userbannedh3').show();
	});
}