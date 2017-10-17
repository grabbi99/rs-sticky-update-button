(function ($) {

    'use strict';

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            $('.rs-sticky-update-button-section').addClass('stk-active');
            $('input#publish').addClass('stk-active-update');
        } else {
            $('.rs-sticky-update-button-section').removeClass('stk-active');
            $('input#publish').removeClass('stk-active-update');
        }
    });

}(jQuery));