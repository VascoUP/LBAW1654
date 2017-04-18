$(document).ready(init);

function init() {
    showPart();
}

function hide() {
    $('#overviewContainer').hide();
    $('#editContainer').hide();
}

function showPart() {
    hide();
    var hash = location.hash.substr(1);
    console.log(hash);
    switch (hash) {
        case 'overview':
            $('#overviewContainer').show();
            $('#overviewOpt').class('active');
            break;
        case 'tasks':
            break;
        case 'stats':
            break;
        case 'forum':
            break;
        case 'edit':
            $('#editContainer').show();
            break;
        default:
            break;
    }
}