jQuery(document).ready(function ($) {

    // Accordion
    if ($(window).width() < 767) {
        $('.whyChoosing__item_wrap').on('click', function () {
            $('.whyChoosing__item_wrap').not(this).parent().removeClass('active');
            $(this).parent().toggleClass('active');

            $('.whyChoosing__item_wrap').not(this).next().slideUp();
            $(this).next().slideToggle();
        });
    }

});