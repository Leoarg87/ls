<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include 'inc/head.php';
    ?>

</head>

<body style="overflow-x: hidden !important">
    <?php
    include 'inc/nav.php';
    ?>
    <div class="container-fluid px-0 position-relative">

        <div class=" bg-servicios-fotomaton">
            <div class="d-flex aling-items-center h-100 col-12 col-lg-6 justify-content-center mx-auto">
            <img src="assets/img/logo-png.png" class="img-fluid logo-png"alt="">
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8  mx-auto">
                <h2 class="h2-carousel fs-1  my-5 h1">Fotomatón</h2>
                <img src="assets/img/banner-fotomatón.jpg" class="img-fluid" alt="">

                <!-- <h3 class="h2-carousel fs-1  mt-5 h1 mb-3">¿En que consiste el fotomatón?</h6> -->
                <p class="p-servicios text-start mt-5">
                    Un fotomatón es una máquina fotográfica automatizada que permite a los usuarios tomar fotos de manera rápida y sencilla. <br><br>

                    Con una cámara incorporada de alta definición dotada de lentes de gran angular.<br><br>

                    Crea fotos, gif y videos de alta calidad para luego poder disfrutar de ellos tanto para subirlos a vuestras redes sociales o para tener ese recuerdo de tu gran evento. <br><br>

                    Un fotomatón es una excelente manera de crear recuerdos divertidos y duraderos de una fiesta o cualquier otro tipo de evento.
                </p>
                <h3 class="h2-carousel fs-1  mt-5 h1 mb-3">¿Que incluye?</h6>
                <img src="assets/img/queincluye.jpg" class="img-fluid" alt="">
                <h3 class="h2-carousel fs-1  mt-5 h1 mb-3">¿Como funciona?</h6>
                <p class="p-servicios text-start">
                    Irán dos personas a hacer el montaje, dar el servicio y desmontarlo una vez acabado el servicio de tres horas. <br> <br>
                    Salen dos copias al instante, una para el invitado y otra para el álbum de los novios. Uno de los azafatos se encargará de pegar una copia en el álbum y comentarle a los invitados que pueden dejar una dedicatoria y el otro azafato estará en el fotomatón explicando a los invitados como funciona y entregándole la otra copia de la foto. Los invitados podrán hacerse todas las fotos que deseen durante estas 3 horas y si quieren alguna copia más de la foto, solo tendrán que pedirla a los azafatos. Al terminar el servicio los azafatos entregarán el álbum a los novios con todas las fotos. <br> <br>
                    Y por último en la semana próxima a la boda o evento subimos todas las fotos y GIFs a una carpeta privada en nuestra web donde todos los invitados podrán ver y descargar.
                </p>
            </div>
            <div class="col-12 col-lg-8 mx-auto">

                <p class="p-servicios pt-3">Combina este servicio con otro y consigue una tarifa especial</p>

                <p class="p-servicios text-start">Para que tu evento sea todo un éxito, puedes crear un pack con varios de nuestros servicios: coches clásicos, neones, vapers , plataforma 360º, fotomatón, carrito candy bar, camper. Para solicitar un presupuesto totalmente personalizado, puedes ponerte en contacto con nosotros rellenando el siguiente formulario, llamándonos por teléfono o por Whatsapp.</p>
                <h5 class="text-center">
                    Haz que tu evento marque la diferencia
                </h5>
                
            </div>
        </div>
    </div>

    <?php
    include 'inc/contacto.php';
    ?>
    <?php
    include 'inc/footer.php';
    ?>
    <script>
        $('#fotomaton').addClass('active-servicio');
        $('#servicios').addClass('active');
    </script>
</body>

</html>