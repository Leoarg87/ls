 $('.carousel-slick').slick({
  lazyLoad: 'ondemand',
  cssEase: 'linear',
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 5500,
  arrows: false,
  dots: false,
      pauseOnHover: true,
      responsive: 
      [
          {
              breakpoint: 1199,
              settings: {
              slidesToShow: 4
              }
          },
          {
              breakpoint: 991,
              settings: {
              slidesToShow: 2
              }
          },
          {
              breakpoint: 768,
              settings: {
              slidesToShow: 1
              }
          },
          {
              breakpoint: 520,
              settings: {
              slidesToShow: 1
              }
          }
      ]
});
$('.opiniones').slick({
    lazyLoad: 'ondemand',
    cssEase: 'linear',
    
    
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 0,
    speed: 500,
    arrows: true,
    prevArrow:'<a class="slick-prev flechas"><i class="fa-solid fa-chevron-left"></i></a>',
    nextArrow:'<a class="slick-next flechas"><i class="fa-solid fa-chevron-right"></i></a>',
    dots: false,
        pauseOnHover: true,
        responsive: 
        [
            {
                breakpoint: 1199,
                settings: {
                slidesToShow:3
                }
            },
            {
                breakpoint: 991,
                settings: {
                slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                slidesToShow: 1
                }
            },
            {
                breakpoint: 520,
                settings: {
                slidesToShow: 1
                }
            }
        ]
  });
              
  $('.carousel-bodas').slick({
    lazyLoad: 'ondemand',
    cssEase: 'linear',
    
    
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 3000,
    arrows: true,
    dots:true,
    prevArrow:'<a class="slick-prev flechas"><i class="fa-solid fa-chevron-left"></i></a>',
    nextArrow:'<a class="slick-next flechas"><i class="fa-solid fa-chevron-right"></i></a>',
    dots: false,
        pauseOnHover: true,
        responsive: 
        [
            {
                breakpoint: 1199,
                settings: {
                slidesToShow:3
                }
            },
            {
                breakpoint: 991,
                settings: {
                slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                slidesToShow: 1
                }
            },
            {
                breakpoint: 520,
                settings: {
                slidesToShow: 1
                }
            }
        ]
  });
        
// $( ".more_button" ).click(function() {
//     alert( "Handler for .click() called." );
//   });
  $('#more_button').click(function(){
    if($('#menu_wrapper').hasClass('normal')){
        $('#menu_wrapper').removeClass('normal');
        $('#menu_wrapper').addClass('active');
    }else{
        $('#menu_wrapper').addClass('normal');
        $('#menu_wrapper').removeClass('active');
    }
    
  });
  $(document).ready(function() {
    // Asociamos el evento submit al formulario
    $('#form').submit(function(event) {
      // Prevenimos que se envíe el formulario
      event.preventDefault();
  
      // Obtenemos los valores de los campos de formulario
      var nombre = $('#nombre').val();
      var email = $('#email').val();
      var mensaje = $('#mensaje').val();
  
      // Inicializamos la variable de error a false
      var error = false;
  
      // Validamos el nombre
      if (nombre.length < 2) {
        $('#error-nombre').text('El nombre debe tener al menos 2 caracteres');
        error = true;
      } else {
        $('#error-nombre').text('');
      }
  
      // Validamos el email
      if (!isValidEmail(email)) {
        $('#error-email').text('Ingrese un email válido');
        error = true;
      } else {
        $('#error-email').text('');
      }
  
      // Validamos el mensaje
      if (mensaje.length < 10) {
        $('#error-mensaje').text('El mensaje debe tener al menos 10 caracteres');
        error = true;
      } else {
        $('#error-mensaje').text('');
      }
  
      // Si no hay errores, enviamos el formulario
      if (!error) {
        $('#form').unbind('submit').submit();
      }
    });
  });
  
  // Función para validar el email
  function isValidEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
  }
  