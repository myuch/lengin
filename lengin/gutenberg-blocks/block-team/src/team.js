jQuery(document).ready(function ($) {



    var slider2 = new Swiper("#team-photos-swiper", {
        slidesPerGroup: 1,
        loop: false,
        spaceBetween: 30,
        speed: 400,
        navigation: {
            nextEl: "#team-swiper-button-next",
            prevEl: "#team-swiper-button-prev",
        },
        pagination: {
            el: "#team-pagination",
            clickable: true,
        },
        breakpoints: {
            375: {
                slidesPerView: 1,
            },
            500: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
        },
    });

});