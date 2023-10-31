<?php
include("connection.php");

$id_localidad = filter_input(INPUT_POST, 'localidad', FILTER_SANITIZE_STRING);
$numeroMesa = filter_input(INPUT_POST, 'selectedId', FILTER_SANITIZE_STRING);
//echo $numeroMesa;
//echo $id_localidad;
// if (!empty($numeroMesa)) {
//     echo "Por favor, selecciona un stand para poder guardar la localidad.";
// } elseif (!empty($id_localidad)) {
//     echo "Por favor, selecciona una localidad para poder guardarla.";
// } else {
    // Intentar ejecutar la consulta de actualización
    $query = "UPDATE `localidades` SET `numeromesa`='$numeroMesa' WHERE id = $id_localidad";
    if (mysqli_query($conn, $query)) {
        echo "Localidad actualizada correctamente.";
    } else {
        echo "Error al actualizar la localidad: " . mysqli_error($conn);
    }
// }

// Cierra la conexión a la base de datos después de realizar las operaciones
mysqli_close($conn);
?>
