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
	$('#tableUsers').hide();
	$('.table-container').remove('#tableUsers');
	
	$('input').keyup(function(e){
		if(e.keyCode == 13){
			var text = document.getElementById("searchSiteUsers").value;
			
		    var data = {
				'text': text
			}
			
			$('#Userinactiveh3').hide();
			$('#Userreportedh3').hide();
			$('#Userbannedh3').hide();
			$('#tableActive').hide();
			$('#Useractiveh3').hide();
			$('#tableInactive').hide();
			$('#tableReported').hide();
			$('#tableBanned').hide();

			$.post("../../api/searchSiteUsers.php", JSON.stringify(data))
				.done(function(data) {
					data = jQuery.parseJSON(data);
					seeSearchUsers(data);
				})
				.fail(function(data) {
					alert("error: " + data);
				});
		}
	});
	
	$("#buttontActive").click(function() {
		$('#tableActive').show();
		$('#tableInactive').hide();
		$('#tableReported').hide();
		$('#tableBanned').hide();
		$('#tableUsers').hide();
		
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
		$('#tableUsers').hide();
		
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
		$('#tableUsers').hide();
		
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
		$('#tableUsers').hide();
		
		$('#Useractiveh3').hide();
		$('#Userinactiveh3').hide();
		$('#Userreportedh3').hide();
		$('#Userbannedh3').show();
	});
}

function removeUser(button){
	
	if (typeof(button) == "object") {
		var user = button.getAttribute('id');
		ajaxPostUser(user);
        $(button).closest("tr").remove();
    } else {
        return false;
    }
}

function removeProj(button){
	
	if (typeof(button) == "object") {
		var proj = button.getAttribute('id');
		ajaxPostProject(proj);
        $(button).closest("tr").remove();
    } else {
        return false;
    }
}

function seeSearchUsers(data){
	$('#tableUsers').remove();
	html = "";
	console.log(data.length);
	if(data.length == 0){
		html += "<h3 id='Useractiveh3'>Any projects found</h3>";
		$('#Useractiveh3').show();
	}
	else{
		html += "<table id='tableUsers' class='table table-filter'>";
		html += "<tbody>";
		
		for(i = 0; i < data.length; i++){
			html += "<tr>";
			html += "<td>";
			html += "<div class='media'>";
			html += "<div class='media-body'>";
			html += "<a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php?userInfo=" + data[i]['userid'] + "' role='button'>";
			
			html += "<h4 class='title2'>" + data[i]['username'];
			html += "<span class='pull-right active'>" + data[i]['userstatus'] + "</span>";
			html += "</h4>";
			html += "</a>";
			
			html += "</div>";
			
			html += "</div></td></tr>";
		}
	
		html += "</tbody></table>";
	}
	$('#usersTable').append(html);
}

function ajaxPostUser(user) {
		var data = {
			'userID': user
		}
		
    $.post("../../api/removeBanStatus.php", JSON.stringify(data))
        .done(function(data) {
            data = jQuery.parseJSON(data);
        })
		.fail(function(data) {
            alert("error: " + data);
        });
}

function ajaxPostProject(proj) {
		var data = {
			'proj': proj
		}

    $.post("../../api/removeBanStatus.php", JSON.stringify(data))
        .done(function(data) {
            data = jQuery.parseJSON(data);
        })
        .fail(function(data) {
            alert("error: " + data);
        });
}