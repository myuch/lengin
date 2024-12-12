jQuery(document).ready(function ($) {

    let swiper = new Swiper("#lastPostsSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: "#lastPosts-pagination",
            clickable: true,
        },
        breakpoints: {
            375: {
                slidesPerView: 1,
            },
            766: {
                slidesPerView: 2,
            },
            1025: {
                slidesPerView: 3,
            }
        }
    });


});