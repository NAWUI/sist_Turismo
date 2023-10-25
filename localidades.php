<?php

    include("php/connection.php");

    $sqlLoc="SELECT * FROM localidades WHERE numeroMesa != '' OR null";
    
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
           <!-- HEADER INICIO -->
           <div class="headerA">
            <!-- HEADER QUE SE MUESTRA DE BASE -->
            <nav class="navbar navbar-light bg-customBlue" style="z-index: 1;">
                <div class="container-fluid" id="menuToggle">
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#navbarToggleExternalContent2"
                        aria-controls="navbarToggleExternalContent1"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                        id="open"
                    >
                        <i class="fas fa-bars text-light"></i>
                
                </button>
                <!-- BOTON DE CERRAR SESION -->
                    <a href="index.html"><button class="button-28" role="button">Cerrar Sesión</button></a>    
                <!-- BOTON DE CERRAR SESION FIN-->
                </div>
            </nav>
            <!-- HEADER QUE SE MUESTRA DE BASE FIN -->
    
            <!-- DIV DE OSCURIDAD -->
            <div id="oscuro" class="test" style="display: none;"></div>
            <!-- DIV DE OSCURIDAD  FIN-->
    
            <!-- SIDEBAR QUE APARECE -->
            <div id="mySidenav" class="sidenav" style="z-index: 3;">
                <div class="sidenav-content" id="sidenavContent">
                    <a class="closebtn" id="close">&times;</a>
                    <h1 class="sidenav-title">Sistema de Jornadas Turísticas</h1>
                    <br>                    
                    <div class="sideButtonsContainer">
                        <a class="sideButtons " href="map.php">Mapa</a>

                        <a class="sideButtons " href="registro.php">Registro</a>

                        <a class="sideButtons " href="localidades.php">Lista de localidades</a>

                        <a class="sideButtons " href="carga_grupo.php">Inscripción de Proyectos</a>

                        <a class="sideButtons " href="carga_almyprof.php">Carga de Alumnos y Profesores</a>
                    </div>
                </div>
            </div>
            <!-- SIDEBAR QUE APARECE FIN -->
    
        </div>
        <!-- HEADER FIN -->
        <br>    
        <br>

        <section class="listaLayout">
                <div class="Descripcion">


                <!DOCTYPE html>
    <div id="data"></div>


    
        <input class="form-control me-2" type="search" placeholder="Search" id="buscador" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    

                <table class="table" id="tabla">
                    <thead>
                        <tr>
                        <th scope="col">Numero de stand</th>
                        <th scope="col">Localidad</th>
                        <th scope="col">Alumnos</th>
                        <th scope="col">Profesor</th>
                        <th scope="col">Administrador</th>
                        </tr>
                    </thead>
                    
                    <?php while($arrayLoc=mysqli_fetch_array($queryLoc)){ 
                        
                        $sqlAlum="SELECT * FROM personas WHERE id_localidades='".$arrayLoc["id"]."'";
                        $queryAlum=mysqli_query($con,$sqlAlum);
                        

                        $sqlUs="SELECT * FROM usuarios WHERE id_localidades='".$arrayLoc["id"]."'";
                        $queryUs=mysqli_query($con,$sqlUs);

                        ?>
                    <tbody>
                        <tr>
                        <td><?php echo $arrayLoc["numeromesa"] ?></td>
                        <td><?php echo $arrayLoc["nombreLocalidad"] ?></td>
                        <td><?php while($arrayAlum=mysqli_fetch_array($queryAlum)){ echo "-".$arrayAlum["nombre"]."<br>"; } ?></td>
                        <td><?php echo $arrayLoc["profesorACargo"] ?></td>
                        <td><?php while($arrayUs=mysqli_fetch_array($queryUs)){ echo "-".$arrayUs["nombre"]."<br>"; } ?></td>
                        </tr>
                    </tbody>

                <?php } ?>
                    
                </table>

            </div>
        </section>

    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/search.js"></script>
</html>