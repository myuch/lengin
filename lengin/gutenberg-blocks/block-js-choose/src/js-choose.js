jQuery(document).ready(function ($) {

    if ($(window).width() > 1300) {

        var swiper = new Swiper("#jsChooseSwiper", {
            loop: true,
            spaceBetween: 30,
            slidesPerGroup: 1,
            navigation: {
                nextEl: "#jsChoose-swiper-button-next",
                prevEl: "#jsChoose-swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                991: {
                    slidesPerView: 3,
                }
            },

        });
        $('#jsChooseSwiper').css('opacity', 1);
    }

    // Accordion
    if ($(window).width() < 767) {



        $('.jsChoose__item_top').on('click', function () {
            $('.jsChoose__item_top').not(this).parent().removeClass('active');
            $(this).parent().toggleClass('active');

            $('.jsChoose__item_top').not(this).next().slideUp();
            $(this).next().slideToggle();
        });
    }

});