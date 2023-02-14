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

        <div class="bg-servicios-photobus">
        <div class="d-flex aling-items-center h-100 col-12 col-lg-6 justify-content-center mx-auto">
            <img src="assets/img/logo-png.png" class="img-fluid logo-png"alt="">
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
            <h2 class=" text-center">
                Actualmente esta pagina esta en desarrollo. 
            </h2>
                <img src="assets/img/banner-photobus.jpg" class="img-fluid d-flex mx-auto my-5" alt="" style="max-height:450px">
                <p class=" text-center">
                Preferimos no publicar un producto que no esta acabado al 100%.
                <br>
                Disculpa las molestias.

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
        $('#autobus').addClass('active-servicio');
        $('#servicios').addClass('active');
    </script>
</body>

</html>