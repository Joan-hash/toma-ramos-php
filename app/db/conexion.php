<?php
    $servidor = "localhost";
    $nombreDB = "miramo";
    $usuarioDB = "root";
    $claveDB = "";
    try {
        $conexion = new PDO("mysql:host=$servidor; dbname=$nombreDB", $usuarioDB, $claveDB);
        $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "conexión fallida".$e -> getMessage();
    }
?>