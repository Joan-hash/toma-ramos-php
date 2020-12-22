<?php
    $op = $_POST['op'];
    session_start();
    if ($op == 1) {
        require('conexion.php');
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $clave = md5($clave);
        $stmt = $conexion -> prepare("SELECT * FROM alumno WHERE rut=:rut AND clave=:clave");
        $stmt -> bindParam('rut', $usuario);
        $stmt -> bindParam('clave', $clave);
        $stmt -> execute();
        $stmt -> setFetchMode(PDO::FETCH_ASSOC);
        $resultado = $stmt -> fetchAll();
        foreach ($resultado as $fila) {
            $_SESSION['usuario'] = $fila['rut'];
            echo "exito";
        }
    }elseif ($op == 2) {
        session_destroy();
    }
?>