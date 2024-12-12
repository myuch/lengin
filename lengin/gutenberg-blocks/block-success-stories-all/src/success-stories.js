jQuery(document).ready(function ($) {

    let swiper = new Swiper("#sStoriesSwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
            nextEl: "#sStories-swiper-button-next",
            prevEl: "#sStories-swiper-button-prev",
        },
        pagination: {
            el: "#sStories-pagination",
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


    $('#sStoriesSwiper').css('opacity', 1);

    $('.sCard__block, .clientVideo').on('click', function () {
        $('.ssModal').fadeIn();
        $('body').addClass('body-hidden');
        let target = $(this).data('id');
        $('.ssModal__card').removeClass('active');
        $('#' + target).addClass('active');
    });

    $('.ssModal-close, .ssModal__overlay').on('click', function () {
        $('.ssModal').fadeOut();
        $('body').removeClass('body-hidden');

        $('.video-stories').each(function () {
            let videoSrc = $(this).attr("src");
            $(this).attr("src", videoSrc);
        });
    });

});




