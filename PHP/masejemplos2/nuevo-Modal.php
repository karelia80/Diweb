
<!-- la estrucctura del modal -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="modal1label">Insertar Nuevo Club</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <form action="guardar.php" method="post" enctype="multipart/form-data" class="form w-100 text-light">
            <label for="cif" class="form-label text-dark">CIF</label>
            <input type="text" name="cif" id="cif" class="form-control"><br>

            <label for="nombre" class="form-label text-dark">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control"><br>

            <label for="fundacion" class="form-label text-dark">Año de Fundación</label>
            <input type="number" name="fundacion" id="fundacion" class="form-control"><br>

            <label for="numsocios" class="form-label text-dark">Número de Socios</label>
            <input type="number" name="numsocios" id="numsocios" class="form-control"><br>


            <label for="estadio" class="form-label text-dark">Estadio</label>
            <input type="text" name="estadio" id="estadio" class="form-control"><br>

        <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary"><i class="bi bi-download"></i>&nbsp;Guardar</button>
      </div>

</div>
        </form>
      </div>
      
    </div>
  </div>
</div><br>










