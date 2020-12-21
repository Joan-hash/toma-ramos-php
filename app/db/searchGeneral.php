<?php
    //busqueda de asignaturas en la base de datos
    function buscarAsignaturas(){
        require('conexion.php');
        $stmt = $conexion -> prepare("SELECT * FROM asignatura");
        $stmt -> execute();
        $stmt -> setFetchMode(PDO::FETCH_ASSOC);
        $resultado = $stmt -> fetchAll();
        return $resultado;
    }
    //busqueda de salas en la base de datos
    function buscarSalas(){
        require('conexion.php');
        $stmt = $conexion -> prepare("SELECT * FROM sala");
        $stmt -> execute();
        $stmt -> setFetchMode(PDO::FETCH_ASSOC);
        $resultado = $stmt -> fetchAll();
        return $resultado;
    }
?>