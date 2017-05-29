$(document).ready(init);

function init() {
    console.log("sup");
    $('#name').submit(function(e) {
       //
        var username = $('#username').val();
        console.log(username);
        if(username == "vasco"){
            alert("Failure:\n");
            e.preventDefault();
        }
    });
}

/*
function ajaxNamePost(username) {
    var data = {
        'username': username
    }
    console.log(data);
    $.post("../../api/userEdit.php", JSON.stringify(data))
        .done(function(data) {
        })
        .fail(function(data) {
            alert("Failure:\n" + data);
        });
}
*/