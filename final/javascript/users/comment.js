$(document).ready(init);

function init() {
    $('.pull-right').click(function(e) {
        e.preventDefault();
        $('#middle').show();
        $('#inner_reply').show();
        clickButton();
    });
    $('#inner_comment').click(function() {
        ajaxPost();
    });
}

function clickButton() {
    $('#inner_reply').click(function() {
        ajaxPost();
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

function ajaxPost() {
    var content = $('textarea').val();
    var forumID = getUrlParameter('forumID');
	var taskID = getUrlParameter('taskID');
    var username = $("#hdnSession").text();

	if(typeof taskID === undefined || taskID === null){
		var data = {
        'username': username,
		'taskID': taskID,
        'forumID': forumID,
        'content': content
		}
    }
	else{
		var data = {
        'username': username,
        'forumID': forumID,
        'content': content
		}
	}

    $.post("../../../api/comments.php", JSON.stringify(data))
        .done(function(data) {
            data = jQuery.parseJSON(data);
            addComment(content, data);
        })
        .fail(function(data) {
            alert("error: " + data);
        });
}

function addComment(content, data) {
    var html = "";
	
	html += "<li class='clearfix'>";
    if (data['userInfo']['photo'] != null)
        html += "<img src='../../../images/users/" + data['userInfo']['photo'] + "' class='avatar' alt=''>";
	else
		html += "<img src='http://bootdey.com/img/Content/user_1.jpg' class='avatar' alt=''>";
	
    html += "<div class='post-comments'>";
    html += "<p class='meta'>" + data['date'];
    html += "<a href='#'> " + data['userInfo']['username'] + "</a>";
    html += " says : <i class='pull-right'><a href='#'><small>Reply</small></a></i></p>";
    html += "<p>" + content + "</p></div></li>";
console.log(html);
    $('.comments').append(html);
	$('#middleComment').hide();
    $('#inner_comment').hide();
}