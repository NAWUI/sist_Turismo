<?php
include("connection.php");

$id_localidad_P = filter_input(INPUT_POST, 'nombre_localidad', FILTER_SANITIZE_STRING);
$id_localidad_N = filter_input(INPUT_POST, 'localidad', FILTER_SANITIZE_STRING);

// Comprueba si el número de mesa está vacío
if (empty($id_localidad_N)) {
    echo "Para cambiar la localidad, tiene que estar seleccionada una localidad.";
    return;
}

$mesa_n_query = $conn->query("SELECT `numeromesa` FROM `localidades` WHERE `localidades`.`id` = $id_localidad_N;");
$numeroMesa_N_row = $mesa_n_query->fetch_assoc();
$numeroMesa_N = $numeroMesa_N_row['numeromesa'];

// Realizar la consulta para obtener el numeromesa para la localidad anterior
$mesa_p_query = $conn->query("SELECT `numeromesa` FROM `localidades` WHERE `localidades`.`nombreLocalidad` = '$id_localidad_P';");
$numeroMesa_P_row = $mesa_p_query->fetch_assoc();
$numeroMesa_P = $numeroMesa_P_row['numeromesa'];
// Actualiza la base de datos
$sql1 = "UPDATE `localidades` SET `numeromesa` = '$numeroMesa_P' WHERE `localidades`.`id` = $id_localidad_N;";
$result1 = $conn->query($sql1);

$sql2 = "UPDATE `localidades` SET `numeromesa` = '$numeroMesa_N' WHERE `localidades`.`nombreLocalidad` = '$id_localidad_P';";
$result2 = $conn->query($sql2);

// Comprueba si la actualización se ha realizado correctamente
if ($result1 && $result2) {
    echo "La localidad se ha actualizado correctamente.";
} else {
    echo "Se ha producido un error al actualizar la localidad.";
}
// Cierra la conexión a la base de datos después de realizar las operaciones
mysqli_close($conn);
?>