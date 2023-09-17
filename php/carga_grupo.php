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
        <div class="">
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
                <div class="sidenav-content">
                    <a class="closebtn" id="close">&times;</a>
                    <h1 class="sidenav-title">Sistema de Jornadas Turísticas</h1>
                    <br>
                    <a class="sideButtons" href="index.html">Inicio</a>
                    <a class="sideButtons" href="registro.php">Registro</a>
                    <a class="sideButtons" href="carga_almyprof.php">Carga de Alumnos y Profesores</a>
                    <a class="sideButtons" href="carga_grupo.php">Inscripción de Proyectos</a>
                    <a class="sideButtons" href="#">Mapa</a>
                    <a class="sideButtons" href="#">Asignación de Mesas</a>
                    <a class="sideButtons" href="#">Acreditación y Calificación</a>
                </div>
            </div>
            <!-- SIDEBAR QUE APARECE FIN -->
    
        </div>
        <!-- HEADER FIN -->

        <div class="custom-container">
    <h2>Formulario de Carga de Grupo</h2>
    <form action="php/carga_grupo_v.php" method="POST">
        <div class="custom-form-group">
            <label for="numeromesa" class="custom-form-label">Numero de mesa</label>
            <input type="text" class="custom-form-control" id="numeromesa" name="numeromesa" placeholder="Numero de mesa">
        </div>
        <div class="custom-form-group">
            <label for="localidad" class="custom-form-label">Localidad asignada</label>
            <input type="text" class="custom-form-control" id="localidad" name="localidad" placeholder="Localidad asignada">
        </div>
        <div class="custom-form-group">
            <label for="profesor" class="custom-form-label">Profesor a cargo</label>
            <input type="text" class="custom-form-control" id="profesor" name="profesor" placeholder="Profesor a cargo">
        </div>
        <br>
        <div class="custom-btn-container"> <!-- Contenedor para el botón -->
                <button type="submit" class="custom-btn-primary">Enviar</button>
        </div>
    </form>
</div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</html>