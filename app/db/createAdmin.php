<?php
    $id = "1";
    $nombre = "Amittai";
    $clave = "amittai1";
    $clave = md5($clave);
    require_once('conexion.php');
    $stmt = $conexion -> prepare("INSERT INTO coordinador (id, nombre, clave) VALUE (:id, :nombre, :clave)");
    $stmt -> bindParam(':id', $id);
    $stmt -> bindParam(':nombre', $nombre);
    $stmt -> bindParam(':clave', $clave);
    $stmt -> execute();
    echo "exito";
?>