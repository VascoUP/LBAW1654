$(document).ready(init);

function init() {
    $("#create").click(createProject)

    $("#clear").click(function() {
        $("#mainForm")[0].reset();
    })
}

function createProject() {
    var validSubmit = true;

    $('#mainForm').find('input').each(function() {
        if ($(this).prop('required')) {
            if ($(this).val() == "") {
                $(this).css('border-color', 'red');
                validSubmit = false;
            }
        }
    });

    if (validSubmit == true)
        $('#mainForm').submit();
}