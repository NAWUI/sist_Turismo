<?php
include("connection.php");
include("session.php");

function obtenerInicialesLocalidad($localidad)
{
    $palabras = explode(' ', $localidad); // Divide el nombre de la localidad en palabras
    $iniciales = array(); // Array para almacenar las iniciales

    foreach ($palabras as $palabra) {
        $iniciales[] = strtoupper(substr($palabra, 0, 1)); // Obtiene la inicial de cada palabra en mayúsculas
    }

    // Convierte el array de iniciales en una cadena separada por espacios
    $iniciales_localidad = implode('.', $iniciales);

    return $iniciales_localidad;
}

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <!-- HEADER INICIO -->
    <?php
    include("header.php");
    ?>

    <!-- HEADER FIN -->


    <div class="container-flex">
        <div class="row" style="width: 100vw; margin: 0;">
            <div class="col-md-5 Mapa mapContainer">
                <div class="container mapConteinerConteiner">
                    <div class="row rowMap">
                        <div class="col standAjusteH">
                            <div class="standHorINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteH">
                            <div class="standHor standid" onClick="getId(this.id)" id="stand1" name="stand1"
                                data-url="php/localidades_mapa.php" data-target="stand" data-id="1">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand1'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {

                                        //$nombre_localidad = "Santa Teresita";
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                
                                        //echo $arrayStand["nombreLocalidad"];
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteH">
                            <div class="standHor standid" onClick="getId(this.id)" id="stand2">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand2'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteH">
                            <div class="standHor standid" onClick="getId(this.id)" id="stand3">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand3'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteH">
                            <div class="standHor standid" onClick="getId(this.id)" id="stand4">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand4'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteH">
                            <div class="standHor" onClick="getId(this.id)" id="stand5">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand5'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand6">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand6'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand7">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand7'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand8">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand8'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand9">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand9'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand10">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand10'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand11">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand11'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand12">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand12'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand13">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand13'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand14">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand14'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand15">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand15'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand16">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand16'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand17">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand17'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand18">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand18'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand19">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand19'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand20">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand20'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand21">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand21'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand22">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand22'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand23">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand23'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand24">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand24'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand25">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand25'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand26">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand26'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand27">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand27'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand28">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand28'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand29">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand29'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand30">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand30'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand31">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand31'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand32">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand32'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand33">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand33'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand34">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand34'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row rowMap">
                        <div class="col">
                            <div class="standVerINVISIBLE"></div>
                        </div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteH">
                            <div class="standHorINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteH">
                            <div class="standHor" onClick="getId(this.id)" id="stand35">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand35'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteH">
                            <div class="standHor" onClick="getId(this.id)" id="stand36">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand36'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteH">
                            <div class="standHor" onClick="getId(this.id)" id="stand37">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand37'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteH">
                            <div class="standHor" onClick="getId(this.id)" id="stand38">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand38'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col standAjusteV">
                            <div class="standVer" onClick="getId(this.id)" id="stand39">
                                <?php
                                $sqlStand = "SELECT * FROM localidades WHERE numeromesa='stand39'";
                                $resultStand = mysqli_query($conn, $sqlStand);
                                if ($resultStand) {
                                    $arrayStand = mysqli_fetch_array($resultStand);
                                    if ($arrayStand != null) {
                                        $iniciales = obtenerInicialesLocalidad($arrayStand["nombreLocalidad"]);
                                        echo $iniciales; // Esto imprimirá "S T"
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-7 col-12 letras-color fondo-color" id="admin" name="admin"
                style="border-left: 2px solid #5d424763;">
                <div class="card fondo-color" style="border: 0;">
                    <br>
                    <div class="card-body fondo-color">
                        <div class="container-fluid">
                            <!-- Contenedor de Informacion, notas y comentarios -->
                            <div class="row">
                                <!-- Contenedor de Informacion y notas -->
                                <div class="col-md-6 mr-4">
                                    <!-- Contenedor de Informacion -->
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12" style="padding: 0;">
                                                    <div id="localidad-dec" class="col-md-12 mb-4" style="padding: 0;">
                                                        <div class="border-top-bottom padding-boxes animation-test"
                                                            id="lcalidad_dec">

                                                        </div>
                                                    </div>
                                                    <div class="border-top-bottom">
                                                        <div class="padding-boxes">
                                                            <div class="mb-3">
                                                                <h3 id='numMesa'>Num de mesa ()</h3>
                                                            </div>

                                                            <div class="mb-3">
                                                                <div id="microempredimiento">

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="evaluacion">

                                    </div>
                                </div>

                                <!-- Contenedor de Comentarios -->
                                <div class="col-md-6">
                                    <div class="border-top-bottom">
                                        <div class="row padding-boxes">
                                            <div class="col-md-12">
                                                <h3>Comentarios</h3>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control border-custom-info"
                                                        id="comentTextbox" placeholder="Agregar comentarios...">
                                                    <div class="input-group-append">
                                                        <button style="z-index: 0;"
                                                            class="btn btn-outline-secondary btn-custom-info"
                                                            id="btn-coment" type="button">Subir</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row padding-boxes">
                                            <div class="col-md-12">
                                                <div id="vercomentarios" class="comentariosContenedor mt-4">
                                                    <div class="row">
                                                        <div class="col" id="comentarios">

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="vercomentarios" class="container comentariosContenedor mt-4">
                                    <div class="row padding-boxes">
                                        <div class="col" id="comentarioss">

                                            <!-- Contenedor de Obervaciones -->
                                            <div class="row border-top-bottom">
                                                <div class="col-md-12">
                                                    <h3>Observaciones</h3>
                                                    <div class="input-group mb-3">

                                                        <input type="text" class="form-control border-custom-info"
                                                            id="observTextbox" placeholder="Agregar observaciones...">
                                                        <div class="input-group-append">
                                                            <button style="z-index: 0;"
                                                                class="btn btn-outline-secondary btn-custom-info"
                                                                id="btn-observ" type="button">Subir</button>

                                                        </div>
                                                    </div>
                                                    <div class="observaciones" id="observaciones">
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <style>
                                        .smaller-select {
                                            width: 3rem;
                                            /* Suficiente para acomodar dos dígitos */
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Modal edicion -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" id="modalContent">

            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        //Mostrar modal de edicion de comentario
        /*const openModalButtons = document.querySelectorAll(".open");
        const modalContent = document.getElementById("modalContent");

        openModalButtons.forEach(button => {
            button.addEventListener("click", function () {*/
        $(document).on("click", ".open", function () {
            // Obtén el valor del ID del botón
            let modalId = $(this).attr("id");

            //alert(modalId);
            // Realiza una solicitud AJAX para obtener los datos de la base de datos
            $.ajax({
                url: 'modal_comnt.php',
                method: 'POST',
                data: { id: modalId },
                success: function (response) {
                    // Actualiza el contenido del modal con los datos obtenidos
                    modalContent.innerHTML = response;
                    // Muestra el modal
                    $('#myModal').modal('show');
                },
                error: function (error) {
                    console.error("Error");
                }
            });
        });

        $(document).on("click", ".openobser", function () {
            // Obtén el valor del ID del botón
            let modalId = $(this).attr("id");

            //alert(modalId);
            // Realiza una solicitud AJAX para obtener los datos de la base de datos
            $.ajax({
                url: 'modal_obser.php',
                method: 'POST',
                data: { id: modalId },
                success: function (response) {
                    // Actualiza el contenido del modal con los datos obtenidos
                    modalContent.innerHTML = response;
                    // Muestra el modal
                    $('#myModal').modal('show');
                },
                error: function (error) {
                    console.error("Error");
                }
            });
        });
        /* });
     });*/
    </script>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<script src="js/getid.js"></script>
<script src="js/eliminar_comnt.js"></script>
<script src="js/editar_comnt.js"></script>
<script src="js/eliminar_obser.js"></script>
<script src="js/editar_obser.js"></script>
<!-- <script src="js/guardarlocalidad.js"></script> -->

</html>