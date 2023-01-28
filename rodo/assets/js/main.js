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
    speed: 5000,
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
  $("#btn-form").click(function(event) {
    event.preventDefault();
    let mailFormat =
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var numberFormat = /^[0-9]+$/;
    var nombre = $("#nombre").val();
    var email = $("#email").val();
    var telefono = $("#telefono").val();
    var mensaje = $("#mensaje").val();
    if (nombre.length < 1) {
        Swal.fire({
            icon: "error",
            title: "UPS!",
            text: 'El campo "nombre" es obligatorio',
        });
        $("#nombre").focus();
    } else if (email.length < 1) {
        Swal.fire({
            icon: "error",
            title: "UPS!",
            text: 'El campo "correo electrónico" es obligatorio',
        });
        $("#email").focus();
    } else if (!mailFormat.exec(email)) {
        Swal.fire({
            icon: "error",
            title: "ERROR",
            text: "Ingresa una dirección de correo válida",
        });
    } else if (telefono.length < 1) {
        Swal.fire({
            icon: "error",
            title: "UPS!",
            text: 'El campo "teléfono" es obligatorio',
        });
        $("#telefono").focus();
    } else if (!numberFormat.exec(telefono)) {
        Swal.fire({
            icon: "error",
            title: "ERROR",
            text: "El campo solo acepta números",
        });
    } else if (mensaje.length < 1) {
        Swal.fire({
            icon: "error",
            title: "UPS!",
            text: 'El campo "mensaje" es obligatorio',
        });
        $("#mensaje").focus();
    } else {
        $.ajax({
            type: "POST",
            url: "https://leoscandura.es/rodo/mail.php",
            data: $("#form-contacto").serialize(),
            success: function(data) {
                
                if (parseInt(data)) {
                    Swal.fire({
                        icon: "success",
                        title: "GRACIAS",
                        text: "El formulario se envió exitosamente. En breve se contactarán contigo",
                    });
                    $("#form-contacto").trigger("reset");
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "ERROR",
                        text: "Algo salió mal. Revisa la conexión a internet y vuelve a intentarlo nuevamente.",
                    });
                }
            },
            error: function(request, error) {
                Swal.fire({
                    icon: "error",
                    title: "ERROR",
                    text: "Algo salió mal. Revisa la conexión a internet y vuelve a intentarlo nuevamente.",
                });
            },
        });
    }
});


