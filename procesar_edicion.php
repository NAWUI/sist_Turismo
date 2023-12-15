<?php

include("connection.php");
include('session.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $numeromesa = $_POST['numeromesa'];
    $nombreLocalidad = $_POST['localidad'];
    $profesor = $_POST['profesor'];
    $curso = $_POST['curso'];
    $evaluador = $_POST['evaluador'];
    $alumnos = $_POST['alumnos'];

    // Verifica si alguno de los campos está vacío
    if (empty($numeromesa) || empty($nombreLocalidad) || empty($profesor) || empty($curso) || empty($evaluador) || empty($alumnos)) {
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Todos los campos deben estar llenos.',
                }).then(() => {
                    window.location.href='localidades.php';
                });
              </script>";
        exit();
    }

    $query = "UPDATE localidades SET numeromesa = '$numeromesa', nombreLocalidad = '$nombreLocalidad', profesorACargo = '$profesor', cursos = '$curso', id_evaluador = '$evaluador' WHERE id = '$id'";
    if (!mysqli_query($conn, $query)) {
        echo "Error al actualizar el nombre del alumno: " . mysqli_error($conn);
    }

    foreach ($alumnos as $index => $nombre) {
        $query = "UPDATE personas SET nombre = '$nombre' WHERE id = '$index'";
        if (!mysqli_query($conn, $query)) {
            echo "Error al actualizar el nombre del alumno: " . mysqli_error($conn);
        }
    }

    if (mysqli_query($conn, $query)) {
        echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: 'El registro se actualizó correctamente.',
                }).then(() => {
                    window.location.href='localidades.php';
                });
              </script>";
    } else {
        echo "Error al actualizar el registro: " . mysqli_error($conn);
    }
} else {
    echo "No se proporcionó ningún ID.";
}

?>