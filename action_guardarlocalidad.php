<?php
include("connection.php");

$id_localidad = filter_input(INPUT_POST, 'localidad', FILTER_SANITIZE_STRING);
$numeroMesa = filter_input(INPUT_POST, 'idStand', FILTER_SANITIZE_STRING);

// Comprueba si el número de mesa está vacío
if (empty($numeroMesa)) {
    echo "Para guardar una localidad, tiene que estar seleccionado un stand.";
    return;
   }
   
   // Comprueba si el ID de la localidad está vacío
   if (empty($id_localidad)) {
    echo "Para guardar una localidad, tiene que estar seleccionada una localidad.";
    return;
   }
   
   // Actualiza la base de datos
   $sql = "UPDATE `localidades` SET `numeromesa` = '$numeroMesa' WHERE `localidades`.`id` = $id_localidad;";
   $result = $conn->query($sql);
   
   // Comprueba si la actualización se ha realizado correctamente
   if ($result) {
    echo "La localidad se ha actualizado correctamente.";
   } else {
    echo "Se ha producido un error al actualizar la localidad.";
   }
// Cierra la conexión a la base de datos después de realizar las operaciones
mysqli_close($conn);
?>
