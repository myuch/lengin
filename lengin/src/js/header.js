jQuery(document).ready(function ($) {

    // Wrap sub-menu items
    $('.header .menu .sub-menu li a img').wrap('<div class="iconBlock wShadow"></div>');
    $('.header .menu .sub-menu').each(function () {
        $(this).find('li').wrapAll('<div class="container"><div class="subMenuWrap"></div></div>');
    });

    // Hover
    $('.header .menu > li.menu-item-has-children').on('mouseenter', function () {
        $('.header').addClass('active');
        $('.header .btnSecondary').addClass('dark');
    });
    $('.header .menu > li.menu-item-has-children').on('mouseleave', function () {
        $('.header').removeClass('active');
        $('.header .btnSecondary').removeClass('dark');
    });

    // Remove Href
    const removeHref = (target) => $(target).removeAttr('href');
    removeHref('.header .menu-item-has-children > a');
    removeHref('.mMenu .menu-item-has-children > a');


    $('#menu-menu-1.menu > li.menu-item-has-children > a').each(function() {
        var firstAnchor = $(this);
        var newSpan = $("<span>").text(firstAnchor.text());
        firstAnchor.replaceWith(newSpan);
    })

    // Open Sub Menu
    if ($(window).width() < 1025) {

        $('.mMenu .menu > li.current_page_ancestor .sub-menu').prev().addClass('active');

        $('.mMenu .menu-item-has-children > a').on('click', function () {

            // if($(this).next('.sub-menu').is(":visible")){
            //     $('.mMenu .menu-item-has-children > a').not(this).next().slideUp();
            //     $(this).next().slideToggle();
            // }else{
            //     $('.mMenu .menu-item-has-children > a').not(this).removeClass('active');
            //     $(this).toggleClass('active');
            // }


            if ($(this).next('.sub-menu').is(":visible")) {
                $('.mMenu .menu-item-has-children > a').not(this).removeClass('active');
                $('.mMenu .menu-item-has-children > a').not(this).next().slideUp();
                $(this).removeClass('active');
                $(this).next().slideToggle();
            } else {
                $('.mMenu .menu-item-has-children > a').not(this).removeClass('active');
                $('.mMenu .menu-item-has-children > a').not(this).next().slideUp();
                $(this).toggleClass('active');
                $(this).next().slideToggle();
            }

        });
    }

    // MENU
    $('.hamburger-open').on('click', function () {
        $(this).hide();
        $('.hamburger-close').fadeIn(300);
        $('.mMenu').fadeIn(300);
        $('body').addClass('body-hidden');
        $('.header').addClass('menuOpen');
    });
    $('.hamburger-close').on('click', function () {
        $(this).hide();
        $('.hamburger-open').fadeIn(300);
        $('.mMenu').fadeOut(300);
        $('body').removeClass('body-hidden');
        $('.header').removeClass('menuOpen');
    });


    // Hide Header on on scroll down
    let lastScrollTop = 0;
    const delta = 5;
    const navbarHeight = $('header').outerHeight();

    $(window).scroll(function () {
        const st = $(this).scrollTop();

        if (st > 1) {
            $('.header').addClass('fixed');
        } else {
            $('.header').removeClass('fixed');
        }

        if (Math.abs(lastScrollTop - st) <= delta) return;

        if (st > lastScrollTop && st > navbarHeight) {
            $('header').removeClass('nav-down').addClass('nav-up');
        } else {
            $('header').removeClass('nav-up').addClass('nav-down');
        }
        lastScrollTop = st;
    });



});