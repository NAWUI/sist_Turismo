<?php

    include('connection.php');
    $id = $_POST["id"];

    $i = 0;
    $sql = "SELECT * FROM localidades WHERE numeromesa = '".$id."'";
    $query = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($query);

    $sql2 = "SELECT * FROM personas WHERE id_localidades = '".$row["id"]."'";
    $query2 = mysqli_query($con, $sql2);

    $row2 = mysqli_fetch_array($query2);

    $sql3 = "SELECT * FROM personas WHERE id_localidades = '".$row["id"]."'";
    $query3 = mysqli_query($con, $sql3);

    while($row3=mysqli_fetch_array($query3)){
            $integrante[$i] = $row3["nombre"];
            $i = $i+1;
            echo $i;
            if($i > 2){
                $i = 0;
            }
    }
    if(isset($integrante[0])){
    }else{
        $integrante[2] = " ";
    }
    if(isset($integrante[1])){
    }else{
        $integrante[2] = " ";
    }
    if(isset($integrante[2])){
    }else{
        $integrante[2] = " ";
    }

    $admin  = "<div class='card'>
                    <br>
                    <div class='card-body'>
                        <div class='container infoContenedor'>
                            <div class='row'>
                                <div class='col-md-5'>
                                    <h3>".$row["nombreLocalidad"]."</h3>
                                        <div class='mb-3'>
                                            <h5>Integrantes del grupo</h5>
                                        </div>
                                    <div class='mb-3' name='integrantes' id='integrantes'>
                                        <form>
                                            <div class='form-check'>
                                                <input class='form-check-input' type='radio' name='opcion' value='opcion1'>
                                                <label class=form-check-input'>
                                                    ".$integrante[0]."
                                                </label>
                                            </div>
                                            <div class='form-check'>
                                                <input class='form-check-input' type='radio' name='opcion' value='opcion1'>
                                                <label class=form-check-input'>
                                                    ".$integrante[1]."
                                                </label>
                                            </div>
                                            <div class='form-check'>
                                                <input class='form-check-input' type='radio' name='opcion' value='opcion1'>
                                                <label class=form-check-input'>
                                                    ".$integrante[2]."
                                                </label>
                                            </div>
                                        </form>
                                        <label class='mt-3'>Representante: Nombre del representante</label>
                                    </div>
                                </div>
                                <div class='col-md-3'></div>
                                <div class='col-md-4'>
                                    <div class='mb-3'>
                                        <h3 id='numeroMesa' name='numeroMesa'>".$row["numeromesa"]."</h3>
                                    </div>
                                    <div class='mb-3'>
                                        <h4>Agregar emprendimiento</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='container notasContenedor mt-4'>
                            <div class='row'>
                                <div class='col'>
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
                            <div class='row'>
                                <div class='col'>
                                    <h3>Observaciones</h3>
                                    <input type='text' class='form-control' id='observTextbox' placeholder='Agregar observaciones...'>
                                </div>
                            </div>
                        </div>
                        <div class='container comentariosContenedor mt-4'>
                            <div class='row'>
                                <div class='col'>
                                    <h3>Comentarios</h3>
                                    <div class='input-group mb-3'>
                                        <input type='text' class='form-control' id='comentTextbox' placeholder='Agregar comentarios...'>
                                        <div class='input-group-append'>
                                            <button class='btn btn-outline-secondary' id='btn-coment' type='button'>Subir</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='container comentariosContenedor mt-4'>
                            <div class='row'>
                                <div class='col' id='comentarios'>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>";
            echo $admin;
?>