$(document).ready(init);

function init() {
	$('#collabh3').hide();
	$('#coordh3').hide();
    $("#top5body").show();
	$('#projh3').show();
	$('#table-create').hide();
	
	$('input').keyup(function(e){
		if(e.keyCode == 13){
			var userID = getUrlParameter('userInfo');
			var text = document.getElementById("searchProj").value;
			
		    var data = {
				'text': text,
				'userID': userID
			}
			$('#collabh3').hide();
			$('#coordh3').hide();
			$("#top5body").hide();
			$('#projh3').hide();
			$('#table-create').hide();

			$.post("../../api/searchUserProjects.php", JSON.stringify(data))
				.done(function(data) {
					data = jQuery.parseJSON(data);
					seeSearch(data, userID);
				})
				.fail(function(data) {
					alert("error: " + data);
				});
		}
	});
	
	$("#top5").click(function() {
		$("#top5body").show();
		$('#projh3').show();
		$("#coordbody").hide();
		$("#collabbody").hide();
		$('#collabh3').hide();
		$('#coordh3').hide();
		$('#table-create').hide();
	});
	
	$("#coord").click(function() {
		$("#coordbody").show();
		$('#projh3').hide();
		$('#collabh3').hide();
		$('#coordh3').show();
		$("#top5body").hide();
		$("#collabbody").hide();
		$('#table-create').hide();
	});
	
	$("#collab").click(function() {
		$("#collabbody").show();
		$("#top5body").hide();
		$("#coordbody").hide();
		$('#projh3').hide();
		$('#collabh3').show();
		$('#coordh3').hide();
		$('#table-create').hide();
	});
}

function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

function seeSearch(data, userID){
	$('#table-create').remove();
	var html = "";

	if(data.length == 0)
		html += "<h3 id='projh3'>Any projects found</h3>";
	else{
		html += "<table id='table-create' class='table table-filter'>";
		html += "<tbody>";
		
		for(i = 0; i < data.length; i++){
			html += "<tr>";
			html += "<td>";
			html += "<div class='media'>";
			html += "<div class='media-body'>";
			html += "<a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID=" + data[i]['projectid'] + "' role='button'>";
			
			html += "<h4 class='title'>" + data[i]['name'] + "</h4>";
			html += "</a>";
			
			html += "<p class='summary'>" + data[i]['description'] + "</p>";
			html += "</div>";
			html += "<div class='profile-userbuttons'>";
			html += "<a href='https://gnomo.fe.up.pt/~lbaw1654/final/actions/projects/deleteProject.php?projID=" + data[i]['projectid'] + "&userID=" + userID + "' type='button' class='btn btn-danger btn-sm delete'>Delete Project</a>";
			html += "</div></div></td></tr>";
		}
	
		html += "</tbody></table>";
	}
	
	$('#userProjTable').append(html);
}