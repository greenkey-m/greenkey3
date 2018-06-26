/**
 * @package	Greenkey4
 * @copyright	Copyright (C) 2018, Inc. All rights reserved.
 */


// Intro Slider
jQuery(document).ready(function () {

    $("button.offcanvas").click(function (e) {
        $(".offside").toggleClass("open");
        e.preventDefault();
        return false;
    });

    $(".offside").click(function (e) {
        $(".offside").toggleClass("open");
        //e.preventDefault();
        //return false;
    });


});

