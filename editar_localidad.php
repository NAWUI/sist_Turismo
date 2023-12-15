<?php

include("connection.php");
include('session.php');

// Comprueba si se ha proporcionado un ID en el método POST
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Realiza una consulta para obtener los detalles del registro con el ID proporcionado
    $query = "SELECT * FROM localidades INNER JOIN personas ON personas.cursos = localidades.cursos WHERE localidades.id = '$id'";
    $result = mysqli_query($conn, $query);


    // Comprueba si la consulta devolvió un resultado
    if ($row = mysqli_fetch_assoc($result)) {
        // Aquí puedes cargar los detalles del registro en variables
        $numeromesa = $row['numeromesa'];
        $nombreLocalidad = $row['nombreLocalidad'];
        $profesor = $row['profesorACargo'];
        $curso = $row['cursos'];
        $evaluador = $row['id_evaluador'];
        $nombreA = $row['nombre'];
        $apelldioA = $row['apellido'];
        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Sistema de Jornadas Turísticas</title>
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        </head>

        <body>
            <!-- HEADER INICIO -->
            <?php
            include("header.php");
            ?>
            <!-- HEADER FIN -->
            <br>
            <br>

            <div class="custom-container">
                <h2>Formulario de Edición de Grupo</h2>
                <form action="procesar_edicion.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="custom-form-group">
                        <label for="numeromesa" class="custom-form-label">Número de Mesa</label>
                        <input type="text" class="custom-form-control" id="numeromesa" name="numeromesa"
                            value="<?php echo $numeromesa; ?>">
                    </div>
                    <div class="custom-form-group">
                        <label for="localidad" class="custom-form-label">Localidad asignada</label>
                        <input type="text" class="custom-form-control" id="localidad" name="localidad"
                            value="<?php echo $nombreLocalidad; ?>">
                    </div>
                    <div class="custom-form-group">
                        <label for="profesor" class="custom-form-label">Profesor a cargo</label>
                        <input type="text" class="custom-form-control" id="profesor" name="profesor"
                            value="<?php echo $profesor; ?>">
                    </div>
                    <div class="custom-form-group">
                        <label for="curso" class="custom-form-label">Curso</label>
                        <input type="text" class="custom-form-control" id="curso" name="curso" value="<?php echo $curso; ?>">
                    </div>
                    <div class="custom-form-group">
                        <label for="evaluador" class="custom-form-label">Evaluador</label>
                        <input type="text" class="custom-form-control" id="evaluador" name="evaluador"
                            value="<?php echo $evaluador; ?>">
                    </div>
                    <!-- Campos de texto para los alumnos -->
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="custom-form-group">';
                        echo '<label for="alumno' . 0 . '" class="custom-form-label">Alumno ' . (0 + 1) . '</label>';
                        echo '<input type="text" class="custom-form-control" name="alumnos[' . $row['id'] . ']" value="' . $row['nombre'] . '">';
                        echo '</div>';
                    }

                    ?>
                    <br>
                    <div class="custom-btn-container"> <!-- Contenedor para el botón -->
                        <button type="submit" class="custom-btn-primary">Guardar cambios</button>
                    </div>
                </form>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            <!-- Alerta de campos vacío con SweetAlert2 -->
            <script>
                document.querySelector('form').addEventListener('submit', function (event) {
                    var inputs = this.querySelectorAll('input[type="text"]');
                    for (var i = 0; i < inputs.length; i++) {
                        if (inputs[i].value.trim() === '') {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Todos los campos deben estar llenos.',
                            });
                            event.preventDefault();
                            return;
                        }
                    }
                });
            </script>

        </body>

        </html>

        <?php
    } else {
        echo "No se encontró ningún registro con el ID proporcionado.";
    }
} else {
    echo "No se proporcionó ningún ID.";
}

?>