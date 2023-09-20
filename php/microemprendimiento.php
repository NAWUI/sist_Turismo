<?php
// Recibir los datos del formulario
$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];
$calificacion = $_POST["calificacion"];

// Insertar los datos en la base de datos
$sql = "INSERT INTO tu_tabla (titulo, descripcion, calificacion) VALUES ('$titulo', '$descripcion', $calificacion)";

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