<?php
    require_once('conexion.php');
    $nombre = $_POST['nombre'];
    $capacidad = $_POST['capacidad'];
    $stmt = $conexion -> prepare("UPDATE sala SET capacidad=:capacidad WHERE nombre=:nombre");
    $stmt -> bindParam(':capacidad', $capacidad);
    $stmt -> bindParam(':nombre', $nombre);
    $stmt -> execute();
    echo "exito";
?>