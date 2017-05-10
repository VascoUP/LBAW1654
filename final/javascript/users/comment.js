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
	var content = $('textarea').val();
	var accept = true;
	
	var data = {
        'accepted': accept,
        'content': content
    }
	
	$.post("../../../api/comments.php", JSON.stringify(data))
        .done(function() {
            alert("success");
        })
        .fail(function() {
            alert("error");
        });
}