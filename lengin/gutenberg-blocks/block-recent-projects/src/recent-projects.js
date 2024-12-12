jQuery(document).ready(function ($) {

    if ($(window).width() > 1199) {
        let windowWidth = $(window).width();
        let containerWidth = $('.rProjects .container').width();
        let targetPadding = (windowWidth - containerWidth) / 2;
        $('.rProjects .wrapper #rProjectsSwiper').css('padding-left', targetPadding + 'px');
    }

    var swiper = new Swiper("#rProjectsSwiper", {
        loop: false,
        // slidesPerGroup: 1,
        spaceBetween: 30,
        // centeredSlides: false,
        navigation: {
            nextEl: "#rProjects-swiper-button-next",
            prevEl: "#rProjects-swiper-button-prev",
        },
        pagination: {
            el: "#rProjects-pagination",
            clickable: true,
        },
        breakpoints: {
            375: {
                slidesPerView: 1,
            },
            769: {
                slidesPerView: 2,
            },
            1199: {
                slidesPerView: "auto",
            }
        },

    });
    $('#rProjectsSwiper').css('opacity', 1);

});