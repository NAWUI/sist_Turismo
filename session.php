<?php
   include('connection.php');
   session_start();
   
   $user_check = $_SESSION['nombre'];
   
   $ses_sql = mysqli_query($conn,"SELECT nombre from usuarios where nombre = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $_SESSION['nombre'];
   
   if(!isset($_SESSION['nombre'])){
      header("location:login.php");
     // die();
   }else{
      header("location:registro.php");
   }
?>