import $ from 'jquery';
window.$ = window.jQuery = $;
require('./bootstrap/bootstrap.bundle.min')
require('./waves')

// App Style Switcher
$(function () {
  "use strict";

  //****************************
  /* Top navbar Theme Change function Start */
  //****************************
  function handlenavbarbg() {
    if ($('#main-wrapper').attr('data-navbarbg') == 'skin6') {
      // do this
      $(".topbar .navbar").addClass('navbar-light');
      $(".topbar .navbar").removeClass('navbar-dark');
    } else {
      // do that    
    }
  };

  handlenavbarbg();
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
  var setsidebartype = function () {
    var width = (window.innerWidth > 0) ? window.innerWidth : this.screen.width;
    if (width < 1170) {
      $("#main-wrapper").attr("data-sidebartype", "mini-sidebar");
    } else {
      $("#main-wrapper").attr("data-sidebartype", "full");
    }
  };
  $(window).ready(setsidebartype);
  $(window).on("resize", setsidebartype);

});