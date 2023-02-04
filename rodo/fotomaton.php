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

        <div class="bg-servicios">

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10  mx-auto">
                <h2 class="h2-carousel fs-1  my-5 h1">Fotomatón</h2>
                <img src="assets/img/carousel/12.jpg" class="img-fluid" alt="">

                <h6 class="titulo2 my-5 fs-3">¿En que consiste el fotomatón?</h6>
                <p class="p-servicios text-start">
                    Un fotomatón es una máquina fotográfica automatizada que permite a los usuarios tomar fotos de manera rápida y sencilla. <br><br>

                    Con una cámara incorporada de alta definición dotada de lentes de gran angular.<br><br>

                    Crea fotos, gif y videos de alta calidad para luego poder disfrutar de ellos tanto para subirlos a vuestras redes sociales o para tener ese recuerdo de tu gran evento. <br><br>

                    Un fotomatón es una excelente manera de crear recuerdos divertidos y duraderos de una fiesta o cualquier otro tipo de evento.
                </p>
                <h6 class="titulo2 my-5 fs-3">¿Que incluye?</h6>
                <img src="assets/img/queincluye.jpg" class="img-fluid" alt="">
                <h6 class="titulo2 my-5 fs-3">¿Como funciona?</h6>
                <p class="p-servicios text-start">
                    Irán dos personas a hacer el montaje, dar el servicio y desmontarlo una vez acabado el servicio de tres horas. <br> <br>
                    Salen dos copias al instante, una para el invitado y otra para el álbum de los novios. Uno de los azafatos se encargará de pegar una copia en el álbum y comentarle a los invitados que pueden dejar una dedicatoria y el otro azafato estará en el fotomatón explicando a los invitados como funciona y entregándole la otra copia de la foto. Los invitados podrán hacerse todas las fotos que deseen durante estas 3 horas y si quieren alguna copia más de la foto, solo tendrán que pedirla a los azafatos. Al terminar el servicio los azafatos entregarán el álbum a los novios con todas las fotos. <br> <br>
                    Y por último en la semana próxima a la boda o evento subimos todas las fotos y GIFs a una carpeta privada en nuestra web donde todos los invitados podrán ver y descargar.
                </p>
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