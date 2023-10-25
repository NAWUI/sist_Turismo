<?php
   include('php/connection.php');
   session_start();

   
   $user_check = $_SESSION['nombre'];
   
   $ses_sql = mysqli_query($con,"SELECT * from usuarios where nombre = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql);

   $id_usr = $row['id'];
   $id_loc = $row['id_localidades'];
   
   if(!isset($_SESSION['nombre'])){
      header("location:login.php");
     // die();
   }
?>