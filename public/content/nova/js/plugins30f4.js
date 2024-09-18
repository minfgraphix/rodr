
// Start Function
(function($, window, document, undefined) {

    'use strict';

    //*********************************************
    //  REVOLUTION SLIDER FOR HOME
    //*********************************************

        // init cubeportfolio
            $('#portfolio-items').cubeportfolio({
                mediaQueries: [{
                    width: 992,
                    cols: 3,
                }, {
                    width: 640,
                    cols: 2,
                }, {
                    width: 480,
                    cols: 1,
                }],
                filters: '.filter-tags',
                defaultFilter: '*',
                layoutMode: 'grid',
                gridAdjustment: 'responsive',
                gapHorizontal: 10,
                gapVertical: 10,
                caption: 'none',
                animationType: 'quicksand',
                displayType: 'none',
                displayTypeSpeed: 0,
            });

            //Get .active class for filters
            $(".cbp-filter-item-active").addClass("active");
            $("[data-filter]").on("click", function(){
                $("[data-filter]").removeClass("active");
                $(".cbp-filter-item-active").addClass("active");
            });



    $('.chart').each(function(){
            var elem = $(this),
                size = elem.attr("data-size"),
                lineColor = elem.attr("data-line-color"),
                elWidth = elem.attr("data-line-width");
            elem.css({"height": size + "px"});
            $(elem).waypoint(function() {
                $(elem).easyPieChart({
                    easing: 'easeInOutExpo',
                    barColor: lineColor,
                    trackColor: 'rgba(127,127,127,0.09)',
                    scaleColor: 'transparent',
                    scaleLength: 5,
                    lineCap: 'round',
                    lineWidth: elWidth,
                    trackWidth: elWidth,
                    size: size,
                    rotate: 0,
                    animate: {
                        duration: 1600,
                        enabled: true
                    }
                });
            }, {offset: '101%'});
        });

// End Function
})(jQuery, window, document);
