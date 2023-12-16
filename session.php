<?php
include('connection.php');
session_start();

$user_check = $_SESSION['nombre'];

$ses_sql = mysqli_query($conn, "SELECT usuarios.id, usuarios.nombre, localidades.id_evaluador, localidades.id FROM usuarios INNER JOIN localidades ON usuarios.id = localidades.id_evaluador WHERE usuarios.nombre = '$user_check';");

if ($ses_sql) {
    $vec = mysqli_fetch_row($ses_sql);

    // Check if $vec is not empty before accessing its elements
    if (isset($vec[0]) && isset($vec[3])) {
        $id_usr = $vec[0];
    } else {
        $id_usr = "no registrado";
    }
}

if (!isset($_SESSION['nombre'])) {
    // Redirect the user to the login page if the session variable 'nombre' is not set
    header("location:login.php");
    exit();
}
?>