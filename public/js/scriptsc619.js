$.fn.exists = function () {
    return this.length > 0;
};
var mobile = !1;
function checkTheDevice() {
    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
    ) || $(window).width() < 992
        ? ((mobile = !0), $("body").addClass("mobile"))
        : (mobile = !1);
}
checkTheDevice(),
    (window.onresize = function () {
        checkTheDevice();
    });
var isOpera =
        (!!window.opr && !!opr.addons) ||
        !!window.opera ||
        navigator.userAgent.indexOf(" OPR/") >= 0,
    isFirefox = "undefined" != typeof InstallTrigger,
    isSafari =
        /constructor/i.test(window.HTMLElement) ||
        "[object SafariRemoteNotification]" ===
            (!window.safari || safari.pushNotification).toString(),
    isIE = !!document.documentMode,
    isEdge = !isIE && !!window.StyleMedia,
    isChrome =
        /Chrome/.test(navigator.userAgent) &&
        /Google Inc/.test(navigator.vendor),
    isBlink = (isChrome || isOpera) && !!window.CSS,
    isParallaxBrowsers = isOpera || isFirefox || isBlink || isChrome;
function detectWindowHeightChange(e, t) {
    var i,
        a = e.clientHeight;
    !(function o() {
        (i = e.clientHeight),
            a != i && t(),
            (a = i),
            e.onElementHeightChangeTimer &&
                clearTimeout(e.onElementHeightChangeTimer),
            (e.onElementHeightChangeTimer = setTimeout(o, 200));
    })();
}
if (
    (isIE && $("body").addClass("ie-browser"),
    isEdge && $("body").addClass("edge-browser"),
    !0 === mobile)
);
else {
    var s = skrollr.init({ forceHeight: !1, smoothScrolling: !1 });
    function showHideExtraNav() {
        if (!1 === mobile) {
            var e = $(window).scrollTop(),
                t = $(".extra-nav"),
                i = t.attr("data-showme"),
                a = t.attr("data-hideme");
            if ($(a).exists() && $(i).exists()) {
                var o = $(i).offset().top,
                    n = $(a).offset().top;
                $(window).width() > 700 &&
                    (e >= o - 60 && e <= n - 60
                        ? $(t).slideDown(150).removeClass("hiding")
                        : $(t).addClass("hiding").slideUp(150));
            } else
                $(t)
                    .slideDown(150)
                    .removeClass("hiding")
                    .find("ul.nav")
                    .html(
                        '<li class="colored d-flex align-items-center">Extra Navigation is here! Please check the data-showme and data-hideme areas. This page does not have these links.</li>'
                    );
        }
    }
    $("body").addClass("stable"),
        $(window).on("scroll", function () {
            $("body").hasClass("stable") &&
                (setTimeout(function () {
                    isParallaxBrowsers && s.refresh();
                }, 500),
                window.dispatchEvent(new Event("resize")),
                $("body").removeClass("stable"));
        }),
        $(window).on("scroll", function () {
            showHideExtraNav();
        }),
        detectWindowHeightChange(document.body, function () {
            Waypoint.refreshAll(),
                setTimeout(function () {
                    isParallaxBrowsers && s.refresh();
                }, 200);
        });
}
function isRetina() {
    return (
        (window.matchMedia &&
            (window.matchMedia(
                "only screen and (min-resolution: 124dpi), only screen and (min-resolution: 1.3dppx), only screen and (min-resolution: 48.8dpcm)"
            ).matches ||
                window.matchMedia(
                    "only screen and (-webkit-min-device-pixel-ratio: 1.3), only screen and (-o-min-device-pixel-ratio: 2.6/2), only screen and (min--moz-device-pixel-ratio: 1.3), only screen and (min-device-pixel-ratio: 1.3)"
                ).matches)) ||
        (window.devicePixelRatio && window.devicePixelRatio > 1.3)
    );
}
isRetina() &&
    ($("body").addClass("retina-device"),
    $("[data-retina]").each(function () {
        $(this);
        var e = $(this).attr("data-retina");
        $(this).attr("src", e);
    })),
    $(".retina-logo").exists() && $("body").addClass("has-retina-logo"),
    ($.fn.getDeviceWidth = function () {
        $(window).width() > 1200 &&
            $("body")
                .not(".device-xl")
                .removeClass(
                    "device-lg device-md device-sm device-xs device-xxs"
                )
                .addClass("device-xl"),
            $(window).width() > 992 &&
                $(window).width() < 1200 &&
                $("body")
                    .not(".device-lg")
                    .removeClass(
                        "device-xl device-lg device-md device-sm device-xs device-xxs"
                    )
                    .addClass("device-lg"),
            $(window).width() > 768 &&
                $(window).width() < 992 &&
                $("body")
                    .not(".device-md")
                    .removeClass(
                        "device-xl device-lg device-md device-sm device-xs device-xxs"
                    )
                    .addClass("device-md"),
            $(window).width() > 576 &&
                $(window).width() < 768 &&
                $("body")
                    .not(".device-sm")
                    .removeClass(
                        "device-xl device-lg device-md device-sm device-xs device-xxs"
                    )
                    .addClass("device-sm"),
            $(window).width() > 480 &&
                $(window).width() < 576 &&
                $("body")
                    .not(".device-xs")
                    .removeClass(
                        "device-xl device-lg device-md device-sm device-xs device-xxs"
                    )
                    .addClass("device-xs"),
            $(window).width() < 480 &&
                $("body")
                    .not(".device-xxs")
                    .removeClass(
                        "device-xl device-lg device-md device-sm device-xs device-xxs"
                    )
                    .addClass("device-xxs");
    }),
    $("body").getDeviceWidth(),
    !0 === mobile &&
        $("[data-bg-mobile]").each(function () {
            var e = $(this).data("bg-mobile");
            $(this)
                .addClass("bg-mobiled")
                .css({
                    "background-image": "url(" + e + ")",
                    "background-size": "cover !important",
                });
        }),
    $(".cookie").exists() &&
        $(".cookie").each(function () {
            var e = $(this),
                t = $(e).attr("id"),
                i = e.find(".close");
            if (null == $.cookie(t)) {
                var a = $(e).data("expire");
                $(i).on("click", function () {
                    $.cookie(t, "yes", { expires: a, path: "/" }),
                        $("body")
                            .addClass(t + "-cookie-in-expire-time")
                            .removeClass("cookie-activated"),
                        e.fadeOut(300);
                }),
                    e.hasClass("modal")
                        ? (setTimeout(function () {
                              $(e).modal("show");
                          }, 100),
                          $(e).on("click", function (i) {
                              $.cookie(t, "yes", { expires: a, path: "/" }),
                                  $(e)
                                      .find(".modal-dialog")
                                      .on("click", function () {
                                          event.stopPropagation(i);
                                      });
                          }))
                        : (e.show().addClass("cookie-active"),
                          $("body").addClass("cookie-activated"));
            } else e.addClass("cookie-in-expire-time"), $("body").addClass(t + "-cookie-in-expire-time");
        });
