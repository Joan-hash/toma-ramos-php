<?php
    //requerimiento de la conexión a la base de datos
    require_once('conexion.php');
    //captura de los datos traidos por el metodo post
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $capacidad = $_POST['capacidad'];
    //preparación de la query
    $stmt = $conexion -> prepare("INSERT INTO sala (nombre, tipo, capacidad) VALUE (:nNombre, :nTipo, :nCapacidad)");
    //unión de datos a la query
    $stmt -> bindParam(':nNombre', $nombre);
    $stmt -> bindParam(':nTipo', $tipo);
    $stmt -> bindParam(':nCapacidad', $capacidad);
    //ejecución de la query
    $stmt -> execute();
    //impresion del resultado
    echo "exito";
?>