<?php
include('connection.php');
include("session.php");

$observacion = $_POST['observacion'];
$usu = $id_usr;
$localidad = $_POST['localidadobser'];
$query = "SELECT * FROM localidades WHERE numeromesa = '$localidad'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$id_localidad = $row['id'];
$hora = date('Y-m-d H:i:s'); // Formato compatible con DATETIME

// Usar NOW() en lugar de SYSDATE() y comillas invertidas para los nombres de columnas
$query = "INSERT INTO `observaciones`(`observacion`, `id_usuario`, `id_localidades`, `hora`) VALUES ('$observacion','$usu','$id_localidad','$hora')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo 'observacion subido';
} else {
    echo 'Error';
}

?>