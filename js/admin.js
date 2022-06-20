$(document).ready(function() {
    document.body.style.overflowY = 'scroll';
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});