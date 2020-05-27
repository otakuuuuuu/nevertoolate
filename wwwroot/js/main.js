;(function($){
    'use strict'
    
    /*---------Navbar js-----------*/
    function navbarFixed() {
        if ($('#header').length) {
            $(window).scroll(function () {
                var scroll = $(window).scrollTop();
                if (scroll) {
                    $("#header").addClass("navbar_fixed");
                } else {
                    $("#header").removeClass("navbar_fixed");
                }
            });
        };
    };
    navbarFixed();

    function parallax() {
        var windowWidth = $(window).width();
        if ($(".parallax_effect").length){
            if (windowWidth > 768) {
                $('.parallax_effect').parallaxie({
                    speed: 0.5,
                });
            }
        }
    }
    parallax();
    
    function Slider_one() {
        var carousel = $("#main_slider");
        if (carousel.length) {
            var swiper = new Swiper(carousel, {
                loop: true,
                speed: 3000,
                parallax: true,
                loopAdditionalSlides: 10,
                grabCursor: true,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                }
            });
        }
    }
    Slider_one();
    
    /*--------- WOW js-----------*/
     function bodyScrollAnimation() {
         if ($('.wow').length) {
             new WOW({}).init()
         }
     }
     bodyScrollAnimation();
    
})(jQuery)