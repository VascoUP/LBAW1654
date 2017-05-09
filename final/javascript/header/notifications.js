$(document).ready(init);

function init() {
    $('.projAccept').click(function(e) {
        e.preventDefault();

        var parent = $(this).parent()
        var projid = parseInt($(this).siblings('.projID').text());
        var userid = parseInt($(this).siblings('.userID').text());
        console.log(id);
        // CHANGE PROJ STATUS
        ajaxPost(true);
    });

    $('.projReject').click(function(e) {
        e.preventDefault();

        var parent = $(this).parent()
        var projid = parseInt($(this).siblings('.projID').text());
        var userid = parseInt($(this).siblings('.userID').text());
        console.log(id);
        // CHANGE PROJ STATUS
        ajaxPost(false);
    });
}

function ajaxPost(acceptedVal, userid, projid) {
    $.post("api/answerInvite", { accepted: acceptedVal, userID: userid, projID: projid })
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