$(document).ready(init);

function init() {
	$('#reportedh3').hide();
	$('#bannedh3').hide();
	$('#active').show();
	$('#reported').hide();
	$('#banned').hide();
	$('#activeh3').show();
	$('#tableProj').hide();
	
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
	
	$("#button-active").click(function() {
		$("#active").show();
		$('#reported').hide();
		$('#banned').hide();
		$('#tableProj').hide();
		
		$('#activeh3').show();
		$('#reportedh3').hide();
		$('#bannedh3').hide();
	});
	
	$("#button-reported").click(function() {
		$("#active").hide();
		$('#reported').show();
		$('#banned').hide();
		$('#tableProj').hide();
		
		$('#activeh3').hide();
		$('#reportedh3').show();
		$('#bannedh3').hide();
	});
	
	$("#button-banned").click(function() {
		$("#active").hide();
		$('#reported').hide();
		$('#banned').show();
		$('#tableProj').hide();
		
		$('#activeh3').hide();
		$('#reportedh3').hide();
		$('#bannedh3').show();
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