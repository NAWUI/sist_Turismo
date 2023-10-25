<?php
    @include 'php/connection.php';
    include ("session.php");
    
    
    $query="SELECT * FROM localidades WHERE 1";
    $sql=mysqli_query($con,$query);

    $query2="SELECT * FROM localidades WHERE numeromesa = '' OR null";
    $sql2=mysqli_query($con,$query2);
    


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
            <!-- HEADER QUE SE MUESTRA DE BASE 
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
                 BOTON DE CERRAR SESION
                    <a href="logout.php"><button class="button-28" role="button">Cerrar Sesión</button></a>    
                BOTON DE CERRAR SESION FIN
                </div>
            </nav>
            HEADER QUE SE MUESTRA DE BASE FIN -->
    
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
                    <div class="row rowMap">
                        <div class="col standAjusteH"><div class="standHorINVISIBLE"></div></div>
                        <div class="col standAjusteH"><div class="standHor standid" id="stand1" name="stand1">
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
                        <div class="col standAjusteH"><div class="standHor standid" onClick="getId(this.id)" id="stand2">
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
                        <div class="col standAjusteH"><div class="standHor standid" onClick="getId(this.id)" id="stand3">
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
                        <div class="col standAjusteH"><div class="standHor standid" onClick="getId(this.id)" id="stand4">
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
                        <div class="col standAjusteH"><div class="standHor" onClick="getId(this.id)" id="stand5">
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
                    <div class="row rowMap">
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand6">
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
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand7">
                            <?php 
                                $sqlStand="SELECT * FROM localidades WHERE numeromesa='stand7'";
                                $resultStand=mysqli_query($con,$sqlStand);
                                if($resultStand){
                                    $arrayStand=mysqli_fetch_array($resultStand);
                                    if($arrayStand!=null){
                                        echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                            ?></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand8">
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
                    <div class="row rowMap">
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand9">
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
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand10">
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
                    <div class="row rowMap">
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand11">
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
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand12">
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
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand13">
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
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand14">
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
                    <div class="row rowMap">
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand15">
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
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand16">
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
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand17">
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
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand18">
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
                    <div class="row rowMap">
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand19">
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
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand20">
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
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand21">
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
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand22">
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
                    <div class="row rowMap">
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand23">
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
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand24">
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
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand25">
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
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand26">
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
                    <div class="row rowMap">
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand27">
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
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand28">
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
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand29">
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
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand30">
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
                    <div class="row rowMap">
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand31">
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
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand32">
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
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand33">
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
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand34">
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
                    <div class="row rowMap">
                        <div class="col"><div class="standVerINVISIBLE"></div></div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteH"><div class="standHorINVISIBLE"></div></div>
                        <div class="col standAjusteH"><div class="standHor" onClick="getId(this.id)" id="stand35">
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
                        <div class="col standAjusteH"><div class="standHor" onClick="getId(this.id)" id="stand36">
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
                        <div class="col standAjusteH"><div class="standHor" onClick="getId(this.id)" id="stand37">
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
                        <div class="col standAjusteH"><div class="standHor" onClick="getId(this.id)" id="stand38">
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
                        <div class="col standAjusteV"><div class="standVer" onClick="getId(this.id)" id="stand39">
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


           

            <div class="Descripcion" id="descripcion" name="descripcion" style="display: none">
            <br>
            <br>
            <select id="select" name="select">
                <?php while($row2=mysqli_fetch_array($sql2)){
                    ?>
                    <option> <?php echo $row2["nombreLocalidad"]; ?> </option>
                <?php } ?>

                </select> <br><br>

                <button id="enviar" name="enviar"> Enviar </button>

                </div>
            </div>

            <div class="Descripcion" id="admin" name="admin" style="display: block">
                <div class="card">
                    <br>
                    <div class="card-body">
                        <div class="container infoContenedor">
                            <div class="row">
                                <div class="col-md-5">
                                    <div name="localidad" id="localidad">

                                    </div>
                                        <div class="mb-3">
                                            <h5>Integrantes del grupo</h5>
                                        </div>
                                    <div class="mb-3" name="integrantes" id="integrantes">
                                        <form>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="opcion" value="opcion1">
                                                <label class="form-check-label">
                                                    Integrante 1
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="opcion" value="opcion2">
                                                <label class="form-check-label">
                                                    Integrante 2
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="opcion" value="opcion3">
                                                <label class="form-check-label">
                                                    Integrante 3
                                                </label>
                                            </div>
                                        </form>
                                        <label class="mt-3">Representante: Nombre del representante</label>
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <h3 id="numeroMesa" name="numeroMesa">Num de mesa</h3>
                                    </div>
                                    <div class="mb-3">
                                        <h4>Agregar emprendimiento</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container notasContenedor mt-4">
                            <div class="row">
                                <div class="col">
                                    <h3>Num de mesa</h3>
                                    <h5>Informe</h5>
                                    <h5>Carpeta de campo</h5>
                                    <h5>Souvenir</h5>
                                    <h5>Fotos</h5>
                                    <h5>Laminas</h5>
                                    <h5>Power Point</h5>
                                    <h5>Folleteria</h5>
                                    <h5>Productos regionales</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h3>Observaciones</h3>
                                    <input type="text" class="form-control" id="observTextbox" placeholder="Agregar observaciones...">
                                </div>
                            </div>
                        </div>
                        <div class="container comentariosContenedor mt-4">
                            <div class="row">
                                <div class="col">
                                    <h3>Comentarios</h3>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="comentTextbox" placeholder="Agregar comentarios...">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" id="btn-coment" type="button">Subir</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container comentariosContenedor mt-4">
                            <div class="row">
                                <div class="col" id="comentarios">
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script type="text/javascript">
                //Funcion que toma la id de los div stand
                function getId(clicked_id){
                let idStand = clicked_id;
                console.log(idStand);

                // Envía idStand al servidor PHP usando AJAX
                $.ajax({
                    method: "POST",
                    url: "muestra_comentarios.php", // Deja esto en blanco o coloca el nombre de este archivo PHP si es el mismo
                    data: { idStand: idStand },
                    success: function (response) {
                    
                        $('#comentarios').html(response);
                    },
                    error: function (error) {
                        console.error("Error en la solicitud AJAX: " + error);
                    }
                });
                };
            //Envio de comentarios por medio de ajax
            $('#btn-coment').click(function (){
                let comentario = $("#comentTextbox").val();
                let usu = <?php echo $id_usr ?>;
                let localidad = <?php echo $id_loc ?>;


                $.ajax({
                method: "POST",
                url: "carga_coment.php",
                data: {comentario,usu,localidad},
                success: function (data) {
                    if (data === "Comentario subido") {
                    Swal.fire({
                        icon: "success",
                        title: data,
                        showConfirmButton: false,
                        timer: 1500,
                    }).then(function () {
                        window.location.reload;
                    });
                    } else if (data === "Error") {
                    Swal.fire({
                        icon: "error",
                        title: data,
                        showConfirmButton: false,
                        timer: 1500,
                    });
                    };
                }
                });

                
            });

            

            function getId2(clicked_id){
                let idStand = clicked_id;
                console.log(idStand);

                // Envía idStand al servidor PHP usando AJAX
                $.ajax({
                    method: "POST",
                    url: "muestra_integrantes.php", // Deja esto en blanco o coloca el nombre de este archivo PHP si es el mismo
                    data: { idStand: idStand },
                    success: function (response) {
                    
                        $('#integrantes').html(response);
                    },
                    error: function (error) {
                        console.error("Error en la solicitud AJAX: " + error);
                    }
                });
            };  

            
            
            
        </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<script src="js/stands.js"></script>

</html>
