$(document).ready(init);

function init() {
    $('#request').click(function() {
        requestProject(1);
    });
}

function requestProject(projid) {
    var data = {
        'projid': projid
    }
    $.post("../../api/answerInvite.php", JSON.stringify(data))
        .done(function(data) {
            $('#request').attr("disabled", true);
            $('#request').attr("value", "Requested");
        })
        .fail(function(data) {
            alert("Failure:\n" + data);
        });
}