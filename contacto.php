<div class="container py-5" id="contacto">
    <div class="row">

        <div class="col-12 col-lg-6"><img src="assets/img/foto-contacto.jpg" alt="Leonardo Scandura" class="img-fluid"></div>
        <div class="col-12 col-lg-6 pt-5 pt-sm-0">
            <h2 class="h2-contacto">Ponte en contacto conmigo !!!</h2>
            <p class="p-contacto">

                Si quieres pedir un presupuesto personalizado o quieres realizar cualquier consulta puedes contactar conmigo rellenando el formulario de contacto que aparece abajo, indicando con el máximo detalle que puedas los servicios que necesitas e intentaré responder lo antes posible.</p>
            <form id="form" method="post" action="mail.php" onsubmit="false">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="name" class="form-control" name="nombre" id="nombre">

                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="email">

                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="number" class="form-control" name="telefono" id="telefono">

                </div>
                <div class="mb-3">
                    <label for="mensaje">Mensaje</label>
                    <textarea class="form-control" name='mensaje' id="mensaje" rows="3"></textarea>
                </div>


                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Acepto la politica de privacidad</label>
                    <span class="msg-error error"></span>
                    <div id="recaptcha" class="g-recaptcha" data-sitekey="6LdwAYIiAAAAABzB02TUCn-ZrvX_Kenuc3Cwz0ca"></div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

    </div>
</div>