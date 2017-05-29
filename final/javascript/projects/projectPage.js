$(document).ready(init);

function init() {
    $('#request').click(function() {
        requestProject($('#projectid').html());
    });
}

function requestProject(projid) {
    var data = {
        'projid': projid
    }
    $.post("../../api/requestProject.php", JSON.stringify(data))
        .done(function(data) {
            console.log(data);
            $('#request').attr("disabled", true);
            $('#request').attr("value", "Requested");
        })
        .fail(function(data) {
            alert("Failure:\n" + data);
        });
}