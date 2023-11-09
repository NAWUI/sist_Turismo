<?php
include('connection.php');

$comentario = $_POST['comentario'];
$usu = $_POST['usu'];
$localidad = $_POST['localidad'];
$hora = date('Y-m-d H:i:s'); // Formato compatible con DATETIME

// Usar NOW() en lugar de SYSDATE() y comillas invertidas para los nombres de columnas
$query = "INSERT INTO `comentarios`(`comentario`, `id_usuario`, `id_localidades`, `hora`) VALUES ('$comentario','$usu','$localidad','$hora')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo 'Comentario subido';
} else {
    echo 'Error';
}

?>