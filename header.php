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
                   <a href="logout.php"><button class="button-28" role="button">Cerrar Sesión</button></a>    
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