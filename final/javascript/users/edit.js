$(document).ready(init);

function init() {

    $('#name').submit(function(e) {
       //
        var username = $('#username').val();

        if(!isLowerCase(username)){
            alert("Invalid Username!");
            e.preventDefault();
        }
    });

    $('#password').submit(function(e) {
        //
        var pass1 = $('#pass1').val();
        var pass2 = $('#pass2').val();
        if(pass1 != pass2){
            alert("Passwords must match!");
            e.preventDefault();
        }
    });

    $('#over').submit(function(e) {
        //
        var overview = $('#overview').val();
        var size = (overview.match(/\S+/g).length);
       if(size >= 200){
            alert("Keep it short! 200 words only");
            e.preventDefault();
        }
    });
}

function isLowerCase(str){
    return(/^[a-z_\-]+$/.test(str));
}
