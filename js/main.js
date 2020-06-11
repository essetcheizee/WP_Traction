jQuery(function ($) {


  var timeline = new TimelineMax();
  $('.featured-slider').slick({
    autoplay: true,
    arrow: false,
    autoplaySpeed: 1e4,
    infinite: true,
    speed: 1200,
    draggable: false,
    swipe: false,
    fade:true
  });
  var timer;
	
	
	

  $('.item-pagination').eq(0).addClass('active')


  $('.testimonial__carousel.slick').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
  });

  $('.testimonial__carousel__left').on('click', function (e) {
    e.preventDefault();
    $('.testimonial button.slick-next.slick-arrow').click();
  });



  $('.testimonial__carousel__right').on('click', function (e) {
    e.preventDefault();
    $('.testimonial button.slick-prev.slick-arrow').click();
  });



  $('.toggle-menu.open').click(function () {
    $('.menus-wrapper').addClass('mobile');
    $('.navigation').addClass('mobile');
    $('.navigation').removeClass('closeNav');
    // console.log('hello!');
  });
  $('.toggle-menu.close').click(function () {
    $('.menus-wrapper').removeClass('mobile');
    $('.navigation').removeClass('mobile');

    $('.navigation').addClass('closeNav');

    // console.log('hello!');
  });
var lastScrollTop = 0;
  $(window).scroll(function () {
    var height = $(window).scrollTop();
    var pData = $('.strategy__section.--wrapper .strategy__section__description ul li');
    pData.each(function () {

      if (height > $(this).offset().top / 1.3) {
        $(this).addClass('active');
        $(this).prev().removeClass('active');
      } else {
        $(this).removeClass('active');

      }

    });

var st = $(this).scrollTop() / 10;
   
   if (st > lastScrollTop){
       TweenLite.set($('.rotating-logo .svg-wrapper svg'), {rotation:st/10})
   } else {
      
      TweenLite.set($('.rotating-logo .svg-wrapper svg' ), {rotation:st/10})
   }
   lastScrollTop = st;
    var steps = $('.strategy__section.--wrapper .strategy__section__steps ul li');

    steps.each(function () {
      var activeDesc = $('.strategy__section.--wrapper .strategy__section__description ul li.active');
      if ($(this).attr('data-order') === $(activeDesc).attr('data-order')) {
        $(this).prev().removeClass('active');
        $(this).addClass('active');
      } else {
        $(this).removeClass('active');

      }
    });







    // if (height < current - 30) {
    //   $('.strategy__section.--wrapper .strategy__section__description ul li p').addClass('active');

    // } else {
    //   // 
    //   $('.strategy__section.--wrapper .strategy__section__description ul li p').removeClass('active');
    // }

  });




  function firstLoadAnim() {
    var $slider = $('.slick-active'),
      $sliderIndex = $slider.data('slick-index'),
      $slideBg = $slider.find('img'),
      $pagination = $('.item-pagination.active'),
      $nextSlide = $($slider).index()
    $slideText1 = $slider.find('.title-first-line')
    $slideText2 = $slider.find('.title-second-line')
    $animationCircle = $($pagination).find('.outer-circle svg g')
    $link = $slider.find('a')

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

    if ($($pagination).hasClass('active')) {



      $animationCircle = $($pagination).find('.outer-circle svg g')

      timeline
        .to($animationCircle, 9, {
          css: {
            'stroke-dashoffset': 10
          }
        })
        .to($slideBg, 9, {
          scale: 1.15,
          ease: Linear.easeOut
        }, '-=9')
        .to($link, 1, {
          autoAlpha: 1,
          y: 0
        }, '-=9')
        .to($slideText2, 2, {
          y: 0,
          autoAlpha: 1,
          delay: .50,
          ease: Power4.easeOut
        }, '-=9')
        .to($slideText1, 2, {
          y: 0,
          autoAlpha: 1,
          delay: .75,
          ease: Power4.easeOut
        }, '-=9')
        .to($slideText2, .5, {
          y: 150
        })
        .to($slideText1, .5, {
          y: 150,
          delay: .25
        }, '-=.5')
        .to($link, .5, {
          y: 50,
          autoAlpha: 0,
          delay: .50
        }, '-=.5')
        .to($animationCircle, 1, {
          css: {
            'stroke-dashoffset': -150
          },
          ease: Quint.easeIn
        }, '-=1')

      timer = setInterval(function () {
        if (timeline.isActive()) {

        } else {

          $('.featured-slider').slick('slickGoTo', parseInt($nextSlide), {
            autoplay: true
          })
        }
      });
    }
  }
  $(window).on('load', function () {

    firstLoadAnim()

  })

  $('.featured-slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    
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
      y: 150
    })
    TweenLite.set($slideText2, {
      autoAlpha: 0,
      y: 150
    })
    TweenLite.set($link, {
      autoAlpha: 0,
      y: 50
    })
    
    TweenLite.to($bgSlider,.5, {width:"100%", opacity:.2, ease:Linear.easeNone})
    
    TweenLite.set($bgSlider, {width:0, opacity: .9})
  })
  $('.featured-slider').on('afterChange', function (event, slick, currentSlide, nextSlide) {
    
    $bgSlider = $('.hero').find('.bg-slider');
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
    e.preventDefault;
    var $sliderIndex = $(this).index(),
      $slideIndex = $('.slick-active').data('slick-index');

    if (timeline.isActive()) {
      if ($sliderIndex === $slideIndex) {
        return
      } else {


        TweenLite.to(timeline, {
          timeScale: 10.5,
          ease: Strong.easeIn
        })
        var circle = document.querySelectorAll('a .outer-circle svg g');
        TweenLite.set(circle, {
          css: {
            'stroke-dashoffset': 160
          }
        });
        timer = setTimeout(function () {
          $('.featured-slider').slick('slickGoTo', parseInt($sliderIndex), {
            autoplay: true
          })
        }, 1300)
      }
    } else {
      return
    }

  })


  function animateSlider() {

    TweenLite.set($bgSlider, {width:0, opacity: .9})
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
      .to($animationCircle, 9, {
        css: {
          'stroke-dashoffset': 10
        }
      })
      .to($slideBg, 9, {
        scale: 1.15,
        ease: Linear.easeOut
      }, '-=9')
      .to($link, 1, {
        autoAlpha: 1,
        y: 0
      }, '-=9')
      .to($slideText2, 2, {
        y: 0,
        autoAlpha: 1,
        delay: .50,
        ease: Power4.easeOut
      }, '-=9')
      .to($slideText1, 2, {
        y: 0,
        autoAlpha: 1,
        delay: .75,
        ease: Power4.easeOut
      }, '-=9')
      .to($slideText2, .5, {
        y: 150
      })
      .to($slideText1, .5, {
        y: 150,
        delay: .25
      }, '-=.5')
      .to($link, .5, {
        y: 50,
        delay: .50,
        autoAlpha: 0
      }, '-=.5')
      .to($animationCircle, 1, {
        css: {
          'stroke-dashoffset': -150
        },
        ease: Quint.easeIn
      }, '-=1')

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
    $('.services').attachDragger();

  });
  var slider = document.querySelectorAll('.services__slider__item');
  var trigger = $('.services__slider'),
    maxDragX = $('.services__slider__item').length * (-130);
  console.log(maxDragX)

  Draggable.create(slider, {
    type: "x",
    trigger: trigger,
    edgeResistance: .90,
    dragResistance: .50,
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

  $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();
  $('a.branding.--header, div.menus-wrapper, div.navigation').unwrap();



  if($('ul.menu li.menu-item').hasClass('current_page_item')){
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
    console.log(scroll)
});