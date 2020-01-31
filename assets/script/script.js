$('#arenaVisibility').hide();

$('#fight').click(function () {
    $('#arenaVisibility').show();
    $('#selectVisibility').hide();
});

$('#returnSelect').click(function () {
    $('#selectVisibility').show();
    $('#arenaVisibility').hide();
});