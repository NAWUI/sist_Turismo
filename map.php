<?php
include("connection.php");
include("session.php");

function obtenerInicialesLocalidad($localidad) {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <!-- HEADER INICIO -->
    <?php
    include("header.php");
    ?>

    <!-- HEADER FIN -->


    <div class="container-flex">
        <div class="row" style="width: 100vw;">
            <div class="col-md-5 Mapa mapContainer">
                <div class="container mapConteinerConteiner">
                    <div class="row rowMap">
                        <div class="col standAjusteH">
                            <div class="standHorINVISIBLE"></div>
                        </div>
                        <div class="col standAjusteH">
                            <div class="standHor standid" onClick="getId(this.id)" id="stand1" name="stand1" data-url="php/localidades_mapa.php" data-target="stand" data-id="1">
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
                                ?></div>
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
                                ?></div>
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
                                ?></div>
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
                                ?></div>
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
                                ?></div>
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
                                ?></div>
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
                                ?></div>
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
                                ?></div>
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
                                ?></div>
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
                                ?></div>
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
                                ?></div>
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
                                ?></div>
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
                                ?></div>
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
                                ?></div>
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
                                ?></div>
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
                                ?></div>
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
                                ?></div>
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
                                ?></div>
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
                                ?></div>
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
                                ?></div>
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
                                ?></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-7 col-12" id="admin" name="admin">
                <div class="card">
                    <br>
                    <div class="card-body">
                        <div class="container infoContenedor">
                            <div class="row">
                                <div class="col-md-5">
                                    <div id="lcalidad_dec">

                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <h3 id='numMesa'>Num de mesa ()</h3>
                                    </div>
                                    <div class="mb-3">
                                        <a href="microemprendimiento.php">
                                            <button type="button" id="emprendi" class="custom-form-control">Agregar emprendimiento</button>
                                        </a>
                                        <a href="">
                                            <button type="button" class="custom-form-control">Guardar evaluacion</button>
                                        </a>
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
                        <div class="container notasContenedor mt-4">

                            <div class="row">
                                <div class="col-sm">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5>Informe</h5>
                                            <select class="custom-form-control smaller-select" name="evaluadores" id="evaluadores1" aria-label="Default select example">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5>Carpeta de campo</h5>
                                            <select class="custom-form-control smaller-select" name="evaluadores" id="evaluadores2" aria-label="Default select example">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5>Souvenir</h5>
                                            <select class="custom-form-control smaller-select" name="evaluadores" id="evaluadores3" aria-label="Default select example">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5>Fotos</h5>
                                            <select class="custom-form-control smaller-select" name="evaluadores" id="evaluadores4" aria-label="Default select example">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5>Laminas</h5>
                                            <select class="custom-form-control smaller-select" name="evaluadores" id="evaluadores5" aria-label="Default select example">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5>Power Point</h5>
                                            <select class="custom-form-control smaller-select" name="evaluadores" id="evaluadores6" aria-label="Default select example">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5>Folleteria</h5>
                                            <select class="custom-form-control smaller-select" name="evaluadores" id="evaluadores7" aria-label="Default select example">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5>Productos regionales</h5>
                                            <select class="custom-form-control smaller-select" name="evaluadores" id="evaluadores8" aria-label="Default select example">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container observacionesContenedor mt-4">
                                <div class="row">
                                    <div class="col">
                                        <h3>Observaciones</h3>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="observTextbox" placeholder="Agregar observaciones...">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" id="btn-observ" type="button">Subir</button>
                                            </div>
                                        </div>
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
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" id="vercoment" type="button">Ver comentarios</button>
                            </div>
                            <div id="vercomentarios" class="container comentariosContenedor mt-4">
                                <div class="row">
                                    <div class="col" id="comentarios">

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        //Envio de comentarios por medio de ajax
        $('#btn-coment').click(function() {
            let comentario = $("#comentTextbox").val();
            let usu = <?php echo $id_usr ?>;
            let localidad = <?php echo $id_loc ?>;


            $.ajax({
                method: "POST",
                url: "carga_coment.php",
                data: {
                    comentario,
                    usu,
                    localidad
                },
                success: function(data) {
                    if (data === "Comentario subido") {
                        Swal.fire({
                            icon: "success",
                            title: data,
                            showConfirmButton: false,
                            timer: 1500,
                        }).then(function() {
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
    </script>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<script src="js/getid.js"></script>
<!-- <script src="js/guardarlocalidad.js"></script> -->

</html>