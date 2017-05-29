$(document).ready(init);

function init() {
    $('.projAccept').click(function(e) {
        e.preventDefault();
        var projid = $(this).parent().children('.projID').html();
        var userid = $(this).parent().children('.userID').html();
        ajaxInvitePost(true, userid, projid, $(this).parent());
    });

    $('.projReject').click(function(e) {
        e.preventDefault();
        var projid = $(this).parent().children('.projID').html();
        var userid = $(this).parent().children('.userID').html();
        ajaxInvitePost(false, userid, projid, $(this).parent());
    });

    $('.identUsername').click(function(e) {
        var userid = $(this).parent().siblings('.userID').html();
        var url = "http://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php?userID=" + userid;
        window.location.href = url;
    });

    $('.identProject').click(function(e) {
        var projid = $(this).parent().siblings('.projID').html();
        var url = "http://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID=" + projid;
        window.location.href = url;
    });
}

function ajaxInvitePost(accepted, userid, projid, element) {
    var data = {
        'accepted': accepted,
        'userid': userid,
        'projid': projid
    }
    console.log(data);
    $.post("../../api/answerInvite.php", JSON.stringify(data))
        .done(function(data) {
            $(element).remove();
            var n = parseInt($('#nNotifications').text());
            $('#nNotifications').text(n - 1);
            console.log(data);
        })
        .fail(function(data) {
            alert("Failure:\n" + data);
        });
}