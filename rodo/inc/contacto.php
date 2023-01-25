<div class="container py-5 px-0" id="contacto">
    <div class="d-flex justify-content-center">

       
        <div class="col-12 col-lg-8 pt-5 pt-sm-0 pe-0 pe-lg-5">
            <h2 class="h2-contacto text-center pb-3">CONTACTA CON NOSOTROS</h2>
            <h6 class="h6-contacto text-center pb-5">

            ¡DEJA LA DIVERSIÓN EN NUESTRAS MANOS!

             </h6>
            <form id="form-contacto" onsubmit="return false;" class="row px-3">
                <div class="col-12 col-lg-6 mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="name" class="form-control" name="nombre" id="nombre">

                </div>
                <div class="col-12 col-lg-6 mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" name="email" id="email">

                </div>
                <div class="col-12 col-lg-6 mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="number" class="form-control" name="telefono" id="telefono">

                </div>
                <div class="col-12 col-lg-6 mb-3">
                    <label for="mensaje"class="form-label">Mensaje</label>
                    <textarea class="form-control" name='mensaje' id="mensaje" rows="3"></textarea>
                </div>


                <div class="mb-3 col-12  form-check ps-3">
                    <input type="checkbox" class="form-check-input ms-0 me-2" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Acepto la politica de privacidad</label>
                    <span class="msg-error error"></span>
                    <div id="recaptcha" class="g-recaptcha" data-sitekey="6LdwAYIiAAAAABzB02TUCn-ZrvX_Kenuc3Cwz0ca"></div>
                    <button id="btn-form" class="btn btn-enviar mt-3 mt-lg-0">Enviar</button>
                </div>
               
            </form>
        </div>

    </div>
</div>