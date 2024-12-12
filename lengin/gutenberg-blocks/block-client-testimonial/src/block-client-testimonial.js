jQuery(document).ready(function ($) {

    $('.clientVideo').on('click', function () {
        $('.ssModal').fadeIn();
        $('body').addClass('body-hidden');
        let target = $(this).data('id');
        $('.ssModal__card').removeClass('active');
        $('#' + target).addClass('active');

        let iframe = $('.ssModal__client .ssModal__card_video iframe');
        let src = iframe[0].src.replace("autoplay=0", "autoplay=1");
        iframe[0].src = src;

        // Add GET parameter
        let targetSlugID = $(this).data('id');
        const url = new URL(window.location.href);
        url.searchParams.set('story', targetSlugID);
        window.history.pushState({}, '', url);
    });

    // Close Modal Window
    $('.ssModal__client .ssModal-close, .ssModal__client .ssModal__overlay').on('click', function () {

        $('.ssModal__client').fadeOut();
        $('body').removeClass('body-hidden');

        let iframe = $('.ssModal__client .ssModal__card_video iframe');
        let src = iframe[0].src.replace("autoplay=1", "autoplay=0");
        iframe[0].src = src;

        // Remove GET parameter
        const url = new URL(window.location.href);
        url.searchParams.delete('story');
        window.history.pushState({}, '', url);
    });

});