$(document).ready(init);

function init() {
	
	$('#filter').click(function(){
		var value = $( "#order option:selected" ).val();

		ajaxPost(value);
		
		if($("checkbox #users").is(":checked"))
			$('#tableProject').hide();
		else if($("checkbox #projs").is(":checked"))
			$('#tableUser').hide();
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

function ajaxPost(value) {
	var search = getUrlParameter('search');
	
	var data = {
		'search' : search,
		'value': value
	}
	
	$.post("../../api/search.php", JSON.stringify(data))
		.done(function(data) {
			data = jQuery.parseJSON(data);
			seeSearch(data);
		})
		.fail(function(data) {
			alert("error: " + data);
		});
			
}

function seeSearch(data){
	$('#tableUser').remove();
	html = "";
	
	if(data['users'].length == 0)
		html += "<h4 class='title'>Any users found</h4>";

	else{
		html += "<table id='tableUser' class='table table-filter'>";
		html += "<tbody>";
		
		for(i = 0; i < data.length; i++){
			html += "<tr>";
			html += "<td>";
			html += "<div class='media'>";
			html += "<div class='media-body'>";
			html += "<h4 class='title'>";
			
			if(data['users'][i]['type'] != admin)
				
				html += "<a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php?searchUser=" + data['users'][i]['userid'] + "' role='button'>";
			
			else
				html += "<a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/profileAdminOverview.php" + "' role='button'>";
			
			html += "<p class='summary'>" + data['users'][i]['email'] + "</p>";
			html += "</div></div>";
			html += "</td>";
			html += "</tr>";
		}
	
		html += "</tbody></table>";
	}
	$('.table-container').append(html);
	
	$('#tableProject').remove();
	html = "";
	
	if(data['users'].length == 0)
		html += "<h4 class='title'>Any users found</h4>";

	else{
		html += "<table id='tableProject' class='table table-filter'>";
		html += "<tbody>";
		
		for(i = 0; i < data.length; i++){
			html += "<tr>";
			html += "<td>";
			html += "<div class='media'>";
			html += "<div class='media-body'>";
			html += "<h4 class='title'>";
			
			html+= "<a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID=" + data['projects'][i]['projectid'] + ">"  + data['projects'][i]['name'] + "</a></h4>";
			
			html += "<p class='summary'>" + data['projects'][i]['description'] + "</p>";
		
			html += "</div></div>";
			html += "</td>";
			html += "</tr>";
		}
	
		html += "</tbody></table>";
	}
	$('.table-container').append(html);
}