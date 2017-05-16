$(document).keypress(init);

function init(){
	var text = $('input').val();
   var data = {
        'text': text
    }
	
    $.post("../../api/searchSiteProjects.php", JSON.stringify(data))
        .done(function(data) {
            data = jQuery.parseJSON(data);
            seeSearch(data);
        })
        .fail(function(data) {
            alert("error: " + data);
        });
};

function seeSearch(data){
	var html = "";
	if(data.legth == 0)
		html += "<h3 id='activeh3'>Any projects found</h3>";
	else{
		html += "<table class='table table-filter'>";
		html += "<tbody>";
	}
											
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
	
	$('.table-container').append(html);
}