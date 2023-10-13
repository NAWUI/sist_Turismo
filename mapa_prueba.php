<?php
include("connection.php");
include("session.php");
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



            <div class="Descripcion" id="admin" name="admin">
                <div class="card">
                    <br>
                    <div class="card-body">
                        <div class="container infoContenedor">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <h3>Localidad:</h3>
                                        <div class="custom-form-group">
                                            <select class="custom-form-control" name="evaluadores" id="evaluadores" aria-label="Default select example">
                                                <option value="">Seleccione una localidad</option>
                                <?php
                                                include('connection.php');
                                                $sql = "SELECT nombreLocalidad, id FROM localidades WHERE numeromesa = 'no definido' AND id_evaluador = '$id_usr'";
                                                $consulta = mysqli_query($conn, $sql);
                                                while ($vec = mysqli_fetch_row($consulta)) {
                                                    $nombrelocalidad = "$vec[0]";
                                                    $id_localidad = "$vec[1]";
                                                    echo "<option value='$id_localidad'>$nombrelocalidad</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <h5>Integrantes del grupo</h5>
                                    </div>
                                    <div class="mb-3">
                                        <form>
                                        <div id="integrante1" name="integrante1">

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
                        <div class="container notasContenedor mt-4">
                            <div class="row">
                                <div class="col">
                                    <h3>Num de mesa</h3> 
                                        <select>
                                            <?php
                                            $queryNumero = "SELECT * FROM localidades WHERE 1";
                                            $sqlNumero = mysqli_query($conn, $queryNumero);
                                            while ($rowNumero = mysqli_fetch_array($sqlNumero)) { ?>
                                                                    <option> <?php echo $rowNumero["numeromesa"] ?> </option>
                                            <?php } ?>
                                        </select>
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
                            <div class="row">1
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

            // function getId1(clicked_id){
            //     let idStand = clicked_id;
            //     console.log(idStand);

            //     // Envía idStand al servidor PHP usando AJAX
            //     $.ajax({
            //         method: "POST",
            //         url: "mostar_integrantes.php", // Deja esto en blanco o coloca el nombre de este archivo PHP si es el mismo
            //         data: { idStand: idStand },
            //         success: function (response) {
                    
            //             $('#comentarios').html(response);
            //         },
            //         error: function (error) {
            //             console.error("Error en la solicitud AJAX: " + error);
            //         }
            //     });
            //     };
            
        </script>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

</html>
