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

            if ($count == 0) {
                ?>
                <button type="button" id="emprendi" class="custom-form-control" onclick='microstand()'>Agregar
                    Microemprendimiento
                </button>
                <?php

            } elseif ($count >= 1) {
                ?>

                <button type="button" id="emprendi" class="custom-form-control" onclick='microstand()'>Agregar
                    Microemprendimiento
                </button>

                <div class="modal fade" id="microemprendimientoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Detalles del Microemprendimiento</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Aquí se mostrarán los datos del microemprendimiento -->
                                <div id="microemprendimientoDatos">

                                    <?php
                                    while ($row_microemprendimientos = mysqli_fetch_assoc($consulta)) {
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
                                                ?>
                                                <div class="mb-3">
                                                    <h5>Microemprendimientos:</h5>
                                                    <div class="form-check">
                                                        <label class="form-check-label">Título:
                                                            <?php echo $titulo; ?>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">Descripción:
                                                            <?php echo $descripcion; ?>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">Calificación:
                                                            <?php echo $calificacion; ?>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">Evaluador:
                                                            <?php echo $evaluador; ?>
                                                        </label>
                                                    </div>
                                                </div>
                                                <?php
                                            } else {
                                                // Handle case when evaluador data is not found
                                                echo "Evaluador data not found.";
                                            }
                                        } else {
                                            // Handle error in evaluador query
                                            echo "Error: " . mysqli_error($conn);
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Agrega el botón que abrirá el modal -->
                <button type="button" class="custom-form-control" data-bs-toggle="modal" data-bs-target="#microemprendimientoModal">
                    Ver Microemprendimientos
                </button>
                <?php
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