$(document).ready(init);

function init() {
    $('.projAccept').click(function(e) {
        projAccept(e);
    });

    $('.projReject').click(function(e) {
        projReject(e);
    });
}

function projAccept(e) {
    e.preventDefault();

    var parent = $(this).parent()
    var projid = parseInt($(this).siblings('.projID').text());
    var userid = parseInt($(this).siblings('.userID').text());

    ajaxInvitePost(true, projid, userid, $(this).parent());
}

function projReject(e) {
    e.preventDefault();

    var parent = $(this).parent()
    var projid = parseInt($(this).siblings('.projID').text());
    var userid = parseInt($(this).siblings('.userID').text());

    ajaxInvitePost(false, projid, userid, $(this).parent());
}

function ajaxInvitePost(accepted, userid, projid, element) {
    var data = {
        'accepted': accepted,
        'userid': userid,
        'projid': projid
    }
    $.post("../../api/answerInvite.php", JSON.stringify(data))
        .done(function(data) {
            $(element).remove();
            var n = parseInt($('#nNotifications').text());
            console.log(n);
            $('#nNotifications').text(n - 1);
        })
        .fail(function(data) {
            alert("Failure:\n" + data);
        });
}