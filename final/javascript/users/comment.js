$(document).ready(init);

function init() {
	$('.pull-right').click(function(e) {
		e.preventDefault();
		$('#middle').show();
		$('#inner_reply').show();
		clickButton();
	});
	$('#inner_comment').click(function(){
		ajaxPost();
	});
}

function clickButton(){
	$('#inner_reply').click(function(){
		ajaxPost();
	});
}

function ajaxPost(){
	var parent = $(this).parent()
    var forumid = parseInt($(this).siblings('.ForumID').text());
    var userid = parseInt($(this).siblings('.userID').text());
	var accept = true;
	
	$.post("api/comments", { accepted:accept, forumID: forumid, userID: userid})
        .done(function() {
            alert("success");
        })
        .fail(function() {
            alert("error");
        })
        .always(function() {
            alert("finished");
        });
}	