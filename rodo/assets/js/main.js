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
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 1000,
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
  $("#btn_form").click(function(event) {

    event.preventDefault();
  let mailFormat = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var nombre = $("#nombre").val();
      var email = $("#email").val();
      var telefono = $("#telefono").val();
      var mensaje = $("#mensaje").val();
  if (nombre.length < 1) {
    Swal.fire({
        icon: 'error',
        title: 'UPS!',
        text: 'El campo "nombre" es obligatorio',
    });
    $("#nombre").focus();
  } else if (email.length < 1) {
    Swal.fire({
        icon: 'error',
        title: 'UPS!',
        text: 'El campo "correo electrónico" es obligatorio',
    });
    $("#email").focus();
  } else if (!mailFormat.exec(email)) {
    Swal.fire({
        icon: 'error',
        title: 'ERROR',
        text: 'Ingresa una dirección de correo válida',
    });
  }else if (telefono.length < 1) {
    Swal.fire({
        icon: 'error',
        title: 'UPS!',
        text: 'El campo "telefono" es obligatorio',
    });
    $("#telefono").focus();
  } 
  else if (mensaje.length < 1){
    Swal.fire({
      icon: 'error',
      title: 'UPS!',
      text: 'El campo "mensaje" es obligatorio',
  });
  $("#mensaje").focus();
  }else {
    $.ajax({
        type: "POST",
        url: "inc/mandar_mail.php",
        data: $("#form_contacto").serialize(),
        success: function (data) {
            console.log(data);
            Swal.fire({
                icon: 'success',
                title: 'GRACIAS',
                text: 'El formulario se envió exitosamente. Un agente se contactará contigo a la brevedad',
            });
            $('#form_contacto').trigger("reset");
        
  
        },
        error: function (request, error) {
            Swal.fire({
                icon: 'error',
                title: 'ERROR',
                text: 'Algo salió mal. Revisa la conexión a internet y vuelve a intentarlo nuevamente.',
            });
        }
    });
  }});