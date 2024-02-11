<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<?php
//buscar a los vendedores hago un select
$sql_Clubes = "SELECT cif, nombre FROM Clubes";
$result_clubes = $conexion->query($sql_Clubes);
$nombreclub = [];
while ($fila_nombreclub = $result_clubes->fetch_assoc()) {
    $nombreclub[$fila_nombreclub['cif']] = $fila_nombreclub['nombre'];
}
?>

<!-- la estrucctura del modal -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="modal1label">Insertar Nuevo Club</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="guardar2.php" method="post" enctype="multipart/form-data" class="form w-100 text-light">
                    <label for="nif" class="form-label text-dark">NIF</label>
                    <input type="text" name="nif" id="nif" class="form-control"><br>

                    <label for="nombre" class="form-label text-dark">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control"><br>

                    <label for="edad" class="form-label text-dark">Edad</label>
                    <input type="number" name="edad" id="edad" class="form-control"><br>

                    <p class="text-dark">Destituido</p>
                    <input type="radio" value="1" name="destituido" id="destituido_si" class="form-check-input bg-transparent"><label for="" class="form-label text-dark">&nbsp;Sí</label><br>
                    <input type="radio" value="0" name="destituido" id="destituido_no" class="form-check-input bg-transparent"><label class="form-label text-dark" for="destituido_no">&nbsp;No</label><br>

                    <label for="ficha" class="form-label text-dark">Sueldo</label>
                    <input type="number" name="ficha" id="ficha" class="form-control" min="0" max="300000"><br>

                    <Select name="clubescif" class="form-select">
                        <option value="" class="form-control" selected disabled="disabled">Elija Club</option>
                        <?php

                        // Para mostrar vendedores
                        foreach ($nombreclub  as $nif => $nombreclub) {
                            echo "<option value=\"$nif\">$nombreclub </option>";
                        }
                        ?>

                    </Select><br>
                    <hr>

                    <button type="submit" name="enviar" class="btn btn-primary"><i class="bi bi-download"></i>&nbsp;Guardar</button>
            </div>

        </div>
        </form>
    </div>

</div>
</div>
</div><br>