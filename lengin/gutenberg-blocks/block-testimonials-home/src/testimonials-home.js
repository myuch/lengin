jQuery(document).ready(function ($) {

    var swiper = new Swiper("#tHomeSwiper", {
        loop: true,
        slidesPerView: 4,
        slidesPerGroup: 1,
        spaceBetween: 20,
        // centeredSlides: false,
        navigation: {
            nextEl: "#tHome-swiper-button-next",
            prevEl: "#tHome-swiper-button-prev",
        },
        pagination: {
            el: "#tHomeSwiper-pagination",
            clickable: true,
        },
        breakpoints: {
            375: {
                slidesPerView: 1,
            },
            769: {
                slidesPerView: 3,
            },
            1025: {
                slidesPerView: 4,
            }
        },

    });
    $('#tHomeSwiper').css('opacity', 1);

});