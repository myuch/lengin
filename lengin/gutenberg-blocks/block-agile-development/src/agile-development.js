jQuery(document).ready(function ($) {


    let screenHeight = $(window).height();
    $(window).scroll(function () {
        let scrollPosition = $(window).scrollTop();

        $('.aDevelopment__item').each(function () {
            let itemPosition = $(this).offset().top;

            let itemBottom = itemPosition + $(this).outerHeight();

            if (scrollPosition + screenHeight - screenHeight / 3 >= itemPosition) {
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }
        });

    });

});