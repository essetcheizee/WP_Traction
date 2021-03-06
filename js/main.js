jQuery(function ($) {

  var timeline = new TimelineMax();
  $('.featured-slider').slick({
    arrow: false,
    infinite: true,
    autoplaySpeed: 1.6e4,
    speed: 430,
    draggable: false,
    swipe: false,
    fade: true,
    cssEase: 'linear'
  });
  var timer;


  var desc_list = $('.click-description .description-list ul li')[0];
  var desc_toggle = $('.click-description .description-toggle ul li a')[0];
  $(desc_list).addClass('active')
  $(desc_toggle).addClass('active')

  $('.item-pagination').eq(0).addClass('active')


  $('.testimonial__carousel.slick').slick({
    dots: true,
    infinite: true,
    speed:100,
    fade: true,
    cssEase: 'linear',
    autoplaySpeed: 10000,
    autoplay: true
  });

  $('.testimonial__carousel__left').on('click', function (e) {
    e.preventDefault();
    $('.testimonial button.slick-next.slick-arrow').click();
    
    var titleHeight = $('.testimonial__carousel__item.slick-active .testimonial__carousel__item__name h3').position().top;
    var titleHeightByTwo = $('.testimonial__carousel__item.slick-active .testimonial__carousel__item__name h3').position().top / 14;

    var total =  titleHeight + titleHeightByTwo;

    $('.testimonial .testimonial__wrapper .testimonial__section .mdl__wrap .testimonial__carousel.control').css('top', total + "px");
    $('.testimonial .slick-dots').css('top', total + "px");
    
  });



  $('.testimonial__carousel__right').on('click', function (e) {
    e.preventDefault();
    $('.testimonial button.slick-prev.slick-arrow').click();
    
    var titleHeight = $('.testimonial__carousel__item.slick-active .testimonial__carousel__item__name h3').position().top;
    var titleHeightByTwo = $('.testimonial__carousel__item.slick-active .testimonial__carousel__item__name h3').position().top / 14;

    var total =  titleHeight + titleHeightByTwo;

    $('.testimonial .testimonial__wrapper .testimonial__section .mdl__wrap .testimonial__carousel.control').css('top', total + "px");
    $('.testimonial .slick-dots').css('top', total + "px");
    
  });



  $('.toggle-menu.open').click(function () {
    $('.menus-wrapper').addClass('mobile');
    $('.navigation').addClass('mobile');
	  
	  setTimeout(()=> {
		  
    	$('.branding.--header').addClass('mobile');
	  }, 430)
	  
    $('.navigation').removeClass('closeNav');
    // console.log('hello!');
  });
  $('.toggle-menu.close').click(function () {
    $('.menus-wrapper').removeClass('mobile');
    $('.navigation').removeClass('mobile');
	  
	  setTimeout(()=> {
		  
    	$('.branding.--header').removeClass('mobile');
	  }, 200);

    $('.navigation').addClass('closeNav');

    // console.log('hello!');
  });


  var position = $(window).scrollTop();



  var lastScrollTop = 0;
  $(window).scroll(function () {
    var height = $(window).scrollTop();
    // var pData = $('.strategy__section.--wrapper .strategy__section__description ul li');
    // pData.each(function () {

    //   if (height > $(this).offset().top / 1.36) {
    //     $(this).addClass('active');
    //     $(this).prev().removeClass('active');
    //   } else {
    //     $(this).removeClass('active');

    //   }

    // });

    var scroll = $(window).scrollTop();
    var hero = $('.hero').height();
    if(!hero){
      
      $('.traction__header').addClass('white__bg');
   
  }else{
    if(scroll > hero){
      $('.traction__header').addClass('white__bg');
    }else{
      $('.traction__header').removeClass('white__bg');
    }
  }
    if (scroll > position) {

      if ($('.menus-wrapper').hasClass('mobile')) {

      } else {
        $('.traction__header').addClass('hide');
        $('.traction__header').removeClass('show');
      }

    } else {
      $('.traction__header').addClass('show');
      $('.traction__header').removeClass('hide');
    }
    position = scroll;


    var st = $(this).scrollTop() / 10;

    if (st > lastScrollTop) {
      TweenLite.set($('.rotating-logo .svg-wrapper svg'), {
        rotation: st / 2
      })
    } else {

      TweenLite.set($('.rotating-logo .svg-wrapper svg'), {
        rotation: st / 2
      })
    }
    lastScrollTop = st;
    // var steps = $('.strategy__section.--wrapper .strategy__section__steps ul li');

    // steps.each(function () {
    //   var activeDesc = $('.strategy__section.--wrapper .strategy__section__description ul li.active');
    //   if ($(this).attr('data-order') === $(activeDesc).attr('data-order')) {
    //     $(this).prev().removeClass('active');
    //     $(this).addClass('active');
    //   } else {
    //     $(this).removeClass('active');

    //   }

    //   if (height < $(this).offset().top - 1.35) {
    //     $('.strategy__section.--wrapper .strategy__section__description ul li p').addClass('active');

    //   } else {

    //     $('.strategy__section.--wrapper .strategy__section__description ul li p').removeClass('active');
    //   }


    // });


  });

  //Lets try Scroll Magic

  var controller = new ScrollMagic.Controller({
    globalSceneOptions: {
      duration:'40%'
    }
  })
  new ScrollMagic.Scene({
      triggerElement: '#crawl',
      triggerHook: 0.5,
    })
    .setClassToggle('#crawl', 'active')
    .addTo(controller)
  new ScrollMagic.Scene({
      triggerElement: "#walk"
    })
    .setClassToggle("#walk", "active") // add class toggle
    .addTo(controller);
  new ScrollMagic.Scene({
      triggerElement: "#run"
    })
    .setClassToggle("#run", "active") // add class toggle
    .addTo(controller);
  setInterval(function () {
    if ($('#crawl').hasClass('active')) {
      var step1 = $('.strategy__section.--wrapper .strategy__section__steps ul li')[0];
      $(step1).addClass('active')
    } else {

      var step1 = $('.strategy__section.--wrapper .strategy__section__steps ul li')[0]
      $(step1).removeClass('active')
    }
    if ($('#walk').hasClass('active')) {
      var step1 = $('.strategy__section.--wrapper .strategy__section__steps ul li')[1];
      $(step1).addClass('active')
    } else {

      var step1 = $('.strategy__section.--wrapper .strategy__section__steps ul li')[1]
      $(step1).removeClass('active')
    }
    if ($('#run').hasClass('active')) {
      var step1 = $('.strategy__section.--wrapper .strategy__section__steps ul li')[2];
      $(step1).addClass('active')
    } else {

      var step1 = $('.strategy__section.--wrapper .strategy__section__steps ul li')[2]
      $(step1).removeClass('active')
    }
  })

    var controller = new ScrollMagic.Controller({globalSceneOptions:{duration:'200'}})
     new ScrollMagic.Scene({
      triggerElement: '#crawl',
      triggerHook: 0.5,
    })
    .setClassToggle('#crawl', 'active')
    .addTo(controller)
    new ScrollMagic.Scene({triggerElement: "#walk"})
    .setClassToggle("#walk", "active") // add class toggle
    .addTo(controller);
    new ScrollMagic.Scene({triggerElement: "#run"})
    .setClassToggle("#run", "active") // add class toggle
    .addTo(controller);

  //   //check Active 
  // setInterval(function(){
  // if($('#crawl').hasClass('active')){
  //  var step1 = $('.strategy__section.--wrapper .strategy__section__steps ul li')[0];
  //  $(step1).addClass('active')
  // }else{

  //   var step1 = $('.strategy__section.--wrapper .strategy__section__steps ul li')[0]
  //   $(step1).removeClass('active')
  // }
  // if($('#walk').hasClass('active')){
  //   var step1 = $('.strategy__section.--wrapper .strategy__section__steps ul li')[1];
  //   $(step1).addClass('active')
  //  }else{

  //    var step1 = $('.strategy__section.--wrapper .strategy__section__steps ul li')[1]
  //    $(step1).removeClass('active')
  //  }
  //  if($('#run').hasClass('active')){
  //   var step1 = $('.strategy__section.--wrapper .strategy__section__steps ul li')[2];
  //   $(step1).addClass('active')
  //  }else{

  //    var step1 = $('.strategy__section.--wrapper .strategy__section__steps ul li')[2]
  //    $(step1).removeClass('active')
  //  }
  // })
  function firstLoadAnim() {
    var $slider = $('.slick-active'),
      $sliderIndex = $slider.data('slick-index'),
      $slideBg = $slider.find('img'),
      $pagination = $('.item-pagination.active'),
      $nextSlide = $($slider).next().index()
    $slideText1 = $slider.find('.title-first-line')
    $slideText2 = $slider.find('.title-second-line')
    $animationCircle = $($pagination).find('.outer-circle svg g')
    $link = $slider.find('a')
    TweenLite.set($animationCircle, {
      css: {
        'stroke-dashoffset': 160
      }
    })
    TweenLite.set($link, {
      autoAlpha: 0,
      y: 50
    })
    TweenLite.set($slideText1, {
      autoAlpha: 0,
      y: 150
    })
    TweenLite.set($slideText2, {
      autoAlpha: 0,
      y: 150
    })



    $animationCircle = $($pagination).find('.outer-circle svg g')

    timeline
      .to($animationCircle, 14, {
        css: {
          'stroke-dashoffset': 10
        }
      })
      .to($slideBg, 13, {
        scale: 1.15,
        ease: Linear.easeOut
      }, '-=14')
      .to($link, 1, {
        autoAlpha: 1,
        y: 0
      }, '-=14')
      .to($slideText2, 2, {
        y: 0,
        autoAlpha: 1,
        delay: .50,
        ease: Power4.easeOut
      }, '-=14')
      .to($slideText1, 2, {
        y: 0,
        autoAlpha: 1,
        delay: .75,
        ease: Power4.easeOut
      }, '-=14')
      .to($slideText1, .5, {
        autoAlpha: 0,
        ease: Power4.easeOut
      })
      .to($slideText2, .5, {
        autoAlpha: 0,
        ease: Power4.easeOut,
      }, '-=.5')
      .to($link, .5, {
        autoAlpha: 0,
        ease: Power4.easeOut,
      }, '-=.5')

    timer = setInterval(function () {
      if (timeline.isActive()) {

      } else {

        $('.featured-slider').slick('slickGoTo', parseInt($nextSlide), false)
      }
    });

  }
  $(window).on('load', function () {

    firstLoadAnim();

    $('.click-description .mdl__wrap .description-toggle ul li a.active').click();
    

    var titleHeight = $('.testimonial__carousel__item.slick-active .testimonial__carousel__item__name h3').position().top;
    var titleHeightByTwo = $('.testimonial__carousel__item.slick-active .testimonial__carousel__item__name h3').position().top / 14;

    var total =  titleHeight + titleHeightByTwo;

    $('.testimonial .testimonial__wrapper .testimonial__section .mdl__wrap .testimonial__carousel.control').css('top', total + "px");
    $('.testimonial .slick-dots').css('top', total + "px");
    
  })
  

  $('.testimonial__carousel.slick').on('mouseup mousedown afterChange', function () {

    var titleHeight = $('.testimonial__carousel__item.slick-active .testimonial__carousel__item__name h3').position().top ;
    var titleHeightByTwo = $('.testimonial__carousel__item.slick-active .testimonial__carousel__item__name h3').position().top / 14;

    var total =  titleHeight + titleHeightByTwo;

    $('.testimonial .testimonial__wrapper .testimonial__section .mdl__wrap .testimonial__carousel.control').css('top', total + "px");
    $('.testimonial .slick-dots').css('top', total + "px");

  });


  //   var heightList = $('.description-list ul li.active').outerHeight();
  //   $('.description-list ul').css('height', heightList + 'px');

  $('.description-toggle ul li a').each(function () {
    $(this).click(function (e) {
      e.preventDefault();
      $('.description-toggle ul li a.active').removeClass('active');
      $(this).addClass('active');
      $('.description-list ul li').filter(function () {
        if ($('.description-toggle ul li a.active').data('target') === $(this).data('target')) {
          $(this).addClass('active');

          var heightList = $('.description-list ul li.active').outerHeight();
          $('.description-list ul').css('height', heightList + 'px');
        } else {
          $(this).removeClass('active');
        }
      });
    })
  })



  $('.featured-slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    var beforeChange = new TimelineMax();

    var active = $($('.item-pagination')[currentSlide]).data('bg');
    $bgSlider = $('.hero').find('.bg-slider');

    clearTimeout(timer)
    timeline.timeScale(1)
    //Current Slide Animation
    $currentSlide = $(slick.$slides[currentSlide]);
    $currentBg = $currentSlide.find('img');
    $currentText1 = $currentSlide.find('hi.title-first-line');
    $currentText2 = $currentSlide.find('h1.title-second-line');
    $pagination = $('.item-pagination');

    $($pagination).removeClass('active')
    $($pagination[nextSlide]).addClass('active')
    TweenLite.set($currentBg, {
      scale: 1
    })
    // Next Slide
    $nextSlide = $(slick.$slides[nextSlide])
    $slideBg = $nextSlide.find('img')
    $slideText1 = $nextSlide.find('.title-first-line')
    $slideText2 = $nextSlide.find('.title-second-line')
    $link = $nextSlide.find('a')

    TweenLite.set($slideBg, {
      scale: 1
    })
    TweenLite.set($slideText1, {
      autoAlpha: 0,
      y: 150,
    })
    TweenLite.set($slideText2, {
      autoAlpha: 0,
      y: 150
    })
    TweenLite.set($link, {
      autoAlpha: 0,
      y: 50
    })

    var image = $bgSlider.find('img').attr('src', active)
    beforeChange.to($animationCircle, .85, {
        css: {
          'stroke-dashoffset': -150
        },
        ease: Linear.easeNone
      })
      //  .to($slideText2, .5, {
      //   y: 150
      // },'-=.5')
      // .to($slideText1, .5, {
      //   y: 150,
      //   delay: .25
      // }, '-=.5')
      // .to($link, .5, {
      //   y: 50,
      //   delay: .50,
      //   autoAlpha: 0
      // }, '-=.5')
      .fromTo($bgSlider, .85, {
        width: "100%",
      }, {
        width: "0%",
        ease: Linear.easeNone
      }, '-=.75')


  })
  $('.featured-slider').on('afterChange', function (event, slick, currentSlide) {

    $bgSlider = $('.hero').find('.bg-slider');

    TweenMax.set($bgSlider, {
      width: '0%'
    })

    timeline.timeScale(1)
    $img = $(slick.$slides).find('img');
    $animationCircle = $('.item-pagination.active').find('.outer-circle svg g')
    $currentSlide = $(slick.$slides[currentSlide]);
    $slideBg = $currentSlide.find('img');
    $slideText1 = $currentSlide.find('.title-first-line')
    $slideText2 = $currentSlide.find('.title-second-line')
    $pagination = $('.item-pagination');
    TweenLite.set($img, {
      scale: 1
    })

    if ($($pagination[currentSlide]).hasClass('active')) {
      animateSlider()

      timer = setInterval(function () {
        if (timeline.isActive()) {

        } else {

          $('.featured-slider').slick('slickGoTo', parseInt(currentSlide + 1), {
            autoplay: true
          })
        }
      });
    }
  })


  $('.item-pagination').on('click', function (e) {
    clearInterval(timer);
    e.preventDefault
    var $sliderIndex = $(this).index(),
      $slideIndex = $('.slick-active').data('slick-index');

    if (timeline.isActive()) {
      if ($sliderIndex === $slideIndex) {
        return
      } else {
        TweenLite.set($('.item-pagination'), {
          css: {
            'pointer-events': 'none'
          }
        })
        TweenLite.to(timeline, {
          timeScale: 16,
          ease: Strong.easeInOut
        })
        var circle = document.querySelectorAll('a .outer-circle svg g');
        TweenLite.set(circle, {
          css: {
            'stroke-dashoffset': 160
          }
        });
        timer = setInterval(function () {
          $('.featured-slider').slick('slickGoTo', parseInt($sliderIndex), {
            autoplay: true
          })

          TweenLite.set($('.item-pagination'), {
            css: {
              'pointer-events': 'auto'
            }
          })
        }, 1300)
      }
    }
    // else{
    //     if ($sliderIndex === $slideIndex) {
    //       return
    //     }else{
    //     TweenLite.to(timeline, {
    //       timeScale: 16,
    //       ease: Strong.easeIn
    //     })
    //     var circle = document.querySelectorAll('a .outer-circle svg g');
    //     TweenLite.set(circle, {
    //       css: {
    //         'stroke-dashoffset': 160
    //       }
    //     });
    //     timer = setInterval(function () {
    //       $('.featured-slider').slick('slickGoTo', parseInt($sliderIndex), {
    //         autoplay: true
    //       })
    //       TweenLite.set($('.item-pagination'),{css:{'pointer-events' : 'auto'}})
    //     }, 500)
    //   } 
    // }
  })

  function animateSlider() {

    TweenLite.set($slideBg, {
      scale: 1
    })
    TweenLite.set($animationCircle, {
      css: {
        'stroke-dashoffset': 160
      }
    })
    TweenLite.set($link, {
      autoAlpha: 0,
      y: 50
    })
    TweenLite.set($slideText1, {
      autoAlpha: 0,
      y: 150
    })
    TweenLite.set($slideText2, {
      autoAlpha: 0,
      y: 150
    })
    timeline
      .to($animationCircle, 14, {
        css: {
          'stroke-dashoffset': 10
        }
      })
      .to($slideBg, 13, {
        scale: 1.15,
        ease: Linear.easeOut
      }, '-=14')
      .to($link, 1, {
        autoAlpha: 1,
        y: 0
      }, '-=14')
      .to($slideText2, 2, {
        y: 0,
        autoAlpha: 1,
        delay: .50,
        ease: Power4.easeOut
      }, '-=14')
      .to($slideText1, 2, {
        y: 0,
        autoAlpha: 1,
        delay: .75,
        ease: Power4.easeOut
      }, '-=14')
      .to($slideText1, .5, {
        autoAlpha: 0,
        ease: Power4.easeOut
      })
      .to($slideText2, .5, {
        autoAlpha: 0,
        ease: Power4.easeOut,
      }, '-=.5')
      .to($link, .5, {
        autoAlpha: 0,
        ease: Power4.easeOut,
      }, '-=.5')
  }



  //OPTIONAL
  document.addEventListener('visibilitychange', function () {
    //Check if visibility is true
    if (document.visibilityState == 'visible') {
      $('.featured-slider').slick('slickPlay')

    } else {

      $('.featured-slider').slick('slickPause')
    }
  })


  // Draggable
  $.fn.attachDragger = function () {
    var attachment = false,
      lastPosition, position, difference;
    $($(this).selector).on("mousedown mouseup mousemove", function (e) {
      if (e.type == "mousedown") attachment = true, lastPosition = [e.clientX, e.clientY];
      if (e.type == "mouseup") attachment = false;
      if (e.type == "mousemove" && attachment == true) {
        position = [e.clientX, e.clientY];
        difference = [(position[0] - lastPosition[0]), (position[1] - lastPosition[1])];
        $(this).scrollLeft($(this).scrollLeft() - difference[0]);
        $(this).scrollTop($(this).scrollTop() - difference[1]);
        lastPosition = [e.clientX, e.clientY];

      }
    });
    $(window).on("mouseup", function () {
      attachment = false;
    });
  }
  $(document).ready(function () {
    $('.services_slider').attachDragger();

  });
  var slider = document.querySelectorAll('.services__slider__item');
  var trigger = $('.services__slider'),
    maxDragX = $('.services__slider__item').length * (-200);
  Draggable.create(slider, {
    type: "x",
    trigger: trigger,
    edgeResistance: .90,
    dragResistance: .50,
    lockAxis:true,
    bounds: {
      minX: 0,
      maxX: maxDragX
    },
    onPress: isDragging,
    onRelease: isReleased,
    inertia: true,
    cursor: 'none'
  })

  function isDragging() {
    TweenMax.to($('.circle'), .5, {
      css: {
        scale: 1.3
      },
      ease: Quad.easeInOut
    }, 400, -400);
    $('.circle').addClass('animate');
  }

  function isReleased() {
    TweenMax.to($('.circle'), .90, {
      css: {
        scale: 1
      },
      ease: Linear.easeNone
    }, 400, -400);
    $('.circle').removeClass('animate');
  }
  var cursor = $('.circle');

  function cursorMovement(e) {
    TweenLite.to(cursor, .3, {
      x: e.clientX,
      y: e.clientY,
      opacity: 1
    })

  }

  function cursorLeave() {
    TweenLite.to(cursor, .3, {
      opacity: 0
    })
  }
  $(slider).on('mousemove', cursorMovement)
  $(slider).on('mouseleave', cursorLeave)

  // $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  // $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  // $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  // $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  // $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  // $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  // $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  // $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  // $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  // $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  // $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  // $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  // $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();



  if ($('ul.menu li.menu-item').hasClass('current_page_item')) {
    $('ul.menu li.menu-item.current_page_item').find('a').addClass('active')
  }

});
//Elementor Scripts
(function ($) {


  $(window).on('elementor/frontend/init', function () {
    elementorFrontend.hooks.addAction('frontend/element_ready/hero_slider.default', function ($scope, $) {

      var timeline = new TimelineMax();
      $('.featured-slider').not('.slick-initialized').slick({
        autoplay: false,
      });

    })
  });

  $(window).on('elementor/frontend/init', function () {
    elementorFrontend.hooks.addAction('frontend/element_ready/click_desc.default', function ($scope, $) {

      var desc_list = $('.click-description .description-list ul li')[0];
      var desc_toggle = $('.click-description .description-toggle ul li a')[0];
      $(desc_list).addClass('active')
      $(desc_toggle).addClass('active')

    })
  });
  $(window).on('elementor/frontend/init', function () {
    elementorFrontend.hooks.addAction('frontend/element_ready/traction_testi.default', function ($scope, $) {

      $('.testimonial__carousel.slick').not('.slick-initialized').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
      });

    })
  });


})(jQuery)

window.addEventListener("scroll", function (event) {
  var scroll = this.scrollY;
});