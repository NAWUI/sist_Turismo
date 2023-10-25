
<div class="headerA">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

            <!-- HEADER QUE SE MUESTRA DE BASE -->
            <nav class="navbar navbar-light bg-customBlue" style="z-index: 1; height: 100%;">
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
                <!-- BOTON DE CERRAR SESION 
                   <a ><button class="button-28" role="button">Cerrar Sesión</button></a>    
                BOTON DE CERRAR SESION FIN-->
                <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php
                echo $_SESSION['nombre'];?>
                </button>
                <ul class="dropdown-menu" style="min-width: 3rem;">
                    <li><a class="dropdown-item" href="logout.php">Salir</a></li>
                </ul>
                </div>
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
                        <a class="sideButtons d-flex align-items-center" href="map.php"><i class="bi bi-map-fill" style="margin-right: 1vw;"></i> Mapa</a>
         
                        <a class="sideButtons d-flex align-items-center" href="registro.php"><i class="bi bi-person-fill" style="margin-right: 1vw;"></i>Registro</a>

                        <a class="sideButtons d-flex align-items-center" href="localidades.php"><i class="bi bi-geo-alt-fill" style="margin-right: 1vw;"></i>Lista de localidades</a>

                        <a class="sideButtons d-flex align-items-center" href="carga_grupo.php"><i class="bi bi-textarea-resize" style="margin-right: 1vw;"></i>Inscripción de Proyectos</a>

                </div>
            </div>
            <!-- SIDEBAR QUE APARECE FIN -->
    
        </div>