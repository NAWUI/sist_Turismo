
<?php
    include("php/connection.php");
    
    $query="SELECT * FROM localidades WHERE 1";
    $sql=mysqli_query($con,$query);


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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    
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


        <section class="mapaLayout">
            <div class="Mapa mapContainer">
                <div class="container mapConteinerConteiner">
                    <div class="row">
                        <div class="col standAjusteH"><div class="standHorINVISIBLE"></div></div>
                        <div class="col standAjusteH"><div class="standHor standid" id="stand1" name="stand1" data-url="php/localidades_mapa.php" data-target="stand">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand1'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?>
                        </div></div>
                        <div class="col standAjusteH"><div class="standHor standid" id="stand2">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand2'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?>
                        </div></div>
                        <div class="col standAjusteH"><div class="standHor standid" id="stand3">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand3'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?>
                        </div></div>
                        <div class="col standAjusteH"><div class="standHor standid" id="stand4">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand4'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?>
                        </div></div>
                        <div class="col standAjusteH"><div class="standHor" id="stand5">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand5'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?>
                        </div></div>
                    </div>
                    <div class="row">
                        <div class="col standAjusteV"><div class="standVer" id="stand6">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand6'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?>
                        </div></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                    <div class="row">
                        <div class="col standAjusteV"><div class="standVer" id="stand7">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand7'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand8">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand8'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?>
                        </div></div>
                    </div>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand9">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand9'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?>
                        </div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand10">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand10'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?>
                        </div></div>
                    </div>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand11">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand11'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?>
                        </div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand12">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand12'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?>
                        </div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand13">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand13'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?>
                        </div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand14">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand14'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?>
                        </div></div>
                    </div>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand15">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand15'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?>
                        </div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand16">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand16'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?>
                        </div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand17">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand17'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?>
                        </div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand18">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand18'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?>
                        </div></div>
                    </div>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand19">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand19'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?>
                        </div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand20">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand20'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand21">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand21'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand22">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand22'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div></div>
                    </div>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand23">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand23'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand24">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand24'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand25">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand25'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand26">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand26'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div></div>
                    </div>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand27">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand27'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand28">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand28'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand29">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand29'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand30">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand30'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div></div>
                    </div>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand31">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand31'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand32">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand32'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand33">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand33'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand34">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand34'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div></div>
                    </div>
                    <div class="row">
                        <div class="col"><div class="standVerINVISIBLE"></div></div>
                    </div>
                    <div class="row">
                        <div class="col standAjusteH"><div class="standHorINVISIBLE"></div></div>
                        <div class="col standAjusteH"><div class="standHor" id="stand35">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand35'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div></div>
                        <div class="col standAjusteH"><div class="standHor" id="stand36">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand36'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div></div>
                        <div class="col standAjusteH"><div class="standHor" id="stand37">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand37'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div></div>
                        <div class="col standAjusteH"><div class="standHor" id="stand38">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand38'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand39">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand39'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                                }
                            ?></div></div>
                    </div>
                </div>
                
            </div>

            <script>
                /*$("stand1").click(function(){
                    cargarContenido("carga_localidades.php");
                });
                */

                
            
          </script>

           

            </div>
            <div id="res" name="res" >
            <div class="Descripcion" id="descripcion" name="descripcion" style="display:none;">
            <select id="select" name="select">

                <?php while($row=mysqli_fetch_array($sql)){
                    ?>
                    <option> <?php echo $row["nombreLocalidad"]; ?> </option>
                <?php } ?>

                </select> <br><br>

                <button id="enviar" name="enviar"> Enviar </button>

                </div>
            </div>
        </section>

    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

</html>