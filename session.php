<?php

include('connection.php');
session_start();

$user_check = $_SESSION['nombre'];

$ses_sql = mysqli_query($conn,"SELECT * from usuarios where nombre = '$user_check' ");

$row_usr = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

 $id_usr = $row_usr['id'];
$name_usr = $row_usr['nombre'];

if(!isset($_SESSION['nombre'])){
   header("location:login.php");
   die();
}

// include('connection.php');
// session_start();

// $user_check = $_SESSION['nombre'];

// $ses_sql = mysqli_query($conn, "SELECT usuarios.id AS id_usr, usuarios.nombre, localidades.id AS id_loc FROM usuarios INNER JOIN localidades ON usuarios.id = localidades.id_evaluador WHERE usuarios.nombre = '$user_check'");

// if ($ses_sql->num_rows > 0) {
//     $fila = mysqli_fetch_assoc($ses_sql);
//     $id_usr = $fila['id_usr'];
//     $id_loc = $fila['id_loc'];
// } else {
//     // Manejar el error o asignar valores predeterminados si la consulta falla
//     $id_usr = 0;
//     $id_loc = 0;
// }

// if(!isset($_SESSION['nombre'])){
//     header("location:login.php");
//     // die();
// }
?>
