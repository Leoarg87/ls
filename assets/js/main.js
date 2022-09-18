
$(document).ready(function(){
    $('.carousel').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        // autoplaySpeed: 2000,
        arrows:true,
        centerPadding: '20px',
        prevArrow: ('<a  class="slick-prev flechas"><i class="fa-solid fa-chevron-left"></i></a>'),
        nextArrow:('<a class="slick-next flechas"><i class="fa-solid fa-chevron-right"></i></a>'),
        responsive: [
            {
                breakpoint: 992,
                settings: {
                  arrows: true,
                  centerMode: false,
                  centerPadding: '40px',
                  slidesToShow: 1
                }
              },
            {
              breakpoint: 768,
              settings: {
                arrows: true,
                centerMode: false,
                centerPadding: '40px',
                slidesToShow: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerMode: false,
                centerPadding: '40px',
                slidesToShow: 1
              }
            }
          ]
    });
  });