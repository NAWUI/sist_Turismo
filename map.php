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


        <section class="mapaLayout">
            <div class="Mapa mapContainer">
                <div class="container mapConteinerConteiner">
                    <div class="row rowMap">
                        <div class="col standAjusteH"><div class="standHorINVISIBLE"></div></div>
                        <div class="col standAjusteH"><div class="standHor" id="stand1"></div></div>
                        <div class="col standAjusteH"><div class="standHor" id="stand2"></div></div>
                        <div class="col standAjusteH"><div class="standHor" id="stand3"></div></div>
                        <div class="col standAjusteH"><div class="standHor" id="stand4"></div></div>
                        <div class="col standAjusteH"><div class="standHor" id="stand5"></div></div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteV"><div class="standVer" id="stand6"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteV"><div class="standVer" id="stand7"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand8"></div></div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand9"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand10"></div></div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand11"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand12"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand13"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand14"></div></div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand15"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand16"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand17"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand18"></div></div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand19"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand20"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand21"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand22"></div></div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand23"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand24"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand25"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand26"></div></div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand27"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand28"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand29"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand30"></div></div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand31"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand32"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand33"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand34"></div></div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteV"><div class="standVerINVISIBLE"></div></div>
                    </div>
                    <div class="row rowMap">
                        <div class="col standAjusteH"><div class="standHorINVISIBLE"></div></div>
                        <div class="col standAjusteH"><div class="standHor" id="stand35"></div></div>
                        <div class="col standAjusteH"><div class="standHor" id="stand36"></div></div>
                        <div class="col standAjusteH"><div class="standHor" id="stand37"></div></div>
                        <div class="col standAjusteH"><div class="standHor" id="stand38"></div></div>
                        <div class="col standAjusteV"><div class="standVer" id="stand39"></div></div>
                    </div>
                </div>
            </div>
            <div class="Descripcion">
                <div class="card">
                    <div class="card-body">
                        <div class="container infoContenedor">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <h3>Localidad</h3>
                                        <h5>Integrantes del grupo</h5>
                                    </div>
                                    <div class="mb-3">
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
                                        <h3>Num de mesa</h3>
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
                                    <h3>Observaciones</h3>
                                    <input type="text" class="form-control" id="comentTextbox" placeholder="Agregar comentario...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</html>