jQuery(document).ready(function ($) {

    // Accordion
    if ($(window).width() < 767) {
        $('.samCard__top').on('click', function () {
            $('.samCard__top').not(this).parent().removeClass('active');
            $(this).parent().toggleClass('active');

            $('.samCard__top').not(this).next().slideUp();
            $(this).next().slideToggle();
        });
    }

});