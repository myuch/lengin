jQuery(document).ready(function ($) {


    var slider1 = new Swiper("#teamMContent", {
        loop: false,
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 30,
        speed: 400,
        effect: 'fade',
        allowTouchMove: false,
        // pagination: {
        //     el: "#team-pagination",
        //     clickable: true,
        // },

    });

    var slider2 = new Swiper("#teamMPhotos", {
        slidesPerGroup: 1,
        loop: false,
        spaceBetween: 30,
        speed: 400,
        navigation: {
            nextEl: "#teamM-swiper-button-next",
            prevEl: "#teamM-swiper-button-prev",
        },
        pagination: {
            el: "#teamM-pagination",
            clickable: true,
        },
        thumbs: {
            swiper: slider1,
        },
        breakpoints: {
            375: {
                slidesPerView: 1,
            },
            992: {
                slidesPerView: 3,
            },
        },
    });

});