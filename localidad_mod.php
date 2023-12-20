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
                // Display dropdown menu for selecting localidad
                // Generate options based on your requirements
                ?>
                <div class="form-group">
                    <select style="display: none;" class="form-select" id="id_stand" name="id_stand">
                        <!-- Add options for the select element if needed -->
                        <option value<?php echo $idStand; ?>selected>
                            <?php echo $idStand; ?>
                        </option>
                    </select>
                </div>
                <div class="mb-3 padding-boxes">
                    <h3>Localidad:</h3>
                    <div class="custom-form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <select class="custom-form-control btn-custom-info" name="evaluadores" id="evaluadores"
                                aria-label="Default select example">
                                <option value="">Seleccione una localidad</option>
                                <?php
                                $sql = "SELECT nombreLocalidad, id FROM localidades WHERE numeromesa = 'no definido'";
                                $consulta = mysqli_query($conn, $sql);
                                while ($vec = mysqli_fetch_row($consulta)) {
                                    $nombrelocalidad = $vec[0];
                                    $id_localidad = $vec[1];
                                    echo "<option value='$id_localidad'>$nombrelocalidad</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <button id="guardarlocal" type="button" class="custom-form-control btn-custom-info">Guardar Localidad</button>
                    </div>
                    <h5>Ingrese una localidad para poder ver a los Integrantes</h5>
                </div>
                <script src="js/guardarlocalidad.js"></script>

                <?php

                break;

            case 1:
                // Fetch nombreLocalidad for the given numeromesa (idStand)
                $sql_localidad = "SELECT nombreLocalidad,cursos,profesorACargo FROM `localidades` WHERE numeromesa = '$idStand'";
                $consulta_localidad = mysqli_query($conn, $sql_localidad);
                $row_localidad = mysqli_fetch_assoc($consulta_localidad);
                $nombreLocalidad = $row_localidad['nombreLocalidad'];
                $curso = $row_localidad['cursos'];
                $docente = $row_localidad['profesorACargo'];
                // Fetch data for radio options and representative
                $sql_personas = "SELECT personas.id, personas.nombre, personas.apellido, personas.alumnoOProfesor, personas.representante 
                 FROM `personas` 
                 INNER JOIN localidades ON localidades.cursos = personas.cursos 
                 WHERE localidades.cursos = '$curso'";

                $consulta_personas = mysqli_query($conn, $sql_personas);

                $sql_docente = "SELECT nombre, apellido, alumnoOProfesor, representante, telefono, email
                FROM personas
                INNER JOIN localidades ON localidades.profesorACargo = CONCAT(personas.nombre, ' ', personas.apellido)
                WHERE localidades.profesorACargo = '$docente';";
                $consulta_docente = mysqli_query($conn, $sql_docente);

                $row_docente = mysqli_fetch_assoc($consulta_docente);
                $nombreD = $row_docente['nombre'];
                $apellidoD = $row_docente['apellido'];
                $telefonoD = $row_docente['telefono'];
                $emailD = $row_docente['email'];

                ?>

                <div class="padding-boxes">
                    <div class="form-group">
                        <select style="display: none;" class="form-select" id="nombre_localidad" name="nombre_localidad">
                            <!-- Add options for the select element if needed -->
                            <option value<?php echo $nombreLocalidad; ?>selected>
                                <?php echo $nombreLocalidad; ?>
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select style="display: none;" class="form-select" id="id_stand" name="id_stand">
                            <!-- Add options for the select element if needed -->
                            <option value<?php echo $idStand; ?>selected>
                                <?php echo $idStand; ?>
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <h3>Localidad:
                            <?php echo $nombreLocalidad; ?>
                        </h3>
                        <div class="custom-form-group" id="divConSelect">
                            <select class="custom-form-control btn-custom-info" name="evaluadores" id="evaluadores"
                                aria-label="Default select example">
                                <option value="">Seleccione una localidad</option>
                                <?php
                                $sql = "SELECT nombreLocalidad, id FROM localidades WHERE NOT nombreLocalidad = '$nombreLocalidad'";
                                $consulta = mysqli_query($conn, $sql);
                                while ($vec = mysqli_fetch_row($consulta)) {
                                    $nombrelocalidad = $vec[0];
                                    $id_localidad = $vec[1];
                                    echo "<option value='$id_localidad'>$nombrelocalidad</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="custom-form-group">
                            <button id="cambiarlocal" type="button" class="custom-form-control btn-custom-info">Cambiar
                                Localidad</button>
                        </div>
                        <?php
$queryid = "SELECT id FROM `localidades` WHERE `numeromesa` = '$idStand'";
$resultid = mysqli_query($conn, $queryid);
$rowid = mysqli_fetch_assoc($resultid);
$id_localidad = $rowid['id'];

// Realizar consulta para verificar si ya se guardó la asistencia
$sql_asistencia_guardada = "SELECT COUNT(*) AS count FROM asistencialocalidad WHERE id_localidad = '$id_localidad'";
$result_asistencia_guardada = mysqli_query($conn, $sql_asistencia_guardada);
$row_asistencia_guardada = mysqli_fetch_assoc($result_asistencia_guardada);
$asistencia_guardada = $row_asistencia_guardada['count'];

?>

<h5>Integrantes del grupo</h5>
<div class="d-flex justify-content-between align-items-center">
    <form>
        <?php
        while ($row_personas = mysqli_fetch_assoc($consulta_personas)) {
            $id_persona = $row_personas['id'];
            $nombre = $row_personas['nombre'];
            $apellido = $row_personas['apellido'];
            $alumnoOProfesor = $row_personas['alumnoOProfesor'];
            $representante = $row_personas['representante'];

            $integranteLabel = "Integrante: $nombre $apellido";
            $representanteLabel = "Representante: $nombre $apellido";

            $checked = ''; // Inicialmente no se selecciona ninguna casilla

            // Verificar si la asistencia ya está guardada
            if ($asistencia_guardada > 0) {
                // Si la asistencia ya está guardada, obtener el estado de asistencia actual
                $sql_estado_asistencia = "SELECT asistencia FROM asistencialocalidad WHERE id_localidad = '$id_localidad' AND id_persona = '$id_persona'";
                $result_estado_asistencia = mysqli_query($conn, $sql_estado_asistencia);

                // Verificar si se obtuvo un resultado
                if ($result_estado_asistencia) {
                    $row_estado_asistencia = mysqli_fetch_assoc($result_estado_asistencia);
                
                    // Verificar si se obtuvo un resultado antes de acceder a un índice
                    if ($row_estado_asistencia !== null) {
                        $asistio = $row_estado_asistencia['asistencia'];
                
                        // Marcar la casilla según el estado de asistencia actual
                        $checked = $asistio ? 'checked' : '';
                    } else {
                        // Si no se obtuvo un resultado, establecer $checked en vacío o algún valor por defecto
                        $checked = '';
                    }
                }
            }

            if ($alumnoOProfesor == 0 && $representante == 0) {
                // Display checkbox for non-representative members
                ?>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opcion" value="<?php echo $nombre; ?>"
                        id="<?php echo $id_persona; ?>" data-id="<?php echo $id_persona; ?>" <?php echo $checked; ?>>
                    <label class="form-check-label" for="<?php echo $id_persona; ?>">
                        <?php echo $integranteLabel; ?>
                    </label>
                </div>
                <?php
            } else if ($alumnoOProfesor == 0 && $representante == 1) {
                // Display checkbox for representative members
                ?>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="opcion" value="<?php echo $nombre; ?>"
                        id="<?php echo $id_persona; ?>" data-id="<?php echo $id_persona; ?>" <?php echo $checked; ?>>
                    <label class="form-check-label" for="<?php echo $id_persona; ?>">
                        <?php echo $representanteLabel; ?>
                    </label>
                </div>
                <?php
            }
        }
        ?>
    </form>
</div>

<?php
// Mostrar el botón "Guardar Asistencia" solo si la asistencia no está guardada
if ($asistencia_guardada == 0) {
    ?>
    <div class="custom-form-group">
        <button id="guardarAsis" type="button" class="custom-form-control btn-custom-info">Guardar Asistencia</button>
    </div>
    <?php
}else{
    ?>
    <!-- editar asistencia no es funcional -->
    <!-- <div class="custom-form-group">
        <button id="editarAsis" type="button" class="custom-form-control btn-custom-info">Editar Asistencia</button>
    </div> -->
    <?php
}
?>
                        <h5>Datos del docente a cargo:</h5>
                        <div class="form-check">
                            <label class="form-check-label">Nombre:
                                <?php echo $nombreD . " " . $apellidoD; ?>
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">Correo:
                                <?php echo $emailD; ?>
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">Numero de telefono:
                                <?php echo $telefonoD; ?>
                            </label>
                        </div>


                    </div>



                </div>
                <!-- <script src="js/getid.js"></script> -->
                <script src="js/guardar_Asist.js"></script>
                <script src="js/cambiar_localidad.js"></script>
                <?php
                break;
        }
    } else {
        // Handle database query error
        echo "Error: " . mysqli_error($conn);
    }
}
?>