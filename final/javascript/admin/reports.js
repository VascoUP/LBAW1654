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
	
	$('input').keyup(function(e){
		if(e.keyCode == 13){
			var text = document.getElementById("searchSiteProj").value;
			
		    var data = {
				'text': text
			}
			
			$('#reportedh3').hide();
			$('#bannedh3').hide();
			$('#active').hide();
			$('#reported').hide();
			$('#banned').hide();
			$('#activeh3').hide();

			 $.post("../../api/searchSiteProjects.php", JSON.stringify(data))
				.done(function(data) {
					data = jQuery.parseJSON(data);
					seeSearch(data);
				})
				.fail(function(data) {
					alert("error: " + data);
				});
		}
	});
	
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
	});
}

function seeSearch(data){
	$('#tableProj').remove();
	html = "";
	if(data.length == 0)
		html += "<h3 id='activeh3'>Any projects found</h3>";
	else{
		html += "<table id='tableProj' class='table table-filter'>";
		html += "<tbody>";
		
		for(i = 0; i < data.length; i++){
			html += "<tr>";
			html += "<td>";
			html += "<div class='media'>";
			html += "<div class='media-body'>";
			html += "<a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID=" + data[i]['projectid'] + "' role='button'>";
			
			html += "<h4 class='title2'>" + data[i]['name'];
			html += "<span class='pull-right active'>" + data[i]['projectstatus'] + "</span>";
			html += "</h4>"
			html += "</a>";
			
			html += "</div>";
			
			html += "</div></td></tr>";
		}
		
		html += "</tbody></table>";
	}
	
	$('#projTable').append(html);
}