function lol() {

    $('#create').click(function () {

        var email= $('#email').val();
        var username = $('#username').val();
        var password= $('#password').val();
        var confirm=$('#confirm').val();

        console.log("click");
        console.log(email);
        $.ajax({
            type: "post",
            dataType: 'json',
            url: "../../actions/users/register.php",
            data: {email:email,username:username,password:password,confirm:confirm}
        }).done(function (data) {
            var value= data;
            console.log(value);
            console.log("fds");
        }).fail(function () {
            console.log("fail");
        });
    });
}

$(document).ready(lol);