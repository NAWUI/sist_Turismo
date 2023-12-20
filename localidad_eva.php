<?php
include("connection.php");

if (isset($_POST['idStand'])) {
    $idStand = mysqli_real_escape_string($conn, $_POST['idStand']); // Sanitize user input

    $sql = "SELECT COUNT(*) FROM `localidades` WHERE numeromesa = '$idStand'";
    $consulta = mysqli_query($conn, $sql);

    if ($consulta) {
        $count = mysqli_fetch_row($consulta)[0];

        switch ($count) {
            case 0:
                // Código para caso 0 (si es necesario)
                ?>
                <div class="mensaje">No hay resultados</div>
                <?php
                break;

            case 1:
                // Obtener datos del formulario
                $idStand = $_POST['idStand'];
                $queryid = "SELECT id FROM `localidades` WHERE `numeromesa` = '$idStand'";
                $resultid = mysqli_query($conn, $queryid);
                $rowid = mysqli_fetch_assoc($resultid);
                $id_localidad = $rowid['id'];

                // Consultas para obtener los valores existentes
                $queries = array(
                    "informe" => "SELECT informe FROM criterios WHERE id_localidades = '$id_localidad'",
                    "carpetaCampo" => "SELECT carpetaCampo FROM criterios WHERE id_localidades = '$id_localidad'",
                    "souvenir" => "SELECT souvenir FROM criterios WHERE id_localidades = '$id_localidad'",
                    "fotos" => "SELECT fotos FROM criterios WHERE id_localidades = '$id_localidad'",
                    "laminas" => "SELECT laminas FROM criterios WHERE id_localidades = '$id_localidad'",
                    "powerpoint" => "SELECT powerpoint FROM criterios WHERE id_localidades = '$id_localidad'",
                    "folleteria" => "SELECT folleteria FROM criterios WHERE id_localidades = '$id_localidad'",
                    "productosRegionales" => "SELECT productosRegionales FROM criterios WHERE id_localidades = '$id_localidad'"
                );

                // Obtener resultados
                $results = array();
                foreach ($queries as $key => $query) {
                    $result = mysqli_query($conn, $query);
                    $results[$key] = mysqli_fetch_assoc($result);
                }
                ?>
                <div class="form-group">
                    <select style="display: none;" class="form-select" id="id_stand" name="id_stand">
                        <option value="<?php echo $idStand; ?>" selected><?php echo $idStand; ?></option>
                    </select>
                </div>
                <!-- Contenedor de Notas -->
                <div class="row mb-5 border-top-bottom">
                    <div class="col-md-12 padding-boxes">
                        <div class="d-flex flex-column">
                            <?php
                            // Bloques de select para cada criterio
                            foreach ($results as $key => $row) {
                                $label = ucfirst($key);
                                $value = $row[$key];
                                $disabled = ($value > 0) ? 'disabled' : '';
                                generateSelectBlock($label, $key, $value, $disabled);
                            }
                            ?>
                        </div>
                    </div>
                    <button id="guardarCri" type="button" class="custom-form-control btn-custom-info">Guardar Criterio</button>
                </div>
                <script src="js/guardar_Cri.js"></script>
                <?php
                break;
        }
    } else {
        // Handle database query error
        echo "Error: " . mysqli_error($conn);
    }
}

// Función para generar el bloque de HTML y manejar la lógica de deshabilitar el select
function generateSelectBlock($label, $id, $value, $disabled) {
    echo '
        <div class="d-flex justify-content-between align-items-center">
            <h5 id="' . $id . '">' . $label . '</h5>
            <select class="evaluador custom-form-control smaller-select btn-custom-info" style="min-width: 55px;" name="evaluadores" id="' . $id . '" aria-label="Default select example" ' . $disabled . '>
                <option value="">X</option>';

    for ($j = 1; $j <= 10; $j++) {
        $selected = ($j == $value) ? 'selected' : '';
        echo '<option value="' . $j . '" ' . $selected . '>' . $j . '</option>';
    }

    echo '</select>
        </div>';
}
?>
