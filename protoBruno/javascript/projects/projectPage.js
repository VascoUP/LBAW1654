$(document).ready(init);

function init() {
    tabsHandlers();
    showPart();
}

function tabsHandlers() {
    $('#projectTabs td').click(function(e) {
        window.location.hash = $(this).children('a').attr('href');
        showPart();
    });
}

function hide() {
    $('#tasksContainer').hide();
    $('#tasksOpt').toggleClass('active', false);
    $('#statsContainer').hide();
    $('#statsOpt').toggleClass('active', false);
    $('#forumContainer').hide();
    $('#forumOpt').toggleClass('active', false);
    $('#editContainer').hide();
    $('#editOpt').toggleClass('active', false);
    $('#overviewContainer').hide();
    $('#overviewOpt').toggleClass('active', false);
}

function showPart() {
    hide();
    var hash = location.hash.substr(1);
    console.log(hash);
    switch (hash) {
        case 'tasks':
            $('#tasksContainer').show();
            $('#tasksOpt').toggleClass('active', true);
            break;
        case 'stats':
            $('#statsContainer').show();
            $('#statsOpt').toggleClass('active', true);
            break;
        case 'forum':
            $('#forumContainer').show();
            $('#forumOpt').toggleClass('active', true);
            break;
        case 'edit':
            $('#editContainer').show();
            $('#editOpt').toggleClass('active', true);
            break;
        default:
            $('#overviewContainer').show();
            $('#overviewOpt').toggleClass('active', true);
            break;
    }
}