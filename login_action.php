<?php

session_start();

include("connection.php");
$nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT * FROM `usuarios` WHERE nombre='$nombre' and contrasenia='$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$count = mysqli_num_rows($result);

if($count == 1) {
    $_SESSION['nombre'] = $row['nombre'];
    echo "Bienvenido";
 }else {
    echo "Nombre o Contraseña incorrecta";
 }

$conn->close();
?>