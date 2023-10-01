<?php
include("connection.php");
// Recibir los datos del formulario
$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];
$calificacion = $_POST["calificacion"];
$evaluador = $_POST[""];
$localidades = $_POST[""];


// Insertar los datos en la base de datos
$sql = "INSERT INTO `microemprendimientos`(`Titulo`, `Descripcion`, `localidades`, `evaluador`, `calificacion`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";

if ($conn->query($sql) === TRUE) {
    $response = array("success" => true);
} else {
    $response = array("success" => false, "error" => $conn->error);
}

$conn->close();

// Devolver una respuesta en formato JSON
header("Content-type: application/json");
echo json_encode($response);
?>