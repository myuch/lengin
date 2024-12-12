jQuery(document).ready(function ($) {

    // Accordion
    if ($(window).width() < 767) {
        $('.icBlocks__item_top').on('click', function () {
            $('.icBlocks__item_top').not(this).parent().removeClass('active');
            $(this).parent().toggleClass('active');

            $('.icBlocks__item_top').not(this).next().slideUp();
            $(this).next().slideToggle();
        });
    }

});