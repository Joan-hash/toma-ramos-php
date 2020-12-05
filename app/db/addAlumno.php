<?php
    //requerimiento de la conexión a la base de datos
    require_once('conexion.php');
    //captura de los datos traidos por el metodo post
    $rut = $_POST['rut'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $clave = $_POST['clave'];
    //encriptación de la contraseña
    $clave = md5($clave);
    //preparación de la query
    $stmt = $conexion -> prepare("INSERT INTO alumno (rut, nombre, apellido, telefono, clave) VALUE (:nRut, :nNombre, :nApellido, :nTelefono, :nClave)");
    //unión de datos a la query
    $stmt -> bindParam(':nRut', $rut);
    $stmt -> bindParam(':nNombre', $nombre);
    $stmt -> bindParam(':nApellido', $apellido);
    $stmt -> bindParam(':nTelefono', $telefono);
    $stmt -> bindParam(':nClave', $clave);
    //ejecución de la query
    $stmt -> execute();
    //impresion del resultado
    echo "exito";
?>