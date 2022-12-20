$(document).ready(function () {
    $("#menu").hide();

    $("#openMenu").click(function () {
        $("#menu").slideDown(400);
    });
    $("#closeMenu").click(function () {
        $("#menu").slideUp(400);
    });
});