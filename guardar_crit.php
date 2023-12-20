<?php
include("connection.php");
include("session.php");

// Obtiene los datos del formulario
$idStand = $_POST['idStand'];
$queryid = "SELECT id FROM `localidades` WHERE `numeromesa` = '$idStand'";
$resultid = mysqli_query($conn, $queryid);
$rowid = mysqli_fetch_assoc($resultid);
$id_localidad = $rowid['id'];
$id_usuario = $id_usr;
$criterios = $_POST['criterios'];
echo json_encode($criterios, JSON_PRETTY_PRINT);


// Verifica si ya existe un registro con la misma id_localidades
$queryCheck = "SELECT id FROM `criterios` WHERE `id_localidades` = '$id_localidad'";
$resultCheck = mysqli_query($conn, $queryCheck);

if (mysqli_num_rows($resultCheck) > 0) {
    // Ya existe un registro, realizar actualización (UPDATE)

    // Prepara la consulta SQL para la actualización de criterios
    $query = "UPDATE `criterios` SET ";

    // Agrega los valores de criterios a la consulta
    foreach ($criterios as $criterio) {
        $nombre = $criterio['nombre'];
        $valor = $criterio['valor'];
        $query .= "`$nombre` = '$valor', ";
    }

    // Elimina la coma adicional al final de la consulta
    $query = rtrim($query, ', ');

    // Agrega la condición para la actualización
    $query .= " WHERE `id_localidades` = '$id_localidad'";

    // Ejecuta la consulta de actualización
    $result = mysqli_query($conn, $query);

    // Verifica el resultado de la consulta
    if ($result) {
        echo "Criterios actualizados correctamente.";
    } else {
        // Registra el error en un archivo de registro
        error_log("Error al actualizar los criterios: " . mysqli_error($conn), 3, "error.log");
        echo "Se produjo un error al actualizar los criterios. Por favor, inténtelo nuevamente.";
    }
} else {
    // No existe un registro, realizar inserción (INSERT)

    // Prepara la consulta SQL para la inserción de criterios
    $query = "INSERT INTO `criterios` (id, `informe`, `carpetaCampo`, `souvenir`, `fotos`, `laminas`, `powerpoint`, `folleteria`, `productosRegionales`, `id_localidades`, `id_usuario`) VALUES (NULL, ";

    // Lista de campos disponibles en la tabla criterios
    $availableFields = array("informe", "carpetaCampo", "souvenir", "fotos", "laminas", "powerpoint", "folleteria", "productosRegionales");

    // Inicializa un array asociativo para almacenar los valores de criterios
    $criteriosValues = array();

    // Llena el array asociativo con los valores de criterios
    foreach ($criterios as $criterio) {
        $nombre = $criterio['nombre'];
        $valor = $criterio['valor'];
        $criteriosValues[$nombre] = $valor;
    }

    // Agrega los valores de criterios a la consulta
    $query .= implode(', ', array_map(function ($field) use ($criteriosValues) {
        $valor = isset($criteriosValues[$field]) ? $criteriosValues[$field] : 0;
        return "'$valor'";
    }, $availableFields));

    // Agrega el ID del stand y del usuario
    $query .= ", '$id_localidad', '$id_usuario')";

    echo $query;
    // Ejecuta la consulta de inserción
    $result = mysqli_query($conn, $query);

    // Verifica el resultado de la consulta
    if ($result) {
        echo "Criterios guardados correctamente.";
    } else {
        // Registra el error en un archivo de registro
        error_log("Error al guardar los criterios: " . mysqli_error($conn), 3, "error.log");
        echo "Se produjo un error al guardar los criterios. Por favor, inténtelo nuevamente.";
    }
}
?>