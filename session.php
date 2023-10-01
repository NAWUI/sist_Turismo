<?php
   include('connection.php');
   session_start();

   
   $user_check = $_SESSION['nombre'];
   
   $ses_sql = mysqli_query($conn,"SELECT * from usuarios where nombre = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $id_usr = $row['id'];
   $id_loc = $row['id_localidades'];
   
   if(!isset($_SESSION['nombre'])){
      header("location:login.php");
     // die();
   }else{
      header("location:registro.php");
   }
?>