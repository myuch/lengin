jQuery(document).ready(function ($) {

    let swiper = new Swiper("#aSuccessSwiper", {
        slidesPerView: 2,
        spaceBetween: 30,
        pagination: {
            el: "#aSuccess-pagination",
            clickable: true,
        },
        breakpoints: {
            375: {
                slidesPerView: 1,
            },
            991: {
                slidesPerView: 2,
            },
        }
    });

});