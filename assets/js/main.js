// Bottom To Top Scroll Script
jQuery(document).ready(function ($) {
    $(window).on('scroll', function () {
        let height = $(window).scrollTop();
        if(height>100){
            $('#back2Top').fadeIn();
        }else{
            $('#back2Top').fadeOut();
        }
    });
    $('#back2Top').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        return false;
    });
});