var myLazyLoad = new LazyLoad({
    threshold: 1e3,
    elements_selector: "[data-src], [data-bg]:not(.bg-mobiled)",
    callback_loaded: function (e) {
        Waypoint.refreshAll();
    },
});
if (
    ($("[data-color]").each(function () {
        var e = $(this).data("color");
        $(this).css({ color: e });
    }),
    $("[data-bcolor]").each(function () {
        var e = $(this).data("bcolor");
        $(this).css({ "border-color": e });
    }),
    $("[data-bgcolor]")
        .not(".tp-bgimg")
        .not(".rev-slidebg")
        .each(function () {
            var e = $(this).data("bgcolor");
            $(this).css({ "background-color": e });
        }),
    $(function () {
        var e, t, i, a;
        $(".click-effect").on("click", function (o) {
            0 === $(this).find(".ink").length &&
                $(this).prepend("<span class='ink'></span>"),
                (e = $(this).find(".ink")).removeClass("clicked"),
                e.height() ||
                    e.width() ||
                    ((t = Math.max(
                        $(this).outerWidth(),
                        $(this).outerHeight()
                    )),
                    e.css({ height: t, width: t })),
                (i = o.pageX - $(this).offset().left - e.width() / 2),
                (a = o.pageY - $(this).offset().top - e.height() / 2),
                e.css({ top: a + "px", left: i + "px" }).addClass("clicked");
        });
    }),
    $(".modern-nav>.top-bar").exists())
) {
    var bar = $(".modern-nav>.top-bar");
    $(".modern-nav").addClass("has-top-bar");
}
if ($(".modern-nav>.top-bar.cookie").exists()) {
    bar = $(".modern-nav>.top-bar.cookie");
    $(".modern-nav").addClass("has-header-cookie-bar");
}
$(".modern-nav>.top-bar .close").on("click", function () {
    var e = $(".modern-nav .top-bar").outerHeight(),
        t = $(".modern-nav .nav-container").height();
    $(".modern-nav").css({
        "-webkit-transform": "translateY(-" + e + "px)",
        transform: "translateY(-" + e + "px)",
    }),
        $(".modern-nav").hasClass("sticky") &&
            ($(".modern-nav")
                .parent()
                .addClass("slow-md")
                .css({ height: t + "px" }),
            setTimeout(function () {
                $(".modern-nav").parent().removeClass("slow-md");
            }, 420)),
        $(".modern-nav:not(.sticky):not(.fixed)").css({ height: t + e + "px" }),
        setTimeout(function () {
            $(".modern-nav:not(.sticky):not(.fixed)").css({ height: t + "px" });
        }, 0),
        $(".modern-nav").removeClass("has-top-bar"),
        setTimeout(function () {
            $(".modern-nav")
                .removeClass("has-header-cookie-bar")
                .addClass("cookie-closed hiding-cookie"),
                $(".modern-nav .top-bar").removeClass("cookie-active").hide();
        }, 500),
        setTimeout(function () {
            $(".modern-nav").removeClass("hiding-cookie");
        }, 520);
}),
    $(".hover-cursor").each(function () {
        var e = $(this);
        0 === $(e).find(".cursor-container").length &&
            $(e).prepend(
                "<span class='cursor-container'><span class='cursor'><span class='c-inner'></span></span></span>"
            );
        var t = e.find(".cursor");
        var i = 0;
        $(e).on("mousemove", function (e) {
            var i = e.pageY - $(document).scrollTop();
            t.show()
                .stop()
                .removeClass("hiding")
                .css({
                    transform:
                        "translate3d(" +
                        e.pageX +
                        "px, " +
                        i +
                        "px, 0px) translateZ(0)",
                });
        }),
            $(e).on("mouseleave", function () {
                clearTimeout(i),
                    t.addClass("hiding"),
                    (i = setTimeout(function () {
                        t.hide();
                    }, 1e3));
            }),
            $("a, button, .c-pointer, input, textarea").on(
                "mouseenter",
                function () {
                    t.addClass("hover");
                }
            ),
            $("a, button, .c-pointer, input, textarea").on(
                "mouseleave",
                function () {
                    t.removeClass("hover");
                }
            ),
            $(".hide-hover-cursor").on("mouseenter", function () {
                t.addClass("hide-me");
            }),
            $(".hide-hover-cursor").on("mouseleave", function () {
                t.removeClass("hide-me");
            });
    }),
    $("[data-background]")
        .not(".bg-mobiled")
        .each(function () {
            var e = $(this).data("background"),
                t = $(this);
            $(this).css({ "background-image": "url(" + e + ")" }),
                $(t).ready(function () {
                    setTimeout(function () {
                        $(t).addClass("loaded");
                    }, 50);
                });
        }),
    $(".bg-parallax").each(function () {
        var e = $(this);
        $(e)
            .closest("section, .parallax-container")
            .addClass("o-hidden relative zi-1");
    }),
    ($.fn.countTo = function (e) {
        e = $.extend({}, $.fn.countTo.defaults, e || {});
        var t = Math.ceil(e.speed / e.refreshInterval),
            i = (e.to - e.from) / t;
        return $(this).each(function () {
            var a = this,
                o = 0,
                n = e.from,
                s = setInterval(function () {
                    (n += i),
                        o++,
                        $(a).html(
                            n
                                .toFixed(e.decimals)
                                .replace(/\B(?=(\d{3})+(?!\d))/g, ".")
                        ),
                        "function" == typeof e.onUpdate &&
                            e.onUpdate.call(a, n);
                    o >= t &&
                        (clearInterval(s),
                        (n = e.to),
                        "function" == typeof e.onComplete &&
                            e.onComplete.call(a, n));
                }, e.refreshInterval);
        });
    }),
    ($.fn.countTo.defaults = {
        from: 0,
        to: 100,
        speed: 1e3,
        refreshInterval: 100,
        decimals: 0,
        onUpdate: null,
        onComplete: null,
    }),
    $(".fact").each(function () {
        $(this).waypoint(
            function () {
                var e = $(this.element).attr("data-source");
                $(this.element)
                    .find(".factor")
                    .countTo({
                        from: 0,
                        to: e,
                        speed: 1600,
                        refreshInterval: 10,
                    }),
                    this.destroy();
            },
            { offset: "100%" }
        );
    }),
    ($.fn.digits = function () {
        return this.each(function () {
            $(this).text(
                $(this)
                    .text()
                    .replace(/\B(?=(\d{3})+(?!\d))/g, ".")
            );
        });
    }),
    $(".digits").digits(),
    $("[data-end-date]").length > 0 &&
        $("[data-end-date]").each(function () {
            var e = $(this);
            !(function (t) {
                var i,
                    a = new Date(t),
                    o = 1e3,
                    n = 60 * o,
                    s = 60 * n,
                    r = 24 * s,
                    d = 365 * r;
                $(e);
                function l() {
                    var t = new Date(),
                        l = a - t;
                    if (l < 0)
                        return clearInterval(i), void $(e).html("EXPIRED");
                    var c = Math.floor(l / d),
                        u = Math.floor((l % d) / r),
                        m = Math.floor((l % r) / s),
                        h = Math.floor((l % s) / n),
                        f = Math.floor((l % n) / o);
                    String(m).length < 2 && (m = 0 + String(m)),
                        String(h).length < 2 && (h = 0 + String(h)),
                        String(f).length < 2 && (f = 0 + String(f)),
                        e.find(".time-year").html(c),
                        e.find(".time-day").html(u),
                        e.find(".time-hour").html(m),
                        e.find(".time-minute").html(h),
                        e.find(".time-second").html(f),
                        c < 1 && $(e).find(".time-year, .time-year-dot").hide();
                }
                l(), (i = setInterval(l, 1e3));
            })($(this).attr("data-end-date"));
        }),
    $(".video-trigger").exists() &&
        $(".video-trigger").each(function () {
            var e = $(this).find("iframe"),
                t = $(this).find(".video-play-trigger"),
                i = $(e).data("video-src");
            $(t).on("click", function (t) {
                $(this).delay(200).fadeOut(500),
                    $(e).attr("src", i),
                    t.preventDefault();
            });
        }),
    $(window).on("load", function () {
        "use strict";
        document.body.classList.add("welcome-home"),
            $(".qdr-alert-trigger").each(function () {
                var e,
                    t = $(this),
                    i = $(t).data("target");
                $(t).on("click", function () {
                    clearTimeout(e),
                        $(i).fadeOut(0).stop().clearQueue(),
                        setTimeout(function () {
                            $(i).fadeIn(300);
                        }, 1),
                        (e = setTimeout(function () {
                            $(i).fadeOut(300);
                        }, 3e3));
                });
            }),
            $(".moving-container").exists() &&
                $(".moving-container").each(function () {
                    var e = $(this).find(".moving");
                    $(this).hover3d({
                        selector: e,
                        shine: !1,
                        perspective: 1500,
                        sensitivity: 85,
                        invert: !1,
                    });
                }),
            $(".styled-portfolio.parallax").exists() &&
                $(window).width() > 630 &&
                $(".styled-portfolio.parallax .cbp-item").each(function (e, t) {
                    $(this).on("mouseenter", function (e) {
                        var t = "",
                            i = "",
                            a = $(this);
                        $(a).mousemove(function (e) {
                            "" == t && (t = e.pageX);
                            var o = e.pageX - t;
                            (t = e.pageX), "" == i && (i = e.pageY);
                            var n = e.pageY - i;
                            (i = e.pageY),
                                $(a)
                                    .find(".cbp-caption-defaultWrap")
                                    .each(function (e, t) {
                                        var i = (e + 1) * (0.1 * o),
                                            a = (e + 1) * (0.1 * n),
                                            s = $(t).position().left + i,
                                            r = $(t).position().top + a;
                                        $(t)
                                            .find("img")
                                            .css({
                                                "-webkit-transform":
                                                    "translate(" +
                                                    s +
                                                    "px," +
                                                    r +
                                                    "px) scale(1.06)",
                                            });
                                    });
                        });
                    }),
                        $(this).on("mouseleave", function (e) {
                            $(this)
                                .find("img")
                                .css({
                                    "-webkit-transform":
                                        "translate(0px,0px) scale(1.0)",
                                });
                        });
                }),
            $(".fitvids").exists() && $(".fitvids").fitVids(),
            $("[data-property]").exists() && $(".player").YTPlayer(),
            $("[data-masonry]").exists() && $("[data-masonry]").masonry(),
            $(".progress-bar").exists() &&
                $(".progress-bar").each(function () {
                    var e = $(this);
                    $(e).waypoint(
                        function () {
                            var t = $(e).attr("data-value");
                            $(e).animate({ width: t + "%" }, 300),
                                this.destroy();
                        },
                        { offset: "100%" }
                    );
                }),
            $('[data-bs-toggle="tooltip"], .tooltip-item').each(function () {
                var e = $(this),
                    t = $(e).parent();
                $(e).tooltip({ html: !0, container: t, boundary: "window" });
            }),
            $(".active-me-with-click").each(function (e) {
                var t = $(this);
                $(t).on("click", function (e) {
                    $(t).hasClass("stay-active")
                        ? $(t).addClass("active")
                        : ($(t).toggleClass("active"), e.preventDefault());
                }),
                    $(document).on("click", function (e) {
                        $(t).hasClass("disable-with-window-click") &&
                            !$(e.target).closest(".active-me-with-click")
                                .length &&
                            $(t).removeClass("active");
                    }),
                    $(t)
                        .find(".stay-active, .cbp-filter-item")
                        .on("click", function (e) {
                            return !1;
                        });
            }),
            $(".active-inview").each(function () {
                var e = $(this);
                new Waypoint.Inview({
                    element: $(e)[0],
                    enter: function (t) {
                        e.addClass("inview"),
                            $(".slick-slider.active-inview")
                                .addClass("inview")
                                .slick("slickPlay");
                    },
                    exited: function (t) {
                        e.removeClass("inview"),
                            $(".slick-slider.active-inview")
                                .removeClass("inview")
                                .slick("slickPause");
                    },
                });
            });
        [].slice
            .call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            .map(function (e) {
                return new bootstrap.Popover(e);
            });
        if (
            ($("[data-infocard]").each(function () {
                var e,
                    t = $(this),
                    i = $(this).data("infocard");
                $(t).on("mouseenter", function () {
                    $(i).addClass("active"),
                        clearTimeout(e),
                        $(".icon-navigation").addClass("passive");
                }),
                    $(i).on("mouseenter", function () {
                        $(i).addClass("active"),
                            clearTimeout(e),
                            $(".icon-navigation").addClass("passive");
                    }),
                    $(t).on("mouseleave", function () {
                        e = setTimeout(function () {
                            $(i).removeClass("active"),
                                $(".icon-navigation").removeClass("passive");
                        }, 250);
                    }),
                    $(i).on("mouseleave", function () {
                        e = setTimeout(function () {
                            $(i).removeClass("active"),
                                $(".icon-navigation").removeClass("passive");
                        }, 250);
                    });
            }),
            $("[data-gradient-bg]").each(function () {
                var e = $(this).data("gradient-bg"),
                    t = $(this).data("gradient-size");
                $(this).css({
                    background: "linear-gradient(90deg," + e + ")",
                    "background-size": t + "%" + t + "%",
                });
            }),
            $(".sidebar").exists() &&
                $(".sidebar")
                    .sidebar("attach events", ".sidebar-button", "show")
                    .sidebar("setting", "transition", "overlay"),
            $(".qcf").exists() &&
                (setTimeout(function () {
                    $("body").addClass("qcf-ready");
                }, 600),
                $(".qcf-backdrop").on("click touchstart touch", function (e) {
                    $(".qcf, .qcf-trigger").removeClass("active"),
                        $("body").removeClass("qcf-active");
                }),
                $(".qcf-trigger").on("click touch", function () {
                    return (
                        $("body").hasClass("qcf-active")
                            ? ($(".qcf, .qcf-trigger").removeClass("active"),
                              $("body").removeClass("qcf-active"))
                            : ($(".qcf, .qcf-trigger").addClass("active"),
                              $("body").addClass("qcf-active")),
                        !1
                    );
                }),
                $(
                    ".qcf, .qcf-trigger, .error-message, .error-message button"
                ).on("click touch touchstart", function (e) {
                    (e = e || window.event).stopPropagation();
                })),
            $("footer.footer-fixed").exists())
        ) {
            var e = $("footer.footer-fixed"),
                t = $(e).outerHeight();
            $(
                '<div class="fullwidth bg-transparent footer-keeper" style="height:' +
                    t +
                    'px;"></div> '
            ).insertAfter(e),
                $("body").addClass("footer-fixed-page"),
                $(window).resize(function () {
                    var t = $(e).outerHeight();
                    $(".footer-keeper").height(t);
                });
        }
        $("button.dropdown-toggle + .dropdown-menu").each(function () {
            var e = "#" + $(this).attr("aria-labelledby"),
                t = $(this);
            $(t)
                .find("li")
                .on("click", function () {
                    var t = $(e).children(),
                        i = $(this).find("div").html();
                    $(e).text(i).append(t);
                });
        }),
            $("[data-bs-toggle^='collapse']").on("click", function () {
                $("[data-bs-toggle]").removeClass("active"),
                    setTimeout(function () {
                        $(
                            "[data-bs-toggle^='collapse'][aria-expanded^='true']"
                        ).addClass("active");
                    }, 50);
            }),
            $(".quantity").each(function () {
                var e = $(this).find(".minus"),
                    t = $(this).find(".plus"),
                    i = $(this).find(".numbers"),
                    a = $(i).attr("min"),
                    o = $(i).attr("max");
                $(t).on("click", function () {
                    $(i).val() === o || $(i).val(parseInt($(i).val(), 10) + 1);
                }),
                    $(e).on("click", function () {
                        $(i).val() === a ||
                            $(i).val(parseInt($(i).val(), 10) - 1);
                    });
            }),
            $(".text-typer").exists() &&
                $(".text-typer").each(function () {
                    var e = $(this),
                        t = $(e).data("delay"),
                        i = $(e).data("speed");
                    $(e).typed({
                        stringsElement: $(e).find(".text-get"),
                        typeSpeed: i,
                        backDelay: t,
                        loop: !0,
                        contentType: "html",
                        loopCount: !1,
                        showCursor: !0,
                        resetCallback: function () {
                            newTyped();
                        },
                    });
                }),
            detectWindowHeightChange(document.body, function () {
                $(".cbp-item:last-child").hasClass("cbp-item-loading") &&
                    ($(".lightbox_gallery").exists() &&
                        ($(".lightbox_gallery")
                            .data("lightGallery")
                            .destroy(!0),
                        $(window).callLightboxGallery()),
                    $(".lightbox_selected").exists() &&
                        ($(".lightbox_selected")
                            .data("lightGallery")
                            .destroy(!0),
                        $(window).callLightboxSelected()),
                    $(".lightbox").exists() &&
                        ($(".lightbox").data("lightGallery").destroy(!0),
                        $(window).callLightbox()));
            });
        var i = $(".modern-nav"),
            a = $(".modern-nav.sticky"),
            o = $(".hide-by-scroll");
        if (
            ($(a).sticky({ topSpacing: 0 }),
            $(".modern-nav .nav-menu a[href^='#']:not([href='#'])").exists() &&
                !isEdge &&
                !isIE)
        )
            new bootstrap.ScrollSpy(document.body, {
                target: ".modern-nav .nav-menu",
                offset: 150,
            });
        if ($(".scroll-spy").exists() && !isEdge && !isIE)
            new bootstrap.ScrollSpy(document.body, {
                target: ".scroll-spy",
                offset: 150,
            });
        function n() {
            if ($(window).scrollTop() > 70) {
                if (
                    ($(i).hasClass("sticky") || $(i).hasClass("fixed")) &&
                    ($(i).addClass("scrolled"),
                    ($(".modern-nav .top-bar:not(.cookie)").exists() ||
                        $(
                            ".modern-nav.has-header-cookie-bar .cookie-active"
                        ).exists()) &&
                        !1 === mobile)
                ) {
                    var e = $(".modern-nav .top-bar").outerHeight();
                    $(i).css({
                        "-webkit-transform": "translateY(-" + e + "px)",
                        transform: "translateY(-" + e + "px)",
                    });
                }
            } else {
                $(i).removeClass("scrolled");
                e = $(".modern-nav .top-bar").outerHeight();
                $(i).css({ "-webkit-transform": "none", transform: "none" });
            }
        }
        $(".modern-nav").on("mouseenter", function () {
            $(".modern-nav").addClass("mouseover");
        }),
            $(".modern-nav").on("mouseleave", function () {
                $(".modern-nav").removeClass("mouseover");
            }),
            n();
        var s,
            r = function () {
                var e = $(".nav-menu").find("a").parents("li"),
                    t = $(".nav-menu").find("a.active").parents("li");
                $(e).removeClass("active"),
                    $(t).addClass("active"),
                    n(),
                    $(window).scrollTop() + $(window).height() ===
                        $(document).height() && $(o).removeClass("hiding");
            },
            d = !1;
        if (
            ($(window).scroll(function () {
                d ||
                    ((d = !0),
                    clearTimeout(s),
                    r(),
                    setTimeout(function () {
                        d = !1;
                    }, 50),
                    (s = setTimeout(function () {
                        r();
                    }, 50)));
            }),
            $(".modern-nav .dd-toggle").each(function () {
                var e = $(this),
                    t = null;
                $(this).on("mouseenter", function () {
                    if ($(window).width() > 992) {
                        window.clearTimeout(t);
                        var e = $(this),
                            a = $(e).find(">.dropdown-menu");
                        $(a).stop(!0, !0).addClass("d-flex"),
                            $(".modern-nav .dd-toggle")
                                .not(e)
                                .not($(this).parents(".dd-toggle"))
                                .not($(this).find(".dd-toggle"))
                                .find(".dropdown-menu")
                                .stop(!0, !0)
                                .removeClass("d-flex")
                                .parents()
                                .removeClass("showing");
                        var o = $(i).offset().top,
                            n = ($(i).outerHeight(), $(a).offset().top - o),
                            s = ($(e).outerWidth(), $(a).outerHeight()),
                            r = $(window).outerHeight(),
                            d =
                                $(window).outerWidth() -
                                (a.offset().left + a.outerWidth()),
                            l =
                                $(window).outerWidth() -
                                (e.offset().left + e.outerWidth()),
                            c = $(window).outerHeight() - (n + a.outerHeight());
                        if (
                            (d < 30
                                ? $(a).hasClass("mega-menu")
                                    ? ($(a).hasClass("to-center") &&
                                          $(a)
                                              .addClass("to-left centered-lg")
                                              .removeClass("to-right to-center")
                                              .css({ right: 10 - l + "px" }),
                                      $(a).hasClass("to-right") &&
                                          $(a)
                                              .addClass("to-left right-lg")
                                              .removeClass("to-right to-center")
                                              .css({ right: 10 - l + "px" }))
                                    : $(a)
                                          .removeClass("to-right to-center")
                                          .addClass("to-left")
                                : ($(a).hasClass("centered-lg") &&
                                      $(a)
                                          .addClass("to-center")
                                          .removeClass(
                                              "to-right to-left centered-lg"
                                          )
                                          .css({ right: "auto" }),
                                  $(a).hasClass("right-lg") &&
                                      $(a)
                                          .addClass("to-right")
                                          .removeClass(
                                              "to-left to-center right-lg"
                                          )
                                          .css({ right: "auto" })),
                            c < 20 &&
                                ($(a).hasClass("mega-menu") ||
                                    $(a).css({ top: r - (n + s) - 20 + "px" })),
                            $(e).find(".mega-menu").length > 0)
                        ) {
                            var u = $(window).width(),
                                m = $(e).find(">.mega-menu");
                            if (m.outerWidth() >= u - 60) {
                                m.find("ul.column").length;
                                m.addClass("too-big");
                            } else m.removeClass("too-big");
                        }
                    }
                }),
                    $(this).on("mouseleave", function () {
                        var e = $(this),
                            i = $(e).find(".dropdown-menu");
                        $(window).width() > 992 &&
                            (t = window.setTimeout(function () {
                                $(i).removeClass("d-flex");
                            }, 400));
                    }),
                    $(".modern-nav .nav-links>li:not(.dd-toggle) a").on(
                        "mouseenter",
                        function () {
                            $(window).width() > 992 &&
                                $(".modern-nav .dropdown-menu").stop().hide();
                        }
                    ),
                    $(this)
                        .find(">a:not(.lg)")
                        .on("click", function () {
                            var t = $(this);
                            if ($(window).width() < 992)
                                return (
                                    t.next("ul").length &&
                                        $(t).attr("href", "#"),
                                    $(e)
                                        .find(">.dropdown-menu")
                                        .stop()
                                        .slideToggle({
                                            duration: 400,
                                            easing: "easeInOutQuart",
                                        })
                                        .parent()
                                        .toggleClass("showing"),
                                    $(".modern-nav .dd-toggle")
                                        .not(e)
                                        .not($(this).parents(".dd-toggle"))
                                        .not($(this).find(".dd-toggle"))
                                        .find(".dropdown-menu")
                                        .stop(!0, !0)
                                        .slideUp({
                                            duration: 400,
                                            easing: "easeInOutQuart",
                                        })
                                        .parent(".dd-toggle")
                                        .removeClass("showing"),
                                    !1
                                );
                        });
            }),
            $(".mobile-nb").on("click", function () {
                return (
                    $(".modern-nav .mobile-nav-bg").fadeIn(300),
                    $(".modern-nav .nav-menu").addClass("animate"),
                    setTimeout(function () {
                        $(".modern-nav, .modern-nav .nav-menu").addClass(
                            "active"
                        );
                    }, 300),
                    !1
                );
            }),
            $(".mobile-nav-bg").on("click", function () {
                return (
                    $(".modern-nav, .modern-nav .nav-menu").removeClass(
                        "active"
                    ),
                    $(".modern-nav .mobile-nav-bg").fadeOut(300),
                    $(".modern-nav li").removeClass("showing"),
                    $(".modern-nav .dropdown-menu").slideUp(300),
                    setTimeout(function () {
                        $(".modern-nav .nav-menu").removeClass("animate");
                    }, 500),
                    !1
                );
            }),
            $(
                "a[href^='#']:not([href='#']):not(.no-scroll):not([data-slide]):not([data-toggle])"
            ).on("click touch", function (e) {
                var t = $(this),
                    i = $(".modern-nav").data("offset"),
                    a = $(t).attr("href");
                e.preventDefault(),
                    $(a).length &&
                        ($(".modern-nav").length
                            ? $("html, body")
                                  .stop()
                                  .animate(
                                      {
                                          scrollTop:
                                              $(t.attr("href")).offset().top -
                                              i +
                                              "px",
                                      },
                                      920,
                                      "easeInOutExpo"
                                  )
                            : $("html, body")
                                  .stop()
                                  .animate({
                                      scrollTop: $(t.attr("href")).offset().top,
                                  }));
            }),
            $("a[href='#top'], a[href='#home']").on("click", function () {
                $("html, body")
                    .stop()
                    .animate({ scrollTop: 0 }, 1120, "easeInOutExpo");
            }),
            $(".stay").on("click", function (e) {
                e.preventDefault();
            }),
            $(".stay-all").on("click", function () {
                return !1;
            }),
            $(".hide-by-scroll").exists() ||
                $("#back-to-top").exists() ||
                $(".hide-on-home").exists())
        ) {
            $("#back-to-top, .hide-on-home").hide();
            var l = window.pageYOffset;
            (window.onscroll = function () {
                var e = window.pageYOffset;
                l > e
                    ? $(".hide-by-scroll").removeClass("hiding")
                    : e > 700 &&
                      $(
                          ".hide-by-scroll:not(.modern-nav.active):not(.mouseover)"
                      ).addClass("hiding"),
                    (l = e),
                    $(this).scrollTop() > 500
                        ? (document.body.classList.remove("welcome-home"),
                          $(
                              "#back-to-top:not(.ready), .hide-on-home:not(.ready)"
                          )
                              .addClass("fading ready")
                              .fadeIn("300", function () {
                                  $(this).removeClass("fading");
                              }))
                        : (document.body.classList.add("welcome-home"),
                          $("#back-to-top, .hide-on-home")
                              .addClass("fading")
                              .fadeOut("300", function () {
                                  $(this).removeClass("fading ready");
                              }));
            }),
                $("body").mousemove(function (e) {
                    e.clientY <= 80 &&
                        $(".modern-nav").hasClass("hiding") &&
                        $(".modern-nav").removeClass("hiding");
                });
        }
        if (
            ($(".hide-by-click").on("click", function () {
                $(this).fadeOut("slow");
            }),
            $(".fs-searchform").exists())
        ) {
            var c = $(".search-form-trigger"),
                u = $(".fs-searchform");
            setTimeout(function () {
                $("body").addClass("fsf-ready");
            }, 300),
                $(c).on("click touch", function (e) {
                    return (
                        $(u).addClass("active"),
                        setTimeout(function () {
                            $(".fs-searchform input").focus();
                        }, 900),
                        !1
                    );
                }),
                $(".form-bg, .fs-searchform .close").on("click", function () {
                    $(".fs-searchform").removeClass("active");
                }),
                $(document).keyup(function (e) {
                    27 === e.keyCode &&
                        $(".fs-searchform").removeClass("active");
                }),
                $(".fs-searchform a").on("click", function () {
                    var e = this.getAttribute("href");
                    return (
                        $(".fs-searchform").removeClass("active"),
                        setTimeout(function () {
                            document.location.href = e;
                        }, 500),
                        !1
                    );
                });
        }
        $('<textarea id="math" style="display:none;"></textarea>').insertAfter(
            "body"
        );
        var m = Math.floor(5 * Math.random()),
            h = Math.floor(5 * Math.random()),
            f = m + h;
        $("#math").html(f),
            $(".verify-input").each(function () {
                var e = $(this);
                e.hasClass("label-animation")
                    ? e
                          .next()
                          .find("span")
                          .html(m + "+" + h + "= ?")
                    : $(".verify-input").attr(
                          "placeholder",
                          m + "+" + h + "= ?"
                      );
            });
        var v = $(".validate-me");
        $(v).each(function () {
            var e = $(this);
            "quick_form" === $(e).attr("name") ||
                $(v).parents(".modal").length ||
                $(e).waypoint(
                    function (t) {
                        $(e).toggleClass("invisibleForm");
                    },
                    { offset: "0%" }
                );
        }),
            $(".label-animation .input").each(function () {
                $(this).focusin(function () {
                    $(this).parent().addClass("active");
                }),
                    $(this).focusout(function () {
                        0 === $(this).val().length &&
                            $(this).parent().removeClass("active");
                    });
            }),
            $(v).each(function () {
                var e = $(this).find('[type="submit"]'),
                    t = $(this),
                    i = t.attr("data-error-message"),
                    a = t.attr("data-submit-message"),
                    o = t.attr("data-max-file-size"),
                    n = t.attr("data-max-file-size-error");
                $.validator.addMethod("filesize", function (e, t, i) {
                    for (var a = $(t)[0].files, o = 0, n = 0; n < a.length; n++)
                        o += a[n].size;
                    return this.optional(t) || o <= i;
                }),
                    $(e).on("click", function () {
                        (!$(t).hasClass("invisibleForm") &&
                            $(t).attr("name", "quick_form")) ||
                            $("html, body")
                                .stop()
                                .animate(
                                    { scrollTop: $(t).offset().top - 70 },
                                    700,
                                    "easeInOutExpo"
                                );
                    }),
                    $(t).validate({
                        ignore: ".ignore",
                        rules: {
                            verify: { equalTo: "#math" },
                            hiddenRecaptcha: {
                                required: function () {
                                    return "" === grecaptcha.getResponse()
                                        ? ($(t)
                                              .find(".g-recaptcha")
                                              .addClass("error_warning"),
                                          !0)
                                        : ($(t)
                                              .find(".g-recaptcha")
                                              .removeClass("error_warning"),
                                          !1);
                                },
                            },
                            userfile: {
                                required: !0,
                                filesize: o,
                                function() {
                                    var e = $("#userfile")[0].files;
                                    if (e) {
                                        for (
                                            var i = 0, a = 0;
                                            a < e.length;
                                            a++
                                        )
                                            i += e[a].size;
                                        i > o
                                            ? t.find("span.max-size").html(n)
                                            : t.find("span.max-size").empty();
                                    }
                                },
                            },
                        },
                        onfocusout: !1,
                        showErrors: function (e, t, a) {
                            clearTimeout(void 0),
                                $("div#submit_message") &&
                                    $("div#submit_message").fadeOut(
                                        "fast",
                                        function () {
                                            $("div#submit_message")
                                                .remove()
                                                .stop()
                                                .clearQueue();
                                        }
                                    ),
                                this.currentElements.removeClass(
                                    "error_warning"
                                ),
                                $.each(t, function (e, t) {
                                    if (
                                        (clearTimeout(void 0),
                                        $(t.element).addClass("error_warning"),
                                        0 === $("#error_message").length)
                                    ) {
                                        $("#error_message, #submit_message")
                                            .remove()
                                            .stop()
                                            .clearQueue(),
                                            $("body")
                                                .append(
                                                    '<div id="error_message" class="error-message bg-white t-center bs-lg pt-30"><i class="ti-alert fs-30 block"></i><p class="fs-16 gray8 lh-25 mt-25 px-30 px-15-sm">' +
                                                        i +
                                                        '</p><button class="block fullwidth mt-30 py-15 white lh-normal fs-16 bold relative"><span class="timer">5</span><span class="ti-close btn-cls"></span></button></div>'
                                                )
                                                .stop()
                                                .clearQueue();
                                        var a = $("#error_message");
                                        setTimeout(function () {
                                            a.addClass("on")
                                                .delay(5e3)
                                                .queue(function () {
                                                    $(this)
                                                        .removeClass("on")
                                                        .dequeue()
                                                        .delay(400)
                                                        .queue(function () {
                                                            $(this)
                                                                .remove()
                                                                .dequeue();
                                                        });
                                                });
                                        }, 10),
                                            $(a)
                                                .find("button")
                                                .on("click", function () {
                                                    $(a)
                                                        .removeClass("on")
                                                        .dequeue()
                                                        .delay(400)
                                                        .queue(function () {
                                                            $(a)
                                                                .remove()
                                                                .dequeue();
                                                        });
                                                });
                                        var o = 5,
                                            n = setInterval(function () {
                                                --o <= 0
                                                    ? clearInterval(n)
                                                    : $(
                                                          "#error_message .timer"
                                                      ).text(o);
                                            }, 1e3);
                                    }
                                });
                        },
                        submitHandler: function (i) {
                            $(e)
                                .not(".loading")
                                .addClass("loading")
                                .append("<span class='loader'></span>"),
                                $.ajax({
                                    url: i.action,
                                    type: i.method,
                                    data: new FormData($(i)[0]),
                                    cache: !1,
                                    contentType: !1,
                                    processData: !1,
                                    success: function () {
                                        $("#error_message").remove(),
                                            $("#submit_message").remove(),
                                            $("body")
                                                .append(
                                                    '<div id="submit_message" class="submit-message bg-white t-center bs-lg pt-30"><i class="ti-check fs-30 block"></i><p class="fs-16 gray8 lh-25 mt-25 px-30">' +
                                                        a +
                                                        '</p><button class="block fullwidth mt-30 py-15 white lh-normal fs-16 bold relative"><span class="timer">5</span><span class="ti-close btn-cls"></span></button>'
                                                )
                                                .addClass(
                                                    t.attr("id") + "_sending"
                                                );
                                        var i = $("#submit_message");
                                        setTimeout(function () {
                                            i.addClass("on")
                                                .delay(5e3)
                                                .queue(function () {
                                                    $(this)
                                                        .removeClass("on")
                                                        .dequeue()
                                                        .delay(400)
                                                        .queue(function () {
                                                            $(this)
                                                                .remove()
                                                                .dequeue();
                                                        });
                                                });
                                        }, 10),
                                            $(i)
                                                .find("button")
                                                .on("click", function () {
                                                    $(i)
                                                        .removeClass("on")
                                                        .dequeue()
                                                        .delay(400)
                                                        .queue(function () {
                                                            $(i)
                                                                .remove()
                                                                .dequeue();
                                                        });
                                                });
                                        var o = 5,
                                            n = setInterval(function () {
                                                --o <= 0
                                                    ? clearInterval(n)
                                                    : $(
                                                          "#submit_message .timer"
                                                      ).text(o);
                                            }, 1e3);
                                        t
                                            .find("span.max-size, span.value")
                                            .empty(),
                                            $(
                                                ".label-animation.active"
                                            ).removeClass("active"),
                                            $(t)
                                                .trigger("reset")
                                                .addClass("reseting done"),
                                            setTimeout(function () {
                                                $(t)
                                                    .removeClass("reseting")
                                                    .addClass(
                                                        "reset-completed"
                                                    ),
                                                    $("body").addClass(
                                                        t.attr("id") + "_sent"
                                                    );
                                            }, 1e3),
                                            $(e).removeClass("loading"),
                                            $("body").hasClass("qcf-active") &&
                                                ($("body").removeClass(
                                                    "qcf-active"
                                                ),
                                                $(
                                                    ".qcf, .qcf-trigger"
                                                ).removeClass("active"));
                                    },
                                });
                        },
                    });
            }),
            $(".qdr-alert-trigger").each(function () {
                var e,
                    t = $(this),
                    i = $(t).data("target");
                $(t).on("click", function () {
                    clearTimeout(e),
                        $(i).fadeOut(0).stop().clearQueue(),
                        setTimeout(function () {
                            $(i).fadeIn(300);
                        }, 1),
                        (e = setTimeout(function () {
                            $(i).fadeOut(300);
                        }, 3e3));
                });
            });
        var g = $(".lightbox_gallery");
        ($.fn.callLightboxGallery = function () {
            $(g).lightGallery({
                selector:
                    "a:not(.no-lightbox):not(.cbp-item-off):not(.hide-from-lightbox)",
                download: !1,
                speed: 400,
                loop: !0,
                controls: !0,
                thumbWidth: 100,
                thumbContHeight: 100,
                thumbnail: !0,
                thumbMargin: 8,
                share: !0,
                cssEasing: "cubic-bezier(0.645, 0.045, 0.355, 1)",
                loadYoutubeThumbnail: !0,
                youtubeThumbSize: "default",
                iframeMaxWidth: "75%",
                loadVimeoThumbnail: !0,
                vimeoThumbSize: "thumbnail_medium",
                youtubePlayerParams: {
                    modestbranding: 1,
                    showinfo: 0,
                    rel: 0,
                    controls: 0,
                },
                vimeoPlayerParams: { byline: 0, portrait: 0, color: "A90707" },
            }),
                $(g).not(".no-lightbox").addClass("lightboxed");
        }),
            $(g).exists() && $(window).callLightboxGallery();
        var p = $(".lightbox_selected");
        ($.fn.callLightboxSelected = function () {
            $(p).lightGallery({
                selector:
                    "a.lightbox_item:not(.cbp-item-off):not(.hide-from-lightbox)",
                download: !1,
                speed: 500,
                loop: !0,
                controls: !0,
                thumbWidth: 100,
                thumbContHeight: 100,
                thumbMargin: 8,
                thumbnail: !0,
                share: !0,
                cssEasing: "cubic-bezier(0.645, 0.045, 0.355, 1)",
                loadYoutubeThumbnail: !0,
                youtubeThumbSize: "default",
                loadVimeoThumbnail: !0,
                iframeMaxWidth: "75%",
                vimeoThumbSize: "thumbnail_medium",
                youtubePlayerParams: {
                    modestbranding: 1,
                    showinfo: 0,
                    rel: 0,
                    controls: 0,
                },
                vimeoPlayerParams: { byline: 0, portrait: 0, color: "A90707" },
            });
        }),
            $(p).exists() && $(window).callLightboxSelected();
        var b = $(".lightbox");
        ($.fn.callLightbox = function () {
            $(b).lightGallery({
                selector: "this",
                download: !1,
                thumbWidth: 100,
                thumbContHeight: 100,
                thumbnail: !0,
                share: !0,
                loadYoutubeThumbnail: !0,
                youtubeThumbSize: "default",
                iframeMaxWidth: "100%",
                loadVimeoThumbnail: !0,
                youtubePlayerParams: {
                    modestbranding: 1,
                    showinfo: 0,
                    rel: 0,
                    controls: 0,
                },
                vimeoPlayerParams: { byline: 0, portrait: 0, color: "A90707" },
            });
        }),
            $(b).exists() && $(window).callLightbox(),
            $(".custom-slider").exists() &&
                ($(".custom-slider").each(function () {
                    var e = $(this);
                    $(e)
                        .slick({
                            fade: !0,
                            dots: !1,
                            arrows: !1,
                            autoplay: !1,
                            autoplaySpeed: 3e3,
                            pauseOnHover: !0,
                            lazyLoad: "ondemand",
                            infinite: !0,
                            rtl: !1,
                            edgeFriction: 0.35,
                            easing: "cubic-bezier(0.645, 0.045, 0.355, 1)",
                            touchThreshold: 150,
                            speed: 400,
                            waitForAnimate: !0,
                            slidesToShow: 1,
                            initialSlide: 0,
                            draggable: !1,
                            adaptiveHeight: !0,
                            variableWidth: !1,
                            prevArrow:
                                '<div class="slider-prev d-flex align-items-center justify-content-center"></div>',
                            nextArrow:
                                '<div class="slider-next d-flex align-items-center justify-content-center"></div>',
                            centerMode: !1,
                            slidesToScroll: 1,
                            setPosition: 1,
                            swipe: !0,
                            touchMove: !0,
                            rows: 0,
                            responsive: [
                                {
                                    breakpoint: 992,
                                    settings: {
                                        slidesToShow: 1,
                                        slidesToScroll: 1,
                                    },
                                },
                                {
                                    breakpoint: 600,
                                    settings: {
                                        slidesToShow: 1,
                                        slidesToScroll: 1,
                                    },
                                },
                            ],
                        })
                        .on("afterChange", function (t, i, a, o) {
                            $(e).find(".animate");
                            var n = $(e).find(".slick-current .animate"),
                                s = $(e).find(
                                    ".slick-slide:not(.slick-current) .animate"
                                );
                            Waypoint.refreshAll(),
                                $(n).each(function () {
                                    var e = $(this),
                                        t = e.data("animation"),
                                        i = e.data("animation-delay");
                                    setTimeout(function () {
                                        e.addClass(t + " visibleme");
                                    }, i);
                                }),
                                $(s).each(function () {
                                    var e = $(this),
                                        t = e.data("animation");
                                    e.removeClass(t + "visibleme");
                                }),
                                $(".slick-current video").each(function () {
                                    this.play();
                                }),
                                $(
                                    ".slick-slide:not(.slick-current) video"
                                ).each(function () {
                                    this.pause();
                                }),
                                $(e)
                                    .find(".slick-current .zoom-timer")
                                    .addClass("scaling"),
                                document
                                    .querySelectorAll(".slick-current animate")
                                    .forEach((e) => {
                                        e.beginElement();
                                    });
                        })
                        .on("beforeChange", function (t, i, a, o) {
                            Waypoint.refreshAll();
                            $(e).find(".animate");
                            var n = $(e).find(
                                ".slick-slide:not(.slick-current) .animate"
                            );
                            (n = $(e).find(
                                ".slick-slide:not(.slick-current) .animate"
                            )),
                                $(e).find(".animate");
                            $(n).each(function () {
                                var e = $(this),
                                    t = e.data("animation");
                                e.data("animation-delay");
                                $(e).removeClass(t + " visibleme");
                            }),
                                $(e).find(".zoom-timer").removeClass("scaling");
                            var s = $("[data-slick-index=" + o + "]");
                            $(s).hasClass("nav-to--dark") &&
                                $(".modern-nav")
                                    .removeClass("details-white")
                                    .addClass("details-dark"),
                                $(s).hasClass("nav-to--white") &&
                                    $(".modern-nav")
                                        .removeClass("details-dark")
                                        .addClass("details-white");
                        });
                }),
                $(".custom-slider").on(
                    "touchstart touchmove touchend",
                    function () {
                        $(".custom-slider").slick(
                            "slickSetOption",
                            "swipe",
                            !0
                        );
                    }
                ),
                $(".custom-slider")
                    .find(".slick-current .zoom-timer")
                    .addClass("scaling"),
                $(".custom-slider .slick-current .animate").each(function () {
                    var e = $(this),
                        t = e.data("animation"),
                        i = e.data("animation-delay");
                    $(e).removeClass(t),
                        setTimeout(function () {
                            e.addClass(t + " visibleme");
                        }, i);
                }),
                $("[data-slider-control]").on("click", function () {
                    var e = $(this).attr("data-slider-control");
                    "prev" === $(this).data("slider-dir") &&
                        $(e).slick("slickPrev"),
                        "next" === $(this).data("slider-dir") &&
                            $(e).slick("slickNext");
                }),
                $(".custom-slider-next").on("click", function () {
                    $(".custom-slider").slick("slickNext");
                }),
                $(".custom-slider-prev").on("click", function () {
                    $(".custom-slider").slick("slickPrev");
                })),
            $(".nav-to-custom-slider").exists() &&
                $(".nav-to-custom-slider").each(function () {
                    var e = $(this);
                    $(e)
                        .slick({
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            asNavFor: ".custom-slider",
                            dots: !1,
                            touchThreshold: 150,
                            arrows: !1,
                            centerMode: !1,
                            focusOnSelect: !0,
                        })
                        .on("beforeChange", function (t, i, a) {
                            setTimeout(function () {
                                $(e)
                                    .find(
                                        ".slick-slide .active-me-slick.active"
                                    )
                                    .removeClass("active"),
                                    $(e)
                                        .find(".slick-current .active-me-slick")
                                        .addClass("active");
                            }, 50);
                        });
                }),
            $("[data-background-color-selector]").exists() &&
                $("[data-background-color-selector]").each(function () {
                    var e = $(this),
                        t = $(e).attr("data-background-color-selector");
                    e.waypoint(
                        function (e) {
                            "down" === e &&
                                ($(".bg-changeable").css({
                                    "background-color": t,
                                }),
                                $(".changeable-border").css({
                                    "border-color": t,
                                }));
                        },
                        { offset: "60%" }
                    ),
                        e.waypoint(
                            function (e) {
                                "up" === e &&
                                    ($(".bg-changeable").css({
                                        "background-color": t,
                                    }),
                                    $(".changeable-border").css({
                                        "border-color": t,
                                    }));
                            },
                            { offset: "-50%" }
                        );
                }),
            $(
                '.cbp-l-loadMore-button, [data-toggle]:not([data-bs-toggle="popover"]),[data-filter], .cbp-filter-item, .cbp-l-loadMore-link'
            ).on("click", function () {
                setTimeout(function () {
                    isParallaxBrowsers &&
                        !1 === mobile &&
                        (skrollr.init({ forceHeight: !1 }).refresh(),
                        $(".icon-navigation").addClass("slow"));
                    Waypoint.refreshAll();
                }, 500),
                    setTimeout(function () {
                        $(".icon-navigation").removeClass("slow");
                    }, 1400);
            }),
            $(".slick-slider").on("beforeChange", function (e, t, i, a) {
                var o = $(this).find(".slick-current iframe");
                setTimeout(function () {
                    o.attr("src", o.attr("src"));
                }, 1e3);
                $(this).data("slider-options");
            }),
            $(".box-hover-row").exists() &&
                $(".box-hover-row").each(function () {
                    var e = $(this),
                        t = e.find(".visible-item"),
                        i = e.find(".hidden-item").height() / 2;
                    $(t).css({
                        "-webkit-transform": "translateY(" + i + "px)",
                        transform: "translateY(" + i + "px)",
                    });
                }),
            $(window).resize(function () {
                $("body").getDeviceWidth(),
                    $("body").animatedItems(),
                    !0 === mobile || $(window).width() < 992
                        ? $("[data-bg-mobile]").each(function () {
                              var e = $(this).data("bg-mobile");
                              $(this).css({
                                  "background-image": "url(" + e + ")",
                                  "background-size": "cover !important",
                              });
                          })
                        : ($("[data-background]").each(function () {
                              var e = $(this).data("background");
                              $(this)
                                  .removeClass("bg-mobiled")
                                  .css({
                                      "background-image": "url(" + e + ")",
                                  });
                          }),
                          $("[data-bg]").each(function () {
                              var e = $(this).data("bg");
                              $(this)
                                  .removeClass("bg-mobiled")
                                  .css({ "background-image": e });
                          }));
            });
        var w = $(".page-loader");
        setTimeout(function () {
            w.addClass("page-loader--fading-out");
        }, 100),
            setTimeout(function () {
                w.removeClass("page-loader--fading-out").addClass(
                    "page-loader--hidden"
                );
            }, 800),
            ($.fn.animatedItems = function () {
                !1 === mobile &&
                    ($(".animated").each(function () {
                        var e = $(this),
                            t = e.data("animation"),
                            i = e.data("animation-delay");
                        $(e).waypoint(
                            function () {
                                !e.hasClass("visible") && t
                                    ? i
                                        ? setTimeout(function () {
                                              e.addClass(t + " visible");
                                          }, i)
                                        : e.addClass(t + " visible")
                                    : e.addClass("visible");
                            },
                            { offset: "93%" }
                        );
                    }),
                    $(".animated-container").each(function () {
                        var e = $(this);
                        $(e)
                            .find("[data-animation-delay]")
                            .each(function () {
                                var t = $(this),
                                    i = $(this).data("animation"),
                                    a = t.data("animation-delay");
                                $(e).waypoint(
                                    function () {
                                        !t.hasClass("visible") && i
                                            ? a
                                                ? setTimeout(function () {
                                                      t.addClass(
                                                          i + " visible"
                                                      );
                                                  }, a)
                                                : t.addClass(i + " visible")
                                            : t.addClass("visible");
                                    },
                                    { offset: "93%" }
                                );
                            });
                    }));
            }),
            $("body").animatedItems(),
            $(".bg-animated, .bg-animated-reverse, .bg-animated-vertical").each(
                function () {
                    $("<div class='bg-animator'></div>").appendTo(this);
                }
            ),
            $(".sticky-item").exists() &&
                $(".sticky-item").each(function () {
                    var e = $(this).data("top-spacing");
                    $(this).sticky({ topSpacing: e });
                }),
            ($.fn.stckyCalculating = function () {
                $(".sticky-container").each(function () {
                    var e = $(this),
                        t = $(e).data("fix-container");
                    $(window).on("scroll", function () {
                        ($.fn.makeSticky = function () {
                            var i = $(e).parent().outerWidth(),
                                a = $(t).offset().top,
                                o = $(t).outerHeight() - $(e).outerHeight(),
                                n = $(e).data("top-spacing"),
                                s = a + $(t).outerHeight() - $(e).outerHeight(),
                                r = $(window).scrollTop() + n;
                            r < a &&
                                $(e)
                                    .css({
                                        top: "0px",
                                        position: "absolute",
                                        "max-width": i + "px",
                                    })
                                    .addClass("before-cont")
                                    .removeClass("on-cont after-cont"),
                                r > a &&
                                    r < s &&
                                    $(e)
                                        .css({
                                            top: n + "px",
                                            position: "fixed",
                                            "max-width": i + "px",
                                        })
                                        .addClass("on-cont")
                                        .removeClass("before-cont after-cont"),
                                r >= s &&
                                    $(e)
                                        .css({
                                            top: o + "px",
                                            position: "absolute",
                                            "max-width": i + "px",
                                        })
                                        .addClass("after-cont")
                                        .removeClass("before-cont on-cont");
                        }),
                            $(t).has(e) &&
                                $(window).width() > 1e3 &&
                                $(e).makeSticky();
                    });
                });
            }),
            $(".sticky-container").exists() &&
                $(".sticky-container").stckyCalculating(),
            $("[data-ajax-load]").exists() &&
                $("[data-ajax-load]").each(function () {
                    var e = $(this).data("ajax-load"),
                        t = $(this);
                    $(this)
                        .empty()
                        .load(e, function () {
                            $(t).hasClass("ajax-slider") &&
                                $(this).find(".custom-slider").slick();
                        });
                });
    });
