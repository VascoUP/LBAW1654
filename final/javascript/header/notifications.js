$(document).ready(init);

function init() {
    $('.projAccept').click(function(e) {
        e.preventDefault();

        var parent = $(this).parent()
        var id = parseInt($(this).siblings('.projID').text());
        console.log(id);
        // CHANGE PROJ STATUS
        ajaxPost(true);
    });

    $('.projReject').click(function(e) {
        e.preventDefault();

        var parent = $(this).parent()
        var id = parseInt($(this).siblings('.projID').text());
        console.log(id);
        // CHANGE PROJ STATUS
        ajaxPost(false);
    });
}

function ajaxPost(data) {
    $.post("api/answerInvite", { accepted: data })
        .done(function() {
            alert("second success");
        })
        .fail(function() {
            alert("error");
        })
        .always(function() {
            alert("finished");
        });
}