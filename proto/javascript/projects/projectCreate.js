$(document).ready(new init());

function init() {
    $("#create").click(function() {
        $("form")[0].submit();
    })

    $("#clear").click(function() {
        $("form")[0].reset();
    })
}