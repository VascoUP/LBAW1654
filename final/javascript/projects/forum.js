$(document).ready(init);

function init() {

    $('#forumform').submit(function (e) {
        //
        var category = $('#categoryName').val();

        if (category.length >= 50) {
            alert("Name too long!");
            e.preventDefault();
        }
    });
}

