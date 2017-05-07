$(document).ready(init);

function init() {
    $('.projAccept').click(function(e) {
        e.preventDefault();

        var parent = $(this).parent()
        var id = parseInt($(this).siblings('.projID').text());
        console.log(id);
        // CHANGE PROJ STATUS
    });

    $('.projReject').click(function(e) {
        e.preventDefault();

        var parent = $(this).parent()
        var id = parseInt($(this).siblings('.projID').text());
        console.log(id);
        // CHANGE PROJ STATUS
    });
}