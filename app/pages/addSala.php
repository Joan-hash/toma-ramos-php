<?php
    session_start();
    if ($_SESSION['usuario'] == "Amittai") {

    }else{
        header("Location: notFound.php");
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css" media="screen,projection" />
    <!--jQuery-->
    <script src="../materialize/jquery-3.3.1.js"></script>
    <!--MiScript-->
    <script src="../js/addSala.js"></script>
    <!--Autoinit-->
    <script>
    $(document).ready(function() {
        $('.modal').modal();
    });
    </script>
    <title>Crear Sala</title>
</head>

<body style="background-color:#F5F5F5">
    <?php
    include_once('../includes/navbarAdminv2.php');
?>
    <div class="container">
        <div class="row">
            <div class="col s2">

            </div>
            <div class="col s8">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title black-text center">Formulario Salas</span>
                        <div class="row">
                            <form class="col s12">
                                <div class="input-field">
                                    <input type="text" name="nombre" id="nombre">
                                    <label for="nombre">Nombre</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" name="tipo" id="tipo">
                                    <label for="tipo">Tipo</label>
                                </div>
                                <div class="input-field">
                                    <input type="number" name="capacidad" id="capacidad">
                                    <label for="capacidad">Capacidad</label>
                                </div>
                            </form>
                            <div class="col s12">
                                <a class="btn modal-trigger right" href="#modal1" id="crearSala">CREAR</a>
                                <div id="modal1" class="modal">
                                    <div class="modal-content">
                                        <blockquote id="msg" class="center">

                                        </blockquote>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="" class="modal-close waves-effect waves-green btn-flat" id="boton"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s2">

            </div>
        </div>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
</body>

</html>