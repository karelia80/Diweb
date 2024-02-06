<!-- la estrucctura del modal -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="modal1label">Insertar datos cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <form action="guarda.php" method="post" enctype="multipart/form-data" class="form w-100 text-light">
            <label for="nif" class="form-label text-dark">NIF</label>
            <input type="text" name="nif" id="nif" class="form-control"><br>

            <label for="nombre" class="form-label text-dark">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control"><br>

            <label for="correo" class="form-label text-dark">Correo Eléctronico</label>
            <input type="email" name="correo" id="correo" class="form-control"><br>

            <label for="telefono" class="form-label text-dark">Teléfono de contacto</label>
            <input type="tel" name="telefono" id="telefono" class="form-control"><br>

        <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i>&nbsp;Cancelar</button>
        <button type="submit" class="btn btn-primary onclick="guardarCliente()"><i class="bi bi-download"></i>&nbsp;Guardar</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div><br>