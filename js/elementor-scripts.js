
//Elementor Scripts
jQuery(function ($) {


    $(window).on('elementor/frontend/init', function () {
        elementorFrontend.hooks.addAction('frontend/element_ready/hero_slider.default', function ($scope, $) {
          
          var timeline = new TimelineMax();
    $('.featured-slider').slick({
      autoplay: false,
    });
  
    
          
        })
        });
    });