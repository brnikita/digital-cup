'use strict';

$(function () {
    var $window = $(window),
        $wrapper,
        $content = $('.js-content');

    /**
     * Function returns true if it's a mobile device
     *
     * @function
     * @name isMobile
     * @returns {boolean}
     */
    function isMobile() {
        return /Android|webOS|iPad|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    }

    /**
     * Function makes page's width equal of window width (for mobiles and tablets)
     * or height equal of window height (for desktop devices)
     *
     * @function
     * @name resizePage
     * @returns {undefined}
     */
    function resizePage() {
        var contentHeight = $content.height(),
            windowHeight = $window.height(),
            scale = windowHeight / contentHeight;

        $wrapper.css({
            height: contentHeight * scale
        });
        $content.css({
            '-ms-transform': 'scale(' + scale + ')',
            '-o-transform': 'scale(' + scale + ')',
            '-moz-transform': 'scale(' + scale + ')',
            '-webkit-transform': 'scale(' + scale + ')',
            'transform': 'scale(' + scale + ')'
        });
    }

    /**
     * Function makes screen responsive for differs types of devices
     *
     * @function
     * @name makeResponsive
     * @returns {undefined}
     */
    function makeResponsive() {

        if (isMobile()) {
            $content.addClass('content-mobile');
            return;
        }

        $content.addClass('content-desktop');
        $wrapper = $('<div>', {'class': 'wrapper js-wrapper'});
        $content.wrap($wrapper);
        //Wrap method uses copy of $wrapper
        $wrapper = $('.js-wrapper');
        resizePage();
        $window.on('resize', resizePage);
    }

    //makeResponsive();
});