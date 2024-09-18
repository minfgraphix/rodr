/*-----------------------------------------------------------------------

  * Vivax Template v1.0 
  * Copyright 2021 The Vivax Author (https://themeforest.net/user/gianfar)

  =======================================================================*/

"use strict";
$(document).ready(function() {

    setTimeout(function() {
        /*preloader*/
        $('body').addClass('loaded');
        animationHeaderTitle();
        setTimeout(function() {
            $('.animation-hand-pointer').css('display', 'none');
        }, 3500);
    }, 2000);

    /* reload page*/
    window.addEventListener("orientationchange", function(event) {
        document.location.reload();
    });

    var controller = new ScrollMagic.Controller();
    var userNavigator = detect.parse(navigator.userAgent);
    var userNavigatorFamily = userNavigator.browser.family;

    /*Drop-Down filter*/
    var selectElement = document.querySelector('.filter-dropdown');
    if (selectElement != null) {
        var edd = easydropdown(selectElement);
    }

    /*footer height*/
    function setHeightFooter() {
        var $footerHeight = $('footer').innerHeight() - 1;
        $('.footer-height').css('height', $footerHeight + 'px');

    }
    setHeightFooter();

    /*add images*/
    $('.data-img').each(function(indx) {
        var dataBg = $(this).attr('data-img');
        $(this).css('background-image', 'url(' + dataBg + ')');
    });

    setTimeout(function() {
        $('a.data-img').each(function(indx) {
            var pathLink = $(this).attr('style').slice(23, -3);
            $(this).attr('href', pathLink);
            $(this).removeAttr('style');
        });
    }, 1100);


    /*Hide Header Navigation on scroll down*/
    var navHead = $('.navigation');
    var dropToggle = $('.dropdown-toggle');
    var dropMenu = $('.dropdown-menu');
    var showNavColor = function() {
        navHead.css('background-color', '#191c1f');
    };
    var hideNavColor = function() {
        dropToggle.removeClass('show');
        dropMenu.removeClass('show');
    };

    function addStyleEl() {
        var animaElArr = ['.animation-img .cell', '.animation-3 .word', '.animation-1 .char', '.animation-2 .char', '.animation-line'];
        for (var i = 0; i < animaElArr.length; i++) {
            $(animaElArr[i]).css('opacity', '0');
        }
        $('.scroll-anim-img').css('transform','scale(3)');
    }

    navHead.headroom({
        offset: 5,
        classes: {
            // when element is initialised
            initial: "headroom",
            // when scrolling up
            pinned: "nav-down",
            // when scrolling down
            unpinned: "nav-up",
        },
        onTop: function() {
            if ($('.portfolio-tooltip').length) {
                showNavColor();
            } else {
                navHead.css('background-color', 'transparent');
                addStyleEl();
            }
            hideNavColor();
        },
        onNotTop: function() {
            showNavColor();
        },
        onUnpin: function() {
            hideNavColor();
        },
    });

    /*mobile-menu*/
    var subMenu = $('.sub-menu>div>a');
    var navMenu = $('.navigation_menu');
    var textMenu = $('.text-menu');
    var burger = $('.hamburger');
    var textClose = $('.text-close');
    var navSocLinks = $('.navigation_menu>.social-icon');
    var mobileMenu = $('.mobile-menu-bg');
    var animateFadeInUp = 'animate__animated animate__fadeInUp';
    var animateJello = 'animate__animated animate__jello';

    var showMobilemenu = function() {
        burger.toggleClass('opened');
        navMenu.toggleClass('seen');
        textMenu.toggleClass('hide');
        textClose.toggleClass('hide');
        subMenu.toggleClass(animateFadeInUp);
        navSocLinks.toggleClass(animateFadeInUp);
        mobileMenu.toggleClass(animateJello);
    };
    var hideMobilemenu = function() {
        burger.removeClass('opened');
        navMenu.removeClass('seen');
        textMenu.removeClass('hide');
        textClose.removeClass('hide');
        subMenu.removeClass(animateFadeInUp);
        navSocLinks.removeClass(animateFadeInUp);
        mobileMenu.removeClass(animateJello);
    };

    // Opening of the menu
    burger.on('click', function() {
        showMobilemenu();
        $('.collapse-section').removeClass('show');
    });

    $(window).on('scroll', function() {
        hideMobilemenu();
    });

    var swiperTst = new Swiper('.testimonials-slider', {
        init: false,
        slidesPerView: 1,
        grabCursor: true,
        speed: 1000,
        pagination: {
            el: ".swiper-pagination",
        },
        navigation: {
            nextEl: ".swiper-but-next",
            prevEl: ".swiper-but-prev",
        },
    });

    if ($('.testimonials-slider').length) {
        setTimeout(function() { swiperTst.init(); }, 1000);
    }

    // Clients Carousel
    var swiperClients = new Swiper('.clients-container', {
        init: false,
        loop: true,
        autoHeight: true,
        slidesPerView: 6,
        grabCursor: true,
        breakpoints: {
            420.98: {
                slidesPerView: 2
            },
            768.98: {
                slidesPerView: 3
            },
            992.98: {
                slidesPerView: 5
            }
        }
    });

    if ($('.clients-container').length) {
        setTimeout(function() { swiperClients.init(); }, 1100);
    }
    /*  TEAM SLIDER */
    if ($('.team-slider').length) {
        var swiper = new Swiper('.team-slider', {
            loop: true,
            slidesPerView: 3,
            spaceBetween: 40,
            grabCursor: true,
            speed: 1000,
            navigation: {
                nextEl: ".swiper-but-next",
                prevEl: ".swiper-but-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },

                992: {
                    slidesPerView: 2,
                    spaceBetween: 30
                }
            }
        });
    }

    /*PORTFOLIO PAGE, HORIZONTAL SLIDER*/ 
    var headerLogo = $('.header-logo');
    var headerLogoImg = $('.header-logo img');

    var slider_portfolio_horizontal = {
        mousewheel: true,
        speed: 1000,
        loop: false,
        init: false,
        grabCursor: true,
        slidesPerView: 2,
        spaceBetween: 30,
        breakpoints: {
            420.98: {
                slidesPerView: 1
            },
        },
        on: {
            reachBeginning: function() {
                headerLogo.css('top', '26px');
                headerLogoImg.css('height', '78px');

            },
            fromEdge: function() {
                headerLogo.css('top', '6px');
                headerLogoImg.css('height', '52px');
            },

        },
        scrollbar: {
            el: ".swiper-scrollbar",
        },
        pagination: {
            el: '.custom-pagination',
            type: 'custom',
            renderCustom: function(swiper, current, total) {
                return '<span class="first-number">' + current +
                    '</span>' + '<span class="pgn-line">-</span>' +
                    "<span class='second-number'>" + total + "</span>";
            }
        }
    };


    var swiperActive = 'swiper-active';
    var swiperSlide = $('.swiper-slide');
    var swiperPortHoriz = '.slider-portfolio-horizontal';
    var elPortfolioText = swiperPortHoriz + ' .swiper-slide';
    var elPortfolio = $(elPortfolioText);
    var swiperFilter = $('.swiper-filter a');

    $('.edd-select').on('change', function() {

        var filter = $(this).val();

        elPortfolio.css('display', 'none');
        $(elPortfolioText + filter).css('display', 'flex');
        swiperFilter.removeClass(swiperActive);
        $(this).addClass(swiperActive);
        if (filter == '.swiper-slide') {
            $('.category-text').css('display', 'none');
        }

        slider_portfolio.update();

        setTimeout(
            function() {
                for (var i = 0; i <= 1; i++) {
                    slider_portfolio.update();
                }
            }, 100);
        slider_portfolio.slideTo(0);
        return false;
    });

    var slider_portfolio = new Swiper(swiperPortHoriz, slider_portfolio_horizontal);
    var widthImg = swiperSlide.width();
    swiperSlide.css('width', widthImg + 'px');
    if ($(swiperPortHoriz).length) {
        slider_portfolio.init();
    }

    var customPagination = function(swiper, current, total) {
        return '<span class="first-number">' + current +
            '</span>' + '<span class="pgn-line">-</span>' +
            "<span class='second-number'>" + total + "</span>";
    };

    // SLIDER VARIANT-2
    var slideActiveWrap = $('.swiper-slide-active .wrap-slider-content');
    var animationSliderTitle = "<span class='animate__animated animate__fadeInUpBig'>";

    var sliderV2_Options = {
        mousewheel: true,
        speed: 1000,
        loop: true,
        init: false,
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 1,
        scrollbar: {
            el: ".swiper-scrollbar",
        },
        pagination: {
            el: '.custom-pagination',
            type: 'custom',
            renderCustom: customPagination
        }
    };

    function showSliderImgV2() {
        /* ANIMATION CIRCLE PROGRESS */
        anime({
            targets: '.circle-progress #circle-progress path',
            strokeDashoffset: [anime.setDashoffset, 0],
            easing: 'linear',
            duration: 10000,
            direction: 'normal',
        });
    }

    function showAnimationText() {
        anime({
            targets: '.swiper-slide-active .el-anime .char',
            translateX: [200, 0],
            opacity: [0, 1],
            duration: 2000,
            easing: 'easeOutQuart',
            delay: function(el, i, l) {
                return i * 50;
            },
            endDelay: function(el, i, l) {
                return (l - i) * 50;
            }
        });
        anime({
            targets: '.swiper-slide-active .el-anime-2',
            translateX: [200, 0],
            opacity: [0, 1],
            duration: 3000,
            easing: 'easeOutQuart',
            delay: anime.stagger(300),
        });
    }

    var sliderV2 = new Swiper('.slider-v2', sliderV2_Options);

    sliderV2.on('slideChangeTransitionStart', function() {
        showAnimationText();
        $(".number-slide").html(animationSliderTitle +
            (sliderV2.realIndex + 1) + "</span>");
    });

    /*init slider v-2*/
    if ($('.slider-v2').length) {
        sliderV2.init();
    }

    var wrapSlider = $('.wrap-slider-content');

    sliderV2.on('sliderMove', function() {
        wrapSlider.css('opacity', '0');
    });

    sliderV2.on('touchEnd', function() {
        wrapSlider.css('opacity', '1');
    });

    // SLIDER VARIANT-3
    var sliderV3_Options = {
        speed: 1000,
        loop: true,
        init: false,
        centeredSlides: true,
        slidesPerView: 1,
        autoplay: {
            delay: 8500,
            disableOnInteraction:false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        scrollbar: {
            el: ".swiper-scrollbar",
        },
        pagination: {
            el: '.custom-pagination',
            type: 'custom',
            renderCustom: customPagination
        }
    };

    /*hide slider counter*/
    var sliderV3Counter = $('.slider-v3 .counter .circle-path');

    if (typeof sliderV3_Options.autoplay === 'undefined') {
        sliderV3Counter.css('display', 'none');
    } else {
        sliderV3Counter.css('display', 'flex');
    }
    /*init swiper slider - sliderV3*/
    var sliderV3 = new Swiper('.slider-v3', sliderV3_Options);

    sliderV3.on('slideChangeTransitionStart', function() {
        showAnimationText();
        $(".number-slide").html(animationSliderTitle +
            (sliderV3.realIndex + 1) + "</span>");
    });

    sliderV3.on('sliderMove', function() {
        wrapSlider.css('opacity', '0');
    });

    sliderV3.on('touchEnd', function() {
        wrapSlider.css('opacity', '1');
    });

    /* ANIMATION CIRCLE PROGRESS */
    function showSliderImgV3() {
        anime({
            targets: '.circle-progress #circle-progress path',
            strokeDashoffset: [anime.setDashoffset, 0],
            easing: 'linear',
            duration: 10000,
            direction: 'normal',
        });

        /* SHOWING NEXT AND PREVIOUS PICTURE */
        var swiperContainerV3 = $('.slider-v3 .swiper-wrapper');
        var nxSlide = swiperContainerV3.children().eq(sliderV3.realIndex + 1).next();
        var pvSlide = swiperContainerV3.children().eq(sliderV3.realIndex + 1).prev();

        setTimeout(function() {
            $('.slider-next-img').attr('src', nxSlide.find('figure').attr('data-img'));
        }, 800);
        setTimeout(function() {
            $('.slider-prev-img').attr('src', pvSlide.find('figure').attr('data-img'));
        }, 800);
    }


    sliderV3.on('slideChangeTransitionStart', function() {
        showSliderImgV3();
    });

    sliderV3.on('touchEnd', function() {
        showSliderImgV3();
    });

    if ($('.slider-v3').length) {
        sliderV3.init();
    }

    // PARALLAX SLIDER
    var parallaxSliderOptions = {
        speed: 1000,
        parallax: true,
        loop: true,
        init: false,
        centeredSlides: true,
        slidesPerView: 1,
        autoplay: {
            disableOnInteraction: false,
            delay: 8500,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        pagination: {
            el: '.custom-pagination',
            type: 'custom',
            renderCustom: customPagination
        },
        on: {
            progress: function() {
                if (userNavigatorFamily == ('Firefox' || 'Firefox Mobile')) {
                    return false;
                } else {
                    var interleaveOffset = 0.5;
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        var slideProgress = swiper.slides[i].progress,
                            innerOffset = swiper.width * interleaveOffset,
                            innerTranslate = slideProgress * innerOffset;
                        swiper.slides[i].querySelector('.img-slider').style.transform = 'translateX(' + innerTranslate + 'px)';
                    }
                }
            },
            setTransition: function(speed) {
                if (userNavigatorFamily == ('Firefox' || 'Firefox Mobile')) {
                    return false;
                } else {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {

                        swiper.slides[i].style.transitionDuration = speed + 'ms';
                        swiper.slides[i].querySelector('.img-slider').style.transitionDuration = speed + 'ms';
                    }
                }
            },
            resize: function() {
                this.update();
            }
        }
    };
    /*hide slider counter*/
   var parallaxCounter = $('.parallax-slider .counter .circle-path');

    if (typeof parallaxSliderOptions.autoplay === 'undefined') {
        parallaxCounter.css('display', 'none');
    } else {
        parallaxCounter.css('display', 'flex');
    }
    // init slider
    var parallaxSlider = new Swiper('.parallax-slider', parallaxSliderOptions);

    /* ANIMATION CIRCLE PROGRESS */
    function showSliderImg() {
        anime({
            targets: '.circle-progress #circle-progress path',
            strokeDashoffset: [anime.setDashoffset, 0],
            easing: 'linear',
            duration: 10000,
            direction: 'normal',
        });

        /* SHOWING NEXT AND PREVIOUS PICTURE */
        var swiperContainer = $('.swiper-container .swiper-wrapper');
        var nxSlide = swiperContainer.children().eq(parallaxSlider.realIndex + 1).next();
        var pvSlide = swiperContainer.children().eq(parallaxSlider.realIndex + 1).prev();

        setTimeout(function() {
            $('.slider-next-img').attr('src', nxSlide.find('figure').attr('data-img'));
        }, 800);
        setTimeout(function() {
            $('.slider-prev-img').attr('src', pvSlide.find('figure').attr('data-img'));
        }, 800);

    }

    parallaxSlider.on('slideChangeTransitionStart', function() {
        showSliderImg();
    });

    parallaxSlider.on('touchEnd', function() {
        showSliderImg();
    });

    /*parallax slider init*/
    if ($('.parallax-slider').length) {
        parallaxSlider.init();
    }

    // resize window
    $(window).on('resize', function() {
        if ($('.swiper-container').hasClass('parallax-slider') == true) {
            parallaxSlider.update();
            showSliderImg();
        }
        setHeightFooter();
    });

    /* initialize shuffle plugin(portfolio page)*/
    var $grid = $('#grid');
    $grid.imagesLoaded(function() {
        $grid.shuffle({
            itemSelector: '.item',
            speed: 500,
            sequentialFadeDelay: 500
        });
    });

    /* reshuffle when user clicks a filter item */
    $('#filter a').on('click', function(e) {
        e.preventDefault();
        $('#filter a').removeClass('active-filter');
        $(this).addClass('active-filter');
        var groupName = $(this).attr('data-group');
        $grid.shuffle('shuffle', groupName);
    });

    /* YouTube Video*/
    $('.story-video').magnificPopup({
        type: 'iframe',
        fixedContentPos: false,
        mainClass: 'mfp-fade',
        callbacks: {
            open: function() {
                $('body').css('overflow', 'hidden');
            },

            close: function() {
                $('body').css('overflow', '');
            },
        }
    });


    /* portfolio popup */
    $('.image-link-home').magnificPopup({
        type: 'image',
        fixedContentPos: false,
        fixedBgPos: true,
        removalDelay: 300,
        mainClass: 'mfp-fade',
        gallery: {
            enabled: true
        },
        callbacks: {
            open: function() {
                $('body').css('overflow', 'hidden');
            },

            close: function() {
                $('body').css('overflow', '');
            },

        },
    });

    /* single projects popup */
    $('.image-link-single').magnificPopup({
        type: 'image',
        fixedContentPos: false,
        fixedBgPos: true,
        removalDelay: 300,
        mainClass: 'mfp-fade',
        gallery: {
            enabled: false
        },
        callbacks: {
            open: function() {
                $('body').css('overflow', 'hidden');
            },

            close: function() {
                $('body').css('overflow', '');
            },

        },
    });

    /*- HORIZONTAL PORTFOLIO POPUP -*/
    var imgLinkProject = $('.slider-zoom-icon');
    if (imgLinkProject.length) {
        imgLinkProject.magnificPopup({
            type: 'image',
            mainClass: 'animate__animated animate__fadeInDown',
        });
    }

    function hoverCircleButton() {
        anime({
            targets: '#circle-2 path',
            strokeDashoffset: [anime.setDashoffset, 0],
            easing: 'easeInOutSine',
            duration: 800,
            delay: function(el, i) { return i * 250; },
        });

        anime({
            targets: '#p-icon polyline',
            strokeDashoffset: [anime.setDashoffset, 0],
            easing: 'easeInOutSine',
            duration: 500,
            delay: function(el, i) { return i * 250; },
        });
    }

    $('.story-video').hover(
        function() {
            hoverCircleButton();
        }
    );

    /*PARALLAX HEADER*/
    if ($('.parallax-window').length) {
        $('.parallax-window').parallax();
    }

    /* Resize Images*/
    var xOffset;
    var yOffset;

    function resizeImg() {

        if ($(window).width() < 992) {
            xOffset = 50;
            yOffset = -50;
        } else {
            xOffset = 200;
            yOffset = 80;
        }
    }
    resizeImg();
    $(window).on('resize', function() {
        resizeImg();
        showImage();
    });

    /*works link page*/
    function showImage() {

        $("a.img-link-hover").hover(function(e) {
                var $this = $(this);
                $this.data('initialText', $this.text());
                $("body").append("<div id='show-image'><img src='" + this.rel + "' alt='rens preview image' />" + "</div>");
                $('#show-image').addClass('animate__animated animate__flipInY');
                $("#show-image").css("top", (e.pageY - xOffset) + "px").css("left", (e.pageX + yOffset) + "px").fadeIn("fast");
            },
            function() {
                var $this = $(this);
                $this.text($this.data('initialText'));
                $("#show-image").remove();
            });

        $("a.img-link-hover").mousemove(function(e) {
            $("#show-image").css("top", (e.pageY - xOffset) + "px").css("left", (e.pageX + yOffset) + "px");
        });
    };

    showImage();

    if ($('.project-slider').length) {
        var swiper = new Swiper('.project-slider', {
            slidesPerView: 1,
            grabCursor: true,
            speed: 1000,
            pagination: {
                el: '.swiper-pagination',
            },
            autoplay: {
                disableOnInteraction: false,
                delay: 8500,
            },
        });
    }

    //split text & img init
    var results = Splitting({
        target: '.animation-img',
        by: 'cells',
        image: true,
        rows: 4,
    });
    Splitting();

    /*ANIMATION TEXT & IMG*/
    var windowHeight = $(window).height() / 2;
    var heightImg = windowHeight + 50;

    /*ANIMATION PAGE TITLE*/
    function animationHeaderTitle() {
        setTimeout(function() {
            anime({
                targets: '.an-el-wrap .animation-header-title .char',
                translateX: [270, 0],
                opacity: [0, 1],
                duration: 1000,
                easing: 'easeOutQuart',
                delay: anime.stagger(100) // increase delay by 100ms for each elements.
            });
        }, 900);
        setTimeout(function() {
            anime({
                targets: '.an-el-wrap .el',
                translateY: [270, 0],
                opacity: [0, 1],
                duration: 1500,
                easing: 'easeOutQuart',
                delay: anime.stagger(50) // increase delay by 50ms for each elements.
            });
        }, 1000);
    }

    $('.animation-img').each(function() {
        var trigger_img = this.querySelectorAll('.cell');
        new ScrollMagic.Scene({
            triggerElement: this,
            offset: heightImg,
            duration: "0",
            triggerHook: 1,
        }).addTo(controller).on("start", function(event) {
            if (event.scrollDirection == 'FORWARD') {

                anime({
                    targets: trigger_img,
                    translateX: [500, 0],
                    opacity: [0, 1],
                    duration: 3000,
                    easing: 'easeOutQuart',
                    delay: function(el, i, l) {
                        return i * 200;
                    },
                    endDelay: function(el, i, l) {
                        return (l - i) * 200;
                    }
                });
            }
        });
    });

    $('.animation-section').each(function() {
        var triggerEl_1 = this.querySelectorAll('.animation-1 .char');
        var triggerEl_2 = this.querySelectorAll('.animation-2 .char');
        var triggerEl_3 = this.querySelectorAll('.animation-3 .word');
        var trigger_line = this.querySelectorAll('.animation-line');
        var animationImg = this.querySelectorAll('.scroll-anim-img');

        new ScrollMagic.Scene({
            triggerElement: this,
            offset: windowHeight,
            duration: "0",
            triggerHook: 1,
        }).addTo(controller).on("start", function(event) {

            if (event.scrollDirection == 'FORWARD') {
                anime({
                    targets: animationImg,
                    scale: [3, 1],
                    duration: 2000,
                    easing: 'easeInOutQuint',
                });
                anime({
                    targets: triggerEl_1,
                    translateX: [100, 0],
                    opacity: [0, 1],
                    duration: 1500,
                    easing: 'easeOutQuart',
                    delay: function(el, i, l) {
                        return i * 50;
                    },
                    endDelay: function(el, i, l) {
                        return (l - i) * 50;
                    }
                });
                anime({
                    targets: triggerEl_2,
                    translateX: [200, 0],
                    opacity: [0, 1],
                    duration: 2000,
                    easing: 'easeOutQuart',
                    delay: function(el, i, l) {
                        return i * 50;
                    },
                    endDelay: function(el, i, l) {
                        return (l - i) * 50;
                    }
                });
                anime({
                    targets: triggerEl_3,
                    translateX: [200, 0],
                    opacity: [0, 1],
                    duration: 2000,
                    easing: 'easeOutQuart',
                    delay: function(el, i, l) {
                        return i * 50;
                    },
                    endDelay: function(el, i, l) {
                        return (l - i) * 50;
                    }
                });
                anime({
                    targets: trigger_line,
                    translateX: [200, 0],
                    opacity: [0, 1],
                    duration: 3000,
                    easing: 'easeOutQuart',
                    delay: function(el, i, l) {
                        return i * 50;
                    },
                    endDelay: function(el, i, l) {
                        return (l - i) * 50;
                    }
                });
            }
        });
    });

});