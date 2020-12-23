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
    <script src="../js/addSeccion.js"></script>
    <!--Autoinit-->
    <script>
    $(document).ready(function() {
        $('.modal').modal();
    });
    </script>
    <title>Registrar Sección</title>
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
                    <span class="card-title black-text center">Formulario Secciones</span>
                    <div class="row">
                        <form class="col s12">
                            <div class="input-field">
                                <input type="text" name="nombre" id="nombre">
                                <label for="nombre">Nombre sección</label>
                            </div>
                            <div class="input-field">
                                <input type="number" name="cupo" id="cupo">
                                <label for="cupo">Cupo</label>
                            </div>
                            <div class="input-field">
                                <input type="number" name="total" id="total">
                                <label for="total">Total inscritos</label>
                            </div>
                            <?php
                                require_once('../db/searchGeneral.php');
                                $asignaturas = buscarAsignaturas();
                                $salas = buscarSalas();
                            ?>
                            <div class="input-field">
                                <select id="asignaturas">
                                    <option value="" disbled selected>Asignatura</option>
                                    <?php
                                        foreach ($asignaturas as $asignatura) {
                                            echo "<option value='".$asignatura['idasignatura']."'>".$asignatura['nombre']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="input-field">
                                <select id="salas">
                                    <option value="" disabled selected>Sala</option>
                                    <?php
                                        foreach ($salas as $sala) {
                                            echo "<option value='".$sala['idsala']."'>".$sala['nombre']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </form>
                        <div class="col s12">
                                <a class="btn modal-trigger right" href="#modal1" id="crearSeccion">CREAR</a>
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
    <script>
    M.AutoInit();
    </script>
</body>
</html>