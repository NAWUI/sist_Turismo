<?php

    include("php/connection.php");
    include('session.php');

    $sqlLoc="SELECT * FROM localidades WHERE 1";
    
    $queryLoc=mysqli_query($con,$sqlLoc);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Jornadas Turísticas</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
            <!-- HEADER INICIO -->
            <?php 
                include("header.php");
            ?>
            
        <!-- HEADER FIN -->
        <br>    
        <br>

        <section class="listaLayout">
                <div class="Descripcion">

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Numero de Mesa</th>
                        <th scope="col">Localidad</th>
                        <th scope="col">Alumnos</th>
                        <th scope="col">Profesor a cargo</th>
                        <th scope="col">Administrador</th>
                        </tr>
                    </thead>
                    <?php while($arrayLoc=mysqli_fetch_array($queryLoc)){ 
                        
                        $sqlAlum="SELECT * FROM alumnos WHERE id_localidades='".$arrayLoc["id"]."'";
                        $queryAlum=mysqli_query($con,$sqlAlum);
                        

                        $sqlUs="SELECT * FROM usuarios WHERE id_localidades='".$arrayLoc["id"]."'";
                        $queryUs=mysqli_query($con,$sqlUs);

                        ?>
                    <tbody>
                        <tr>
                        <td><?php echo $arrayLoc["nombreLocalidad"] ?></td>
                        <td><?php/* while($arrayAlum=mysqli_fetch_array($queryAlum)){ echo "-".$arrayAlum["nombre"]."<br>"; }*/ ?></td>
                        <td><?php echo $arrayLoc["profesorACargo"] ?></td>
                        <td><?php /*while($arrayUs=mysqli_fetch_array($queryUs)){ echo "-".$arrayUs["nombre"]."<br>"; } */?></td>
                        </tr>
                    </tbody>

                <?php } ?>

                </table>

            </div>
        </section>

    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</html>