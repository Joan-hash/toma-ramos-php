<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <!--jQuery-->
    <script src="materialize/jquery-3.3.1.js"></script>
    <!--MiScript-->
    <script src="js/logins.js"></script>
    <!--Autoinit-->
    <script>
    $(document).ready(function() {
        $('.modal').modal();
    });
    </script>
    <title>Bienvenido!</title>
</head>

<body style="background-color:#F5F5F5">
    <div class="container">
        <h2 class="center">INICIO DE SESIÓN</h2>
        <div class="row">
            <div class="col s6">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/admin.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">COORDINADOR<i
                                class="material-icons right">arrow_forward</i></span>
                        <p id="msgC"></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"><i
                                class="material-icons right">close</i></span>
                        <br><br>
                        <form>
                            <div class="input-field col s12">
                                <input id="user" name="user" type="text" class="validate">
                                <label for="user">Nombre de usuario</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="pass" name="pass" type="password" class="validate" required>
                                <label for="pass">Contraseña</label>
                            </div>
                            <br><br><br>
                        </form>
                        <button class="btn right" id="loginC">ENTRAR</button>
                    </div>
                </div>
            </div>
            <div class="col s6">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/student.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">ALUMNO<i
                                class="material-icons right">arrow_forward</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"><i
                                class="material-icons right">close</i></span>
                        <br><br>
                        <form>
                            <div class="input-field col s12">
                                <input id="rut" type="text" class="validate">
                                <label for="rut">Rut </label>
                                <span class="helper-text">Con puntos y guión</span>
                            </div>
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate">
                                <label for="password">Contraseña</label>
                            </div>
                            <br><br><br>
                        </form>
                        <button class="btn right" id="loginA">ENTRAR</button>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include_once('includes/footerIndex.php');
    ?>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>

</html>