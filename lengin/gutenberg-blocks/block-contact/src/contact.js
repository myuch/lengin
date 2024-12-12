jQuery(document).ready(function ($) {

    $('.wpcf7-file').on('change', function () {
        var fileName = $(this).val().split('\\').pop();
        if (fileName) {
            $('.form-file-title').text(fileName);
        } else {
            $('.form-file-title').text('Attach a file');
        }
    });

    document.addEventListener('wpcf7mailsent', function (event) {

        if (event.detail.contactFormId == '549') {
            $('.modalForm__form').hide();
            $('.modalForm .contactSend').fadeIn();
        }

        if (event.detail.contactFormId == '459') {
            let contactBlockHeight = $('.contactBlock').outerHeight();
            $('.contactBlock').css('min-height', contactBlockHeight + 'px');

            $('.contact .contactForm, .contact .contactInfo').hide();
            $('.contact .contactSend, .pageContact .contactSteps').fadeIn();

            $('.contactBlock').addClass('active');

            if ($(window).width() < 1199) {
                $('.contactSteps').show();

            }
        }

    }, false);


});