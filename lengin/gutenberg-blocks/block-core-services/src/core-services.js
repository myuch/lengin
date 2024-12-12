jQuery(document).ready(function ($) {

    // Select
    if ($('.weHelp__select').length > 0) {
        $('.weHelp__select').select2();
        $('.weHelp__select').on('select2:select', function (e) {
            let selectedValue = e.params.data.id;
            $('.weHelpTab__content_item').hide();
            $('#' + selectedValue).fadeIn();
        });
    }

    // Tabs
    if ($('.weHelpTab__nav').length > 0) {

        let weHelpTabPosition = $('.weHelpTab__nav').offset().left;
        $('.weHelpTab__nav_item').on('click', function () {
            let target = $(this).data('id');
            let targetPosition = $(this).offset().left - weHelpTabPosition;

            $('.weHelpTab__nav_item').removeClass('active');
            $('.weHelpTab__content_item').hide();
            $(this).addClass('active');
            $('#' + target).fadeIn();
            $('.weHelpTab__nav-line').css('left', targetPosition + 'px');
        });
    }

});