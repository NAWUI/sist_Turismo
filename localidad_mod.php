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
                $sql_personas = "SELECT nombre, apellido, alumnoOProfesor, representante FROM `personas` INNER JOIN localidades on localidades.cursos = personas.cursos WHERE localidades.cursos = '$curso'";
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








                        <h5>Integrantes del grupo</h5>


                        <label class="form-check-label">Datos del docente a cargo:</label>
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
                    <div class="d-flex justify-content-between align-items-center">


                        <!-- Content for case 1 goes here -->
                        <form>
                            <?php
                            while ($row_personas = mysqli_fetch_assoc($consulta_personas)) {
                                $nombre = $row_personas['nombre'];
                                $apellido = $row_personas['apellido'];
                                $alumnoOProfesor = $row_personas['alumnoOProfesor'];
                                $representante = $row_personas['representante'];

                                $integranteLabel = "Integrante: $nombre $apellido";


                                if ($alumnoOProfesor == 0 && $representante == 0) {
                                    // Display radio button for non-representative members
                                    ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="opcion" value="<?php echo $nombre; ?>"
                                            id="<?php echo $nombre; ?>">
                                        <label class="form-check-label" for="<?php echo $nombre; ?>">
                                            <?php echo $integranteLabel; ?>
                                        </label>
                                    </div>
                                    <?php
                                } else if ($alumnoOProfesor == 0 && $representante == 1) {
                                    // Display representative label
                                    ?>
                                        <label class="mt-3">Representante:
                                        <?php echo "$nombre $apellido"; ?>
                                        </label>
                                    <?php
                                }
                            }
                            ?>
                        </form>
                    </div>

                </div>
                <script src="js/getid.js"></script>
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