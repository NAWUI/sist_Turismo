<?php

    include("../connection.php");

    $check=false;
    $localidad=$_POST["localidad"];
    $profe_cargo=$_POST["profesor"];

    $checkSql="SELECT * FROM localidades WHERE 1";
    $checkQuery=mysqli_query($con,$checkSql);
    
    while($checkArray=mysqli_fetch_array($checkQuery)){
        $checkString=strstr($localidad, $checkArray["nombreLocalidad"]);
        if($checkString){
            $check=true;
        }  
    }
    
    if($check==true){
        echo("esa localidad ya esta cargada");
    }else{
    $sql="INSERT INTO localidades (nombreLocalidad,profesorACargo,id_curso)
    VALUES ('".$localidad."','".$profe_cargo."',2)";

    $query=mysqli_query($con,$sql);

    if($query){
        header("location:../../carga_grupo.php");
    }else{
        echo "error";
    }
}

?>