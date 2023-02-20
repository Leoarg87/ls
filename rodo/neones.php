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

        <div class="bg-servicios-neones">
            <div class="d-flex aling-items-center h-100 col-12 col-lg-6 justify-content-center mx-auto">
                <img src="assets/img/logo-png.png" class="img-fluid logo-png" alt="">
            </div>

        </div>
    </div>



    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-lg-8 mx-auto">
                <h2 class=" text-center">
                    Actualmente esta pagina esta en desarrollo.
                </h2>
                <img src="assets/img/banner-neones.jpg" class="img-fluid d-flex mx-auto my-5" alt="">
                <p class=" text-center">
                    Preferimos no publicar un producto que no esta acabado al 100%.
                    <br>
                    Disculpa las molestias.

                </p>

                
                </div>
            </div>
        </div>
        <!-- <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
                <h2 class="h2-carousel fs-1">Neones</h2>
                <img src="assets/img/candy-bar.jpg" class="img-fluid d-flex mx-auto my-5" alt="" style="max-height:450px">
                <p class="p-servicios">
                    Nuestro carrito puede usarse para varios momentos en un mismo evento, totalmente personalizado a tu gusto y siguiendo la temática deseada para que tu celebración sea única e inolvidable.
                </p>
                <p class="p-servicios">
                    Es un carrito blanco, imperial y versátil, lo que permite puede usarse tanto como rincón de bienvenida, candy bar, cigar bar o incluso como estaciones dulce o salada.
                </p>
            </div>

        </div>
    </div> -->



        <?php
        include 'inc/contacto.php';
        ?>
        <?php
        include 'inc/footer.php';
        ?>
        <script>
            $('#neones').addClass('active-servicio');
            $('#servicios').addClass('active');
        </script>
</body>

</html>