<?php
    require_once('conexion.php');
    $nombre = $_POST['nombre'];
    $cupo = $_POST['cupo'];
    $total = $_POST['total'];
    $asignatura = $_POST['asignatura'];
    $sala = $_POST['sala'];
    $stmt = $conexion -> prepare("INSERT INTO seccion (nombre, cupo, totalinscritos, asignaturaFK, salaFK) VALUE (:nombre, :cupo, :totalinscritos, :asignaturaFK, :salaFK)");
    $stmt -> bindParam(':nombre', $nombre);
    $stmt -> bindParam(':cupo', $cupo);
    $stmt -> bindParam(':totalinscritos', $total);
    $stmt -> bindParam(':asignaturaFK', $asignatura);
    $stmt -> bindParam(':salaFK', $sala);
    $stmt -> execute();
    echo "exito";
?>