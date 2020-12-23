<?php
    session_start();
    if (isset($_SESSION['usuario'])) {

    }else{
        header("Location: notFound.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css" media="screen,projection" />
    <!--jQuery-->
    <script src="../materialize/jquery-3.3.1.js"></script>
    <script src="../js/logouts.js"></script>
    <!--Autoinit-->
    <script>
    $(document).ready(function() {
        M.AutoInit();
    });
    </script>
    <title>Menu Principal</title>
</head>
<body style="background-color:#F5F5F5">    
    <?php
        include_once('../includes/navbarAlumno.php');
    ?>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col s2">
            
            </div>
            <div class="col s8">
                <div class="card">
                    <div class="card-image">
                        <img src="../img/welcomeA.png" alt="bienvenido">
                    </div>
                    <div class="card-content">
                        <h4 class="center">Bienvenido!
                            <?php
                                echo $_SESSION['nombre']." ".$_SESSION['apellido'];
                            ?>
                        </h4>
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