$(document).ready(init);

function init() {
    $("span").click(editProject)
}

function editProject() {
    var validSubmit = true;

    $('form').find('input').each(function() {
        if ($(this).prop('required')) {
            if ($(this).val() == "") {
                $(this).css('border-color', 'red');
                validSubmit = false;
            }
        }
    });
	$('form').find('textearea').each(function() {
        if ($(this).prop('required')) {
            if ($(this).val() == "") {
                $(this).css('border-color', 'red');
                validSubmit = false;
            }
        }
    });

    if (validSubmit == true)
        $('form').submit();
}