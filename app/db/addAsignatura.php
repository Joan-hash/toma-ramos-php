<?php
    require_once('conexion.php');
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $periodo = $_POST['periodo'];
    $stmt = $conexion -> prepare("INSERT INTO asignatura (nombre, descripcion, periodo) VALUE (:nNombre, :nDescripcion, :nPeriodo)");
    $stmt -> bindParam(':nNombre', $nombre);
    $stmt -> bindParam(':nDescripcion', $descripcion);
    $stmt -> bindParam(':nPeriodo',$periodo);
    $stmt -> execute();
    echo "exito";
?>