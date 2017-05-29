$(document).ready(init);

function init() {
	$('#reportedH3').show();
	$('#tableReported').show();
	$('#tableHandled').hide();
	$('#handledH3').hide();
	$('#tableReportUsers').hide();
	$('#UserreportedH3').hide();
	$('#tableReportedTasks').hide();
	$('#reportedTaskH3').hide();
	$('#tableReportedThreads').hide();
	$('#reportedThreadH3').hide();
	$('#tableReportedProjects').hide();
	$('#reportedprojH3').hide();
	
	$("#buttontReported").click(function() {
		$('#reportedH3').show();
		$('#tableReported').show();
		$('#tableHandled').hide();
		$('#handledH3').hide();
		$('#tableReportUsers').hide();
		$('#UserreportedH3').hide();
		$('#tableReportedTasks').hide();
		$('#reportedTaskH3').hide();
		$('#tableReportedThreads').hide();
		$('#reportedThreadH3').hide();
		$('#tableReportedProjects').hide();
		$('#reportedprojH3').hide();
	});
	
	$("#buttontHandled").click(function() {
		$('#reportedH3').hide();
		$('#tableReported').hide();
		$('#tableHandled').show();
		$('#handledH3').show();
		$('#tableReportUsers').hide();
		$('#UserreportedH3').hide();
		$('#tableReportedTasks').hide();
		$('#reportedTaskH3').hide();
		$('#tableReportedThreads').hide();
		$('#reportedThreadH3').hide();
		$('#tableReportedProjects').hide();
		$('#reportedprojH3').hide();
	});
	
	$("#buttonUser").click(function() {
		$('#reportedH3').hide();
		$('#tableReported').hide();
		$('#tableHandled').hide();
		$('#handledH3').hide();
		$('#tableReportUsers').show();
		$('#UserreportedH3').show();
		$('#tableReportedTasks').hide();
		$('#reportedTaskH3').hide();
		$('#tableReportedThreads').hide();
		$('#reportedThreadH3').hide();
		$('#tableReportedProjects').hide();
		$('#reportedprojH3').hide();
	});
	
	
	$("#buttonTask").click(function() {
		$('#reportedH3').hide();
		$('#tableReported').hide();
		$('#tableHandled').hide();
		$('#handledH3').hide();
		$('#tableReportUsers').hide();
		$('#UserreportedH3').hide();
		$('#tableReportedTasks').show();
		$('#reportedTaskH3').show();
		$('#tableReportedThreads').hide();
		$('#reportedThreadH3').hide();
		$('#tableReportedProjects').hide();
		$('#reportedprojH3').hide();
	});
	
	$("#buttonThread").click(function() {
		$('#reportedH3').hide();
		$('#tableReported').hide();
		$('#tableHandled').hide();
		$('#handledH3').hide();
		$('#tableReportUsers').hide();
		$('#UserreportedH3').hide();
		$('#tableReportedTasks').hide();
		$('#reportedTaskH3').hide();
		$('#tableReportedThreads').show();
		$('#reportedThreadH3').show();
		$('#tableReportedProjects').hide();
		$('#reportedprojH3').hide();
	});
	
	$("#buttonProject").click(function() {
		$('#reportedH3').hide();
		$('#tableReported').hide();
		$('#tableHandled').hide();
		$('#handledH3').hide();
		$('#tableReportUsers').hide();
		$('#UserreportedH3').hide();
		$('#tableReportedTasks').hide();
		$('#reportedTaskH3').hide();
		$('#tableReportedThreads').hide();
		$('#reportedThreadH3').hide();
		$('#tableReportedProjects').show();
		$('#reportedprojH3').show();
	});

}

function handled(button){
	
	if (typeof(button) == "object") {
		var id = button.getAttribute('id');
		ajaxPost(id);
        $(button).closest("tr").remove();
    } else {
        return false;
    }
}

function ajaxPost(id) {
		var data = {
        'id': id
		}
    $.post("../../api/handledReports.php", JSON.stringify(data))
        .done(function(data) {
            data = jQuery.parseJSON(data);
        }).fail(function(data) {
            alert("error: " + data);
        });
}