jQuery(document).ready(function ($) {
    // FAQ
    $('.faq__question').on('click', function () {
        $('.faq__question').not(this).removeClass('active');
        $(this).toggleClass('active');
        $('.faq__question').not(this).next().slideUp();
        $(this).next().slideToggle();
    });
});