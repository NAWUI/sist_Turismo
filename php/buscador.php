<?php

    include("connection.php");

    $input = $_POST["input"];

    $sql = "SELECT * FROM localidades WHERE numeromesa LIKE '".$input."'";
    $query = mysqli_query($con,$sql);
    echo $res1 = "
    <table class='table' id='tabla'>
    <thead>
        <tr>
        <th scope='col'>Numero de stand</th>
        <th scope='col'>Localidad</th>
        <th scope='col'>Alumnos</th>
        <th scope='col'>Profesor</th>
        <th scope='col'>Administrador</th>
        </tr>
    </thead>
    
    ";
    while($row=mysqli_fetch_array($query)){ 
        
        $sqlAlum="SELECT * FROM personas WHERE id_localidades='".$row["id"]."'";
        $queryAlum=mysqli_query($con,$sqlAlum);
        

        $sqlUs="SELECT * FROM usuarios WHERE id_localidades='".$row["id"]."'";
        $queryUs=mysqli_query($con,$sqlUs);

        echo $res2 = "
        
        <tbody>
        <tr>
        <td>".$row['numeromesa']."</td>
        <td>".$row['nombreLocalidad']."</td>
        <td>".$['nombre']."</td>
        <td>".$row['profesorACargo']."</td>
        </tr>
        </tbody>
        </div>
        </tbody>
        
    ";

        
    };
    echo $res3 = "</table>"

    /*for($i=0;$i<2;$i++){
        echo "hola";
    }*/
    
?>