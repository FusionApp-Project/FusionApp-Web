import $ from "jquery/dist/jquery.min";
import "bootstrap/dist/js/bootstrap.esm.min"
import "./waves"

window.$ = window.jQuery = $;

// App Style Switcher
$(function () {
    "use strict";

    /* Top navbar Theme Change function Start */

    function handleNavBarBG() {
        if ($('#main-wrapper').attr('data-navbarbg') === 'skin6') {
            const topBar = $(".topbar .navbar")
            topBar.addClass('navbar-light');
            topBar.removeClass('navbar-dark');
        }
    }

    handleNavBarBG();
});


/* CUSTOM JS */
$(function () {
    "use strict";

    $(".preloader").fadeOut();
    // this is for close icon when navigation open in mobile view
    $(".nav-toggler").on('click', function () {
        $("#main-wrapper").toggleClass("show-sidebar");
        $(".nav-toggler i").toggleClass("ti-menu");
    });
    $(".search-box a, .search-box .app-search .srh-btn").on('click', function () {
        $(".app-search").toggle(200);
        $(".app-search input").focus();
    });

    // ==============================================================
    // Resize all elements
    // ==============================================================
    $("body, .page-wrapper").trigger("resize");
    $(".page-wrapper").delay(20).show();

    //****************************
    /* This is for the mini-sidebar if width is less then 1170*/
    //****************************
    const setSidebarType = function () {
        const width = (window.innerWidth > 0) ? window.innerWidth : this.screen.width;
        if (width < 1170) {
            $("#main-wrapper").attr("data-sidebartype", "mini-sidebar");
        } else {
            $("#main-wrapper").attr("data-sidebartype", "full");
        }
    };
    $(window).ready(setSidebarType);
    $(window).on("resize", setSidebarType);
});
