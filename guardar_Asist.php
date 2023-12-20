<?php
include("connection.php");
include("session.php");

if (isset($_POST['allPeople']) && isset($_POST['idStand'])) {
    $allPeople = $_POST['allPeople'];
    $idStand = $_POST['idStand'];
    $queryid = "SELECT id FROM `localidades` WHERE `numeromesa` = '$idStand'";
    $resultid = mysqli_query($conn, $queryid);
    $rowid = mysqli_fetch_assoc($resultid);
    $id_localidad = $rowid['id'];
    $id_usuario = $id_usr;

    // Realizar las operaciones necesarias con la información recibida
    // Por ejemplo, puedes recorrer $allPeople y realizar las inserciones necesarias en la base de datos

    foreach ($allPeople as $person) {
        $id_persona = $person['id'];
        $nombre = $person['nombre'];
        $asistio = $person['asistio'];

        // Aquí puedes realizar la inserción en la tabla asistencialocalidad
        $sql_insert = "INSERT INTO `asistencialocalidad`(`id_persona`, `id_localidad`, `asistencia`, `id_usuario`) 
                       VALUES ('$id_persona', '$id_localidad', '$asistio', '$id_usuario')";

        // Ejecutar la consulta
        $result_insert = mysqli_query($conn, $sql_insert);

        // Manejar errores si es necesario
        if (!$result_insert) {
            echo "Error al guardar la asistencia: " . mysqli_error($conn);
            exit();
        }
    }

    // Puedes devolver algún mensaje de éxito si lo necesitas
    echo "Asistencia guardada correctamente";
} else {
    // Si no se proporcionan los datos esperados, devuelve un mensaje de error
    echo "Error: Datos no recibidos correctamente";
}
?>