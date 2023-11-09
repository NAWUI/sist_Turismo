<?php
include("connection.php");

if (isset($_POST['idStand'])) {
    $idStand = mysqli_real_escape_string($conn, $_POST['idStand']); // Sanitize user input

    $sql1 = "SELECT id FROM `localidades` WHERE numeromesa = '$idStand'";
    $id_localidad_result = mysqli_query($conn, $sql1);
    $id_localidad_row = mysqli_fetch_assoc($id_localidad_result);

    if ($id_localidad_row) {
        $id_localidad_value = $id_localidad_row['id'];

        $sql = "SELECT * FROM `localidades` INNER JOIN microemprendimientos ON localidades.id = microemprendimientos.id_localidades WHERE numeromesa = '$idStand' AND microemprendimientos.id_localidades = $id_localidad_value";

        $consulta = mysqli_query($conn, $sql);

        if ($consulta) {
            $count = mysqli_num_rows($consulta);

            switch ($count) {
                case 0:
                    ?>

                    <button type="button" id="emprendi" class="custom-form-control" onclick='microstand()'>Agregar emprendimiento</button>
                    <?php
                    break;
                case 1:
                    ?>
                    <?php
                    // Fetch nombreLocalidad for the given numeromesa (idStand)
                    $sql_microemprendimientos = "SELECT * FROM `microemprendimientos` WHERE id_localidades = $id_localidad_value";
                    $consulta_microemprendimientos = mysqli_query($conn, $sql_microemprendimientos);

                    if ($consulta_microemprendimientos) {
                        $row_microemprendimientos = mysqli_fetch_assoc($consulta_microemprendimientos);
                        if ($row_microemprendimientos) {
                            $titulo = $row_microemprendimientos['Titulo'];
                            $descripcion = $row_microemprendimientos['Descripcion'];
                            $calificacion = $row_microemprendimientos['calificacion'];
                            $id_evaluador = $row_microemprendimientos['id_evaluador'];

                            $sql_evaluador = "SELECT nombre FROM `usuarios` WHERE id = '$id_evaluador'";
                            $consulta_evaluador = mysqli_query($conn, $sql_evaluador);

                            if ($consulta_evaluador) {
                                $row_evaluador = mysqli_fetch_assoc($consulta_evaluador);
                                if ($row_evaluador) {
                                    $evaluador = $row_evaluador['nombre'];

                                    // Output your HTML here
                                    ?>
                                    <div class="mb-3">
                                        <h5>Microemprendimientos:</h5>
                                        <div class="form-check">
                                            <label class="form-check-label">Tiutulo:
                                                <?php echo $titulo; ?>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">Descripcion:
                                                <?php echo $descripcion; ?>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">Calificacion:
                                                <?php echo $calificacion; ?>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">Evaluador:
                                                <?php echo $evaluador; ?>
                                            </label>
                                        </div>
                                    </div>
                                    <button type="button" id="emprendi" class="custom-form-control" onclick='microstand()'>Agregar emprendimiento</button>

                                    <?php
                                } else {
                                    // Handle case when evaluador data is not found
                                    echo "Evaluador data not found.";
                                }
                            } else {
                                // Handle error in evaluador query
                                echo "Error: " . mysqli_error($conn);
                            }
                        } else {
                            // Handle case when microemprendimientos data is not found
                            echo "Microemprendimientos data not found.";
                        }
                    } else {
                        // Handle error in microemprendimientos query
                        echo "Error: " . mysqli_error($conn);
                    }
                    break;
            }
        } else {
            // Handle database query error
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // Handle case when no matching record is found for numeromesa
        echo "No matching record found for numeromesa: " . $idStand;
    }
}
?>
<script src="js/getid.js"></script>