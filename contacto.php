<div class="container py-5">
    <div class="row">
        
        <div class="col-12 col-lg-6"><img src="assets/img/foto-contacto.jpg" alt="Leonardo Scandura" class="img-fluid"></div>
        <div class="col-12 col-lg-6">
        <h2 class="h2-contacto">Contacto</h2>
        <p class="p-contacto">No dudes en contactarme para pedirme presupuesto o cualquier duda que tengas</p>
        <form id="form" method="post" action="mail.php" onsubmit="false">
        <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="name" class="form-control" name="nombre"id="nombre">
                
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email"id="email">
                
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="number" class="form-control" name="telefono"id="telefono">
                
            </div>
            <div class="mb-3">
		<label for="mensaje">Mensaje</label>
		<textarea class="form-control" name='mensaje' id="mensaje" rows="3"></textarea>
	</div>
          
         
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Acepto la politica de privacidad</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        </div>
        
    </div>
</div>