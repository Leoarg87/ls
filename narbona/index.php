<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include 'head.php';
    ?>

</head>

<body style="overflow-x:hidden">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <img src="img/logo.png" class="img-fluid" alt="">
                <h1 class="red text-center mt-3">Catalogo General <br> Málaga 2023</h1>
            </div>

        </div>
    </div>
    <div class="container-fluid bg-header mt-5">
        <div class="container px-0">
            <h1 class="text-white py-5 text-center">Vinos en España</h1>
            <img src="img/mapa-españa.jpg" class="img-fluid" alt="">
        </div>

    </div>
    <div class="container-fluid bg-header pb-5">
        <div class="container bg-white  mb-5">
            <div class="col-12 pt-5 ">
                <h3 class="text-center text-dark">Buscador</h3>
                <div class="form-group d-flex">
                    <input type="text" id="searchTerm" class="form-control">
                    <button id="searchBtn" class="btn btn-danger"><i class="fa-solid fa-wine-bottle"></i></button>
                </div>

            </div>
            <div class="row py-5" id="tintos">
                <h1 class="text-center red pb-5">D.O.ca Rioja</h1>
                <div class="col-12 d-flex justify-content-center flex-column flex-lg-row  riojas">
                    <div class="col-12 col-lg-3 d-flex flex-column align-items-center">
                        <a type="button" class="position-relative text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <h2 class="red">Coso Viejo Joven</h2>
                            <img src="img/cosoviejo-joven.jpg" class="img-fluid vinos" alt="">
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title fs-5" id="exampleModalLabel">Coso Viejo Joven</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body row ">
                                        <img src="img/cosoviejo-joven-ficha.jpg" class="img-fluid img-modal" alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-3 d-flex flex-column align-items-center">

                        <a type="button" class="position-relative text-decoration-none" data-bs-toggle="modal" data-bs-target="#CosoviejoCrianza">
                            <h2 class="red">Coso Viejo Crianza</h2>
                            <img src="img/cosoviejo-crianza.jpeg" class="img-fluid vinos" alt="">
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="CosoviejoCrianza" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title fs-5" id="exampleModalLabel">Coso Viejo Crianza</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body row ">
                                        <img src="img/cosoviejo-crianza-ficha.jpg" class="img-fluid img-modal" alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 d-flex flex-column align-items-center">

                        <a type="button" class="position-relative text-decoration-none" data-bs-toggle="modal" data-bs-target="#CosoviejoReserva">
                            <h2 class="red">Coso Viejo Reserva</h2>
                            <img src="img/cosoviejo-reserva.jpeg" class="img-fluid vinos" alt="">
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="CosoviejoReserva" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title fs-5" id="exampleModalLabel">Coso Viejo Reserva</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body row ">
                                        <img src="img/cosoviejo-reserva-ficha.jpg" class="img-fluid img-modal" alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/separador.jpg" class="img-fluid py-3" alt="">

            <div class="row py-5" id="tintos">
                <h1 class="text-center red pb-5">D.O. Ribera del duero</h1>
                <div class="col-12 d-flex justify-content-center flex-column flex-lg-row  riojas">
                    <div class="col-12 col-lg-3 d-flex flex-column align-items-center">
                        <a type="button" class="position-relative text-decoration-none" data-bs-toggle="modal" data-bs-target="#cosoviejo-joven-ribera">
                            <h2 class="red">Coso Viejo Joven</h2>
                            <img src="img/cosoviejo-joven-ribera.png" class="img-fluid vinos" alt="">
                            <img src="img/sin-stock.png" class="sin-stock" alt="">
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="cosoviejo-joven-ribera" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title fs-5" id="exampleModalLabel">Coso Viejo Joven</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body row ">
                                        <img src="img/cosoviejo-joven-ribera-ficha.jpg" class="img-fluid img-modal" alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-3 d-flex flex-column align-items-center">

                        <a type="button" class="position-relative text-decoration-none" data-bs-toggle="modal" data-bs-target="#Cosoviejo-roble-ribera">
                            <h2 class="red">Coso Viejo Roble</h2>
                            <img src="img/cosoviejo-roble-ribera.png" class="img-fluid vinos" alt="">
                            <img src="img/poco-stock.png" class="poco-stock" alt="">
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="Cosoviejo-roble-ribera" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title fs-5" id="exampleModalLabel">Coso Viejo Roble</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body row ">
                                        <img src="img/cosoviejo-roble-ribera-ficha.jpg" class="img-fluid img-modal" alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 d-flex flex-column align-items-center">

                        <a type="button" class="position-relative text-decoration-none" data-bs-toggle="modal" data-bs-target="#Cosoviejocrianza-ribera">
                            <h2 class="red">Coso Viejo Crianza</h2>
                            <img src="img/cosoviejo-crianza-ribera.png" class="img-fluid vinos" alt="">
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="Cosoviejocrianza-ribera" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title fs-5" id="exampleModalLabel">Coso Viejo Crianza</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body row ">
                                        <img src="img/cosoviejo-crianza-ribera-ficha.jpg" class="img-fluid img-modal" alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/separador.jpg" class="img-fluid py-3" alt="">
            <div class="row py-5 blancos">
                <h1 class="text-center white pb-5">Rias Baixas</h1>
                <div class="col-12 d-flex justify-content-center flex-column flex-lg-row  riojas">



                    <div class="col-12 col-lg-3 d-flex flex-column align-items-center">

                        <a type="button" class="position-relative text-decoration-none" data-bs-toggle="modal" data-bs-target="#do-ferreiro">
                            <h2 class="white">Do Ferreiro </h2>
                            <img src="img/do-ferreiro.jpg" class="img-fluid vinos" alt="">
                            <img src="img/sin-stock.png" class="sin-stock" alt="">
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="do-ferreiro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title fs-5" id="exampleModalLabel">Do Ferreiro</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body row ">
                                        <img src="img/do-ferreiro-ficha.jpg" class="img-fluid img-modal" alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
            <img src="img/separador.jpg" class="img-fluid py-3" alt="">


            <div class="row py-5 blancos">
                <h1 class="text-center white pb-5">Rueda</h1>
                <div class="col-12 d-flex justify-content-center flex-column flex-lg-row  riojas">



                    <div class="col-12 col-lg-3 d-flex flex-column align-items-center">

                        <a type="button" class="position-relative text-decoration-none" data-bs-toggle="modal" data-bs-target="#cosoviejo-verdejo">
                            <h2 class="white">Coso Viejo Verdejo </h2>
                            <img src="img/cosoviejo-verdejo.png" class="img-fluid vinos" alt="">
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="cosoviejo-verdejo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title fs-5" id="exampleModalLabel">Coso Viejo Verdejo</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body row ">
                                        <img src="img/cosoviejo-verdejo-ficha.jpg" class="img-fluid img-modal" alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
            <img src="img/separador.jpg" class="img-fluid py-3" alt="">
            <div class="row py-5 blancos">
                <h1 class="text-center white pb-5">Jerez Sherry</h1>
                <div class="col-12 d-flex justify-content-center flex-column flex-lg-row  riojas">



                    <div class="col-12 col-lg-3 d-flex flex-column align-items-center">

                        <a type="button" class="position-relative text-decoration-none" data-bs-toggle="modal" data-bs-target="#finoenrama">
                            <h2 class="white">3 en rama </h2>
                            <img src="img/fino-rama.jpeg" class="img-fluid vinos" alt="">
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="finoenrama" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title fs-5" id="exampleModalLabel">Do Ferreiro</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body row ">
                                        <img src="img/finoenrama-ficha.jpg" class="img-fluid img-modal" alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>


    <?php
    include 'footer.php';
    ?>
    <script>
        $(document).ready(function() {
            $("#searchTerm").keypress(function(e) {
    if (e.which == 13) {
      $("#searchBtn").click();
    }
  });

    $("#searchBtn").click(function() {
    var searchTerm = $("#searchTerm").val();
    var allParagraphs = $("p, h1, h2, h3, h4");
    var allClasses = $("." + searchTerm);
    var allElements = $("*");
    var found = false;

    allParagraphs.each(function() {
      if ($(this).text().toLowerCase().indexOf(searchTerm.toLowerCase()) >= 0) {
        $('html,body').animate({
          scrollTop: $(this).offset().top
        }, 'slow');
        found = true;
        return false;
      }
    });

    allClasses.each(function() {
      if ($(this).text().toLowerCase().indexOf(searchTerm.toLowerCase()) >= 0) {
        $('html,body').animate({
          scrollTop: $(this).offset().top
        }, 'slow');
        found = true;
        return false;
      }
    });

    if (!found) {
      allElements.each(function() {
        if ($(this).hasClass(searchTerm)) {
          $('html,body').animate({
            scrollTop: $(this).offset().top
          }, 'slow');
          found = true;
          return false;
        }
      });
    }
  

                if (!found) {

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'No se encontro ningun vino con esas caracteristicas! Por favor intentalo de nuevo cambiando el texto introducido',

                    })
                }
            });
        });
    </script>
</body>

</html>