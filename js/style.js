
$(function() {
    $('#overlay').hide();
    $('#is-open').click(function() {
        $('#overlay').fadeIn();
        $('#g-nav').toggleClass('show');
        $('body').toggleClass('fixed');
    });
    $('#is-close').click(function() {
        $('#overlay').fadeOut();
        $('#g-nav').removeClass('show');
        $('body').removeClass('fixed');
    });
});
