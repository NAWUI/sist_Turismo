<?php

include("connection.php");
include('session.php');

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

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <input type="text" class="form-control rounded" id="busqueda" placeholder="Buscar...">
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <table class="table" id="tabla">
                    <thead>
                        <tr>
                            <th scope="col">Número de Mesa</th>
                            <th scope="col">Localidad</th>
                            <th scope="col">Alumnos</th>
                            <th scope="col">Profesor a Cargo</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Evaluador</th>
                            <th scope="col">Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        // Realiza la consulta para obtener los datos de la tabla localidades
                        $query = "SELECT * FROM localidades";
                        $result = mysqli_query($conn, $query);

                        // Itera a través de los registros de localidades
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['numeromesa'] . "</td>";
                            echo "<td>" . $row['nombreLocalidad'] . "</td>";

                            // Realiza una nueva consulta para obtener los alumnos del curso de la localidad
                            $curso = $row['cursos'];
                            $alumnos_query = "SELECT nombre FROM personas WHERE cursos = '$curso'";
                            $alumnos_result = mysqli_query($conn, $alumnos_query);

                            // Almacena los nombres de los alumnos en un array
                            $alumnos = array();
                            while ($alumno = mysqli_fetch_assoc($alumnos_result)) {
                                $alumnos[] = $alumno['nombre'];
                            }

                            // Imprime la lista de alumnos en un único campo
                            echo "<td>" . implode(", ", $alumnos) . "</td>";

                            echo "<td>" . $row['profesorACargo'] . "</td>";
                            echo "<td>" . $row['cursos'] . "</td>";
                            echo "<td>" . $row['id_evaluador'] . "</td>";
                            echo "<td> <button class='eliminar btn btn-danger' id='" . $row['id'] . "' value='" . $row['id'] . "'><i class='bi bi-trash'></i></button> 
                                <a href='editar.php?id='" . $row['id'] . "'><button class='btn btn-Primary'><i class='bi bi-pencil'></i></button></a>
                                </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>



</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Captura el evento de escritura en el campo de búsqueda
        $("#busqueda").on("input", function () {
            var valorBusqueda = $(this).val().toLowerCase(); // Valor de búsqueda en minúsculas
            $("#tabla tbody tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(valorBusqueda) > -1);
            });
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<script src="js/eliminar.js"></script>

</html>