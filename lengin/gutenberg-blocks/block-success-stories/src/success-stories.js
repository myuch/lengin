jQuery(document).ready(function ($) {

    // Slider
    new Swiper("#sStoriesSwiper", {
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


    // Add Info
    function addInfo(position, site, project, logo, title, video, linkedin, interviewInsights, jsTechnologies) {
        // const currentUrl = window.location.href;

        var host = window.location.host;

        $('.ssModal__card .name').html(title);
        $('.ssModal__forslider .ssModal__card_video iframe').attr('src', video);
        $('.ssModal__card .position').html(position);

        $('.ssModal__forslider .ssModal__card #mSite').html(site);
        $('.ssModal__forslider .ssModal__card #mSite').attr('href', site);

        // Logo
        if (logo) {
            $('.ssModal__card_logo').show();
            $('.ssModal__card .ssModal__card_logo').attr('src', logo);
        }

        // Linkedin
        if (linkedin) {
            $('.ssModal__card-linkedin').show();
            $('.ssModal__card .ssModal__card-linkedin').attr('href', linkedin);
        }

        // Case Portfolio
        if (project.post_name) {
            $('.ssModal__card .pagePortfolio').show();
            $('.ssModal__card #mPortfolio').html(project.post_title);
            $('.ssModal__card #mPortfolio').attr('href', 'https://' + host + '/projects/' + project.post_name);
        }

        // Interview
        $.each(interviewInsights, function (index, item) {
            let questionDiv = $("<div>").text(item.question);
            let answerDiv = $("<div>").html(item.answer);
            questionDiv.addClass("interview__item-question");
            answerDiv.addClass("interview__item-answer lh19");
            let interviewItem = $("<div>").addClass("interview__item").append(questionDiv, answerDiv);
            $('.interview__scroll').append(interviewItem);
        });

        // Technologies
        $.each(jsTechnologies, function (index, item) {
            let jsTechnologiesItem = $("<div>").text(item.technology);
            jsTechnologiesItem.addClass("jsTechnologies-item" + ' ' + item.color);
            $('.jsTechnologies').append(jsTechnologiesItem);
        });

    }

    // Open Modal Window
    $('.sCard__block').on('click', function () {

        // Information
        let targetNew = $(this).data('idpost');
        let position = site_option.stories[targetNew].position,
            site = site_option.stories[targetNew].site,
            project = site_option.stories[targetNew].project,
            logo = site_option.stories[targetNew].logo,
            title = site_option.stories[targetNew].title,
            video = site_option.stories[targetNew].video,
            linkedin = site_option.stories[targetNew].linkedin,
            interviewInsights = site_option.stories[targetNew].interviewInsights,
            jsTechnologies = site_option.stories[targetNew].jsTechnologies;

        addInfo(position, site, project, logo, title, video, linkedin, interviewInsights, jsTechnologies);

        // Open Modal
        $('.ssModal__forslider').fadeIn();
        $('body').addClass('body-hidden');
        let target = $(this).data('idpost');
        $('.ssModal__card').removeClass('active');
        $('#' + target).addClass('active');

        // Play Video
        $('.ssModal__forslider .ssModal__card_video iframe')[0].src += "?rel=0&autoplay=1";


        // Add GET parameter
        let targetSlugID = $(this).data('id');
        const url = new URL(window.location.href);
        url.searchParams.set('story', targetSlugID);
        window.history.pushState({}, '', url);

    });

    // Close Modal Window
    $('.ssModal__forslider .ssModal-close, .ssModal__forslider .ssModal__overlay').on('click', function () {

        // Hide Modal
        $('.ssModal__forslider').fadeOut();
        $('body').removeClass('body-hidden');

        // Remove Iframe src, interview
        setTimeout(function () {
            $('.ssModal__forslider .interview__item, .ssModal__forslider .jsTechnologies-item').remove();
            $('.ssModal__forslider .ssModal__card_video iframe').attr('src', '');
            $('.ssModal__card-linkedin').hide();
            $('.ssModal__card_logo').hide();
            $('.ssModal__card .ssModal__card_logo').attr('src', '');
            $('.ssModal__card .pagePortfolio').hide();
            $('.ssModal__card #mPortfolio').html('');
            $('.ssModal__card #mPortfolio').attr('href', '');
        }, 400)


        // Remove GET parameter
        const url = new URL(window.location.href);
        url.searchParams.delete('story');
        window.history.pushState({}, '', url);
    });

    // Check for ID in URL
    const urlParams = new URLSearchParams(window.location.search);
    const modalId = urlParams.get('story');

    function scrollToSection() {
        let target = $('#sStories');

        if (target.length) {
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 0);
        }
    }

    if (modalId) {

        scrollToSection();

        $('.ssModal').fadeIn();
        $('body').addClass('body-hidden');

        // Info
        let targetNew = $('#' + modalId).data('idpost');
        let position = site_option.stories[targetNew].position,
            site = site_option.stories[targetNew].site,
            project = site_option.stories[targetNew].project,
            logo = site_option.stories[targetNew].logo,
            title = site_option.stories[targetNew].title,
            video = site_option.stories[targetNew].video,
            linkedin = site_option.stories[targetNew].linkedin,
            interviewInsights = site_option.stories[targetNew].interviewInsights,
            jsTechnologies = site_option.stories[targetNew].jsTechnologies;

        addInfo(position, site, project, logo, title, video, linkedin, interviewInsights, jsTechnologies);

    }


    // Copy modal url
    $(".copyLink").click(function () {

        let pageUrl = $(this).data('url');

        const url = new URL(window.location.href);
        let storyId = url.searchParams.get('story');

        let currentUrlReview = pageUrl + '?story=' + storyId;

        let tempInput = $("<input>");
        $("body").append(tempInput);
        tempInput.val(currentUrlReview).select();
        document.execCommand("copy");
        tempInput.remove();

        $('.copyLink-text').addClass('active');

        setTimeout(function () {
            $('.copyLink-text').removeClass('active');
        }, 3000)

    });


});




