$(document).ready(init);

function init() {
    $('.projAccept').click(function(e) {
        e.preventDefault();
        var projid = getProjId(this);
        var userid = getUserId(this);
        ajaxInvitePost(false, projid, userid, $(this).parent());
    });

    $('.projReject').click(function(e) {
        e.preventDefault();
        var projid = getProjId(this);
        var userid = getUserId(this);
        ajaxInvitePost(true, projid, userid, $(this).parent());
    });

    $('.identUsername').click(function(e) {
        var userid = $(this).parent().siblings('.userID').text();
        var url = "http://gnomo.fe.up.pt/~lbaw1654/final/pages/profile/profileUserOverview.php?userID=" + userid;
        window.location.href = url;
    });

    $('.identProject').click(function(e) {
        var projid = $(this).parent().siblings('.projID').text();
        var url = "http://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID=" + projid;
        window.location.href = url;
    });
}

function getUserId(element) {
    var userid = parseInt($(this).siblings('.userID').text());
}

function getProjId(element) {
    var projid = parseInt($(this).siblings('.projID').text());
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