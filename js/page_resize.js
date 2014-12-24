'use strict';

$(function () {
    var $window = $(window),
        $wrapper = $('.js-wrapper'),
        $content = $('.js-content');

    /**
     * Function returns true if it's a mobile device
     *
     * @function
     * @name isMobile
     * @returns {boolean}
     */
    function isMobile() {
        var userAgent = navigator.userAgent;

        if (/Android/i.test(userAgent)) {
            return /Mobile/i.test(userAgent);
        }

        return /webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(userAgent);
    }

    /**
     * Function makes page's height equal of window height on desktop devices
     *
     * @function
     * @name resizePage
     * @returns {undefined}
     */
    function resizePage() {
        var contentHeight,
            windowHeight,
            scale;

        if (isMobile()) {
            return;
        }

        contentHeight = $content.height();
        windowHeight = $window.height();
        scale = windowHeight / contentHeight;

        $content.css({
            '-ms-transform': 'scale(' + scale + ')',
            '-o-transform': 'scale(' + scale + ')',
            '-moz-transform': 'scale(' + scale + ')',
            '-webkit-transform': 'scale(' + scale + ')',
            'transform': 'scale(' + scale + ')'
        });
        $wrapper.height(contentHeight * scale);
    }

    resizePage();
    $window.on('resize', resizePage);
});