$(document).ready(function(){
    $('.carousel').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows:true,
        centerPadding: '30px',
        prevArrow: ('<a  class="slick-prev flechas"><i class="fa-solid fa-chevron-left"></i></a>'),
        nextArrow:('<a class="slick-next flechas"><i class="fa-solid fa-chevron-right"></i></a>'),
        responsive: [
            {
                breakpoint: 992,
                settings: {
                  lazyLoad: 'ondemand',
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows:true,
        centerPadding: '30px',
        prevArrow: ('<a  class="slick-prev flechas"><i class="fa-solid fa-chevron-left"></i></a>'),
        nextArrow:('<a class="slick-next flechas"><i class="fa-solid fa-chevron-right"></i></a>'),
                }
              },
            {
              breakpoint: 768,
              settings: {
                lazyLoad: 'ondemand',
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows:true,
        centerPadding: '30px',
        prevArrow: ('<a  class="slick-prev flechas"><i class="fa-solid fa-chevron-left"></i></a>'),
        nextArrow:('<a class="slick-next flechas"><i class="fa-solid fa-chevron-right"></i></a>'),
              }
            },
            {
              breakpoint: 480,
              settings: {
                lazyLoad: 'ondemand',
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows:true,
                centerPadding: '30px',
                prevArrow: ('<a  class="slick-prev flechas"><i class="fa-solid fa-chevron-left"></i></a>'),
                nextArrow:('<a class="slick-next flechas"><i class="fa-solid fa-chevron-right"></i></a>'),
              }
            }
          ]
    });
    grecaptcha.reset(); 
    var $captcha = $('#recaptcha'); 
    responseCaptcha = grecaptcha.getResponse(); 
    
  });