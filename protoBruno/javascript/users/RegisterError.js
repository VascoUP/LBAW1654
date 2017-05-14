$('#create').click(function () {
    $.ajax({
        type: "post",
        dataType: 'json',
        url: "../../actions/users/register.php",
        data: {}
    }).done(function (data) {
        var value=JSON.parse(data);
        console.log(value);
        console.log("fds");
    });
});