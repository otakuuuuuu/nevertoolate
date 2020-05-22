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
    
    /*---------search js-----------*/
    $('.search1').on('click', function () {
        $('body').addClass('open');
        setTimeout(function () {
            $('.search-input').focus();
        }, 500);
        return false;
    });
    $('.close_icon').on('click', function () {
        $('body').removeClass('open');
        return false;
    });
    
    /*---------gallery isotope js-----------*/
    function galleryMasonry(){
        if ( $('#project_gallery').length ){
            $('#project_gallery').imagesLoaded( function() {
              // images have loaded
                // Activate isotope in container
                $("#project_gallery").isotope({
                    itemSelector: ".project_item",
                    layoutMode: 'masonry',
                    masonry: {
                        columnWidth: 10
                    }
                });

                // Add isotope click function
                $(".portfolio_filter .portfolio_item").on('click',function(){
                    $(".portfolio_filter .portfolio_item").removeClass("active");
                    $(this).addClass("active");

                    var selector = $(this).attr("data-filter");
                    $(".project_gallery").isotope({
                        filter: selector,
                        animationOptions: {
                          animationDuration: 750,
                          easing: 'linear',
                          queue: false
                      }
                    })
                    return false;
                })
            })
        }
    }
    galleryMasonry();
    
    function popupGallery() {
        if ($(".img_popup").length) {
            $(".img_popup").each(function () {
                $(".img_popup").magnificPopup({
                    type: 'image',
                    tLoading: 'Loading image #%curr%...',
                    removalDelay: 300,
                    mainClass: 'mfp-with-zoom mfp-img-mobile',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0, 1] // Will preload 0 - before current, and 1 after the current image,
                    }
                });
            })
        }
        if ($('.popup-youtube').length) {
            $('.popup-youtube').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false,
                mainClass: 'mfp-with-zoom mfp-img-mobile',
            });
        }
    }
    popupGallery();

    
    if ($('.testimonial_inner').length) {
        $('.testimonial_inner').slick({
            autoplay: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 2000,
            speed: 1000,
            dots: true,
            arrows: true,
        });
    }
    
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
    
    /* Counter Js */
    function counterUp(){
        if ( $('.counter').length ){ 
            $('.counter').counterUp({
                delay: 1,
                time: 250
            });
        };
    };  
    
    counterUp();
    
    
    function Slider_one() {
        var carousel = $("#main_slider");
        if (carousel.length) {
            var swiper = new Swiper(carousel, {
                loop: true,
                speed: 3000,
                parallax: true,
                autoplay: {
                    delay: 15000
                },
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
    
    function Slider_two() {
        var carousel = $(".main_slider_three");
        if (carousel.length) {
            var swiper = new Swiper(carousel, {
                slidesPerView: 1,
                effect: 'fade',
                autoplay: 3500,
                speed: 1000,
                autoplayDisableOnInteraction: false,
                loop: false,
                parallax: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                autoplay: {
                    delay: 5000,
                }
            });
        }
    }
    Slider_two();
    
    /*--------- WOW js-----------*/
     function bodyScrollAnimation() {
         if ($('.wow').length) {
             new WOW({}).init()
         }
     }
     bodyScrollAnimation();
    
})(jQuery)