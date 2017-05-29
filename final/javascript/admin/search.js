$(document).ready(init);

function init() {
	
	$('#filter').click(function(){
		var value = $( "#order option:selected" ).val();
		console.log('click');
		console.log(value);
		ajaxPost(value);
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
	console.log(search);
	console.log(value);
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
	console.log($('#tableUser').html());
	html = "";
	
	html += "<table id='tableUser' class='table table-filter'>";
	if(data['users'].length == 0)
	html += "<h4 class='title'>Any users found</h4>";

	html += "<tbody>";
	
	for(i = 0; i < data['users'].length; i++){
		html += "<tr>";
		html += "<td>";
		html += "<div class='media'>";
		html += "<div class='media-body'>";
		html += "<h4 class='title'>";
		html += "<a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/profileAdminOverview.php" + "' role='button'>";
		html += data['users'][i]['username'] + "</a></h4>";
		html += "<p class='summary'>" + data['users'][i]['email'] + "</p>";
		html += "</div></div>";
		html += "</td>";
		html += "</tr>";
	}
	
	html += "</tbody></table>";
		
	$('#containerResultsUser').append(html);
	console.log(html);
	$('#tableProject').remove();
	html = "";
	console.log(data['projects'].length);
	
	html += "<table id='tableProject' class='table table-filter'>";
	
	if(data['projects'].length == 0)
		html += "<h4 class='title'>Any projects found</h4>";

	html += "<tbody>";
		
	for(i = 0; i < data['projects'].length; i++){
		html += "<tr>";
		html += "<td>";
		html += "<div class='media'>";
		html += "<div class='media-body'>";
		html += "<h4 class='title'>";
		
		html+= "<a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID=" + data['projects'][i]['projectid'] + "' role='button'>" + data['projects'][i]['name'];
		
		html += "</a></h4>";
		
		html += "<p class='summary'>" + data['projects'][i]['description'] + "</p>";
	
		html += "</div></div>";
		html += "</td>";
		html += "</tr>";
	}

	html += "</tbody></table>";
	
	$('#containerResultsProj').append(html);
	console.log(html);
	console.log($("#users").is(":checked"));
	console.log($("#projs").is(":checked"));
	
	if($("#users").is(":checked")){
		console.log('users');
		$('#second').hide();
		$('#first').show();
	}
	else if($("#projs").is(":checked")){
		console.log('projs');
		$('#first').hide();
		$('#second').show();
	}
}