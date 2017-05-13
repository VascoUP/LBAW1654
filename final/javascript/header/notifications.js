$(document).ready(init);

function init() {
    $('.projAccept').click(function(e) {
        e.preventDefault();

        var parent = $(this).parent()
        var projid = parseInt($(this).siblings('.projID').text());
        var userid = parseInt($(this).siblings('.userID').text());
        console.log(projid);
        console.log(userid);
        // CHANGE PROJ STATUS
        ajaxPost(true, projid, userid, $(this).parent());
    });

    $('.projReject').click(function(e) {
        e.preventDefault();

        var parent = $(this).parent()
        var projid = parseInt($(this).siblings('.projID').text());
        var userid = parseInt($(this).siblings('.userID').text());

        // CHANGE PROJ STATUS
        ajaxPost(false, projid, userid, $(this).parent());
    });
}

function ajaxPost(accepted, userid, projid, element) {
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