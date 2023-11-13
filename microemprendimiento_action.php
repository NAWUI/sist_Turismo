<?php
include('connection.php');
include('session.php');

if (isset($_POST['nombrelocalidad']) && isset($_POST['idStand']) && isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['calificacion'])) {
    $nombreLocalidad = mysqli_real_escape_string($conn, $_POST['nombrelocalidad']);
    $idStand = mysqli_real_escape_string($conn, $_POST['idStand']);
    $titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
    $descripcion = mysqli_real_escape_string($conn, $_POST['descripcion']);
    $calificacion = mysqli_real_escape_string($conn, $_POST['calificacion']);
    $id_evaluador =

        // Obtén el id_localidades usando el nombre de la localidad
        $queryLocalidad = "SELECT id FROM localidades WHERE nombreLocalidad = '$nombreLocalidad' AND numeromesa = '$idStand'";
    $resultLocalidad = mysqli_query($conn, $queryLocalidad);
    $rowLocalidad = mysqli_fetch_assoc($resultLocalidad);
    $idLocalidad = $rowLocalidad['id'];

    // Inserta los datos en la tabla microemprendimientos
    $queryInsert = "INSERT INTO `microemprendimientos`(`Titulo`, `Descripcion`, `id_localidades`, `calificacion`, `id_evaluador`) VALUES ('$titulo', '$descripcion', '$idLocalidad', '$calificacion', '$id_usr')";

    $resultInsert = mysqli_query($conn, $queryInsert);

    if ($resultInsert) {
        echo "El microemprendimiento se ha guardado correctamente.";
    } else {
        echo "Error al guardar el microemprendimiento.";
    }
} else {
    echo "Faltan parámetros en la solicitud.";
}

mysqli_close($conn);
?